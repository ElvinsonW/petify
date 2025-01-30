<?php

use App\Http\Controllers\AdoptionPostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LifeAfterAdoptionController;
use App\Http\Controllers\LikedAdoptionPostController;
use App\Http\Middleware\CheckPostOwnership;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles/createSlug',[ArticleController::class,'createSlug'])->name('articles.createSlug');

Route::resource('/articles', ArticleController::class)->middleware('auth');

Route::get('/adoptions/createSlug',[ArticleController::class,'createSlug'])->name('adoptions.createSlug');

Route::resource('/adoptions', AdoptionPostController::class);

Route::resource('/life-after-adoption', LifeAfterAdoptionController::class);
    
Route::post('/adoptions/{slug}/like', [LikedAdoptionPostController::class, 'like']);

Route::delete('/adoptions/{slug}/like', [LikedAdoptionPostController::class, 'unlike']);

Route::get('/login',function (){
    return view('login');
});

Route::post('/login', function(Request $request) {
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('')->with('loginSuccess','You have successfully logged in.');
    }

    return redirect('/login')->with('loginError','The provided password do not match our records.');
})->name('login');

Route::get('/register',function(){
    return view('register');
})->middleware('guest');

Route::post('/register', function(Request $request){
    $validatedData = $request->validate([
        "name" => ['required','max:255'],
        "username" => ['required','max:15'],
        "address" => ['required','max:255'],
        "email" => ['required','email'],
        'phone_number' => ['required'],
        'password' => ['required','min:8','regex:/[A-Z]/','regex:/[a-z]/', 'regex:/[0-9]/']
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    
    return redirect('/login')->with('registerSuccess','Registration Success, Please Login!');
})->middleware('guest');

