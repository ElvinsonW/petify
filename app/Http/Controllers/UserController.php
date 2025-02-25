<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDO;

class UserController extends Controller
{
    public function index(){
        return view('dashboard.User.updateProfile',[
            "user" => auth()->user(),
        ]);
    }

    public function update(Request $request, string $username){
        $user = User::where('username',$username)->firstOrFail();

        if($user){
            $rules = [
                "address" => ['required','max:255'],
                'phone_number' => ['required'],
                'role' => ['prohibited']
            ];

            if($request->email != $user->email){
                $rules["email"] = ['required','email','unique:users,email,'];
            } else if($request->username != $user->username) {
                $rules["username"] = ['required','max:15', "unique:users,username"];
            }

            $validatedData = $request->validate($rules);
            $user->update(Arr::except($validatedData, ['role']));
            return redirect('/dashboard' . '/' . $user->username .'/profile')->with('userSuccess',"User successfully updated");
        }
    
        return redirect('')->with('userError',"There is no user with that username");
    }

    public function registerForm(){
        return view('register');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            "name" => ['required','max:255'],
            "username" => ['required','max:15','unique:users,username'],
            "address" => ['required','max:255'],
            "email" => ['required','email','unique:users,email'],
            'phone_number' => ['required'],
            'password' => ['required','min:8','regex:/[A-Z]/','regex:/[a-z]/', 'regex:/[0-9]/'],
            'role' => ['prohibited']
        ]);
    
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        unset($validatedData['role']);
    
        User::create($validatedData);
        
        return redirect('/login')->with('registerSuccess','Registration Success, Please Login!');
    }

    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
            if(auth()->user()->role === "Admin") {
                return redirect('/dashboard/adoption-post-requests')->with('loginSuccess', 'You have successfully logged in.');
            }
        
            return redirect()->intended('/')->with('loginSuccess', 'You have successfully logged in.');
        }
    
        return redirect('/login')->with('loginError','The provided password do not match our records.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
