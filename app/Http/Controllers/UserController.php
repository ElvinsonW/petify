<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('dashboard.User.updateProfile',[
            "user" => auth()->user(),
        ]);
    }

    public function update(Request $request){
        $user = auth()->user();

        
        if($user){
            $validatedData = $request->validate([
                "username" => ['required','max:15'],
                "address" => ['required','max:255'],
                "email" => ['required','email','unique:users,email,'],
                'phone_number' => ['required'],
                'role' => ['prohibited']
            ]);

            $user->update(Arr::except($validatedData, ['role']));

            return redirect('/dashboard/profile')->with('userSuccess',"User successfully updated");
        }
    
        return redirect('')->with('userError',"There is no user with that username");
        
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
