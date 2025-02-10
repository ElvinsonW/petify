<?php

use App\Http\Controllers\AdoptionPostController;
use App\Http\Controllers\AdoptionRequestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LifeAfterAdoptionController;
use App\Http\Controllers\LikedAdoptionPostController;
use App\Http\Controllers\LikedLifeAfterAdoptionController;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

// Login Routes
Route::get('/login',function () {
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

// Registration Routes
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

// Home page
Route::get('/', function () {
    return view('homepage');
});

// Article Routes
Route::get('/articles/createSlug',[ArticleController::class,'createSlug'])->name('articles.createSlug')->middleware('auth');
Route::resource('/articles', ArticleController::class)->middleware('auth');

// Adoption Routes
Route::get('/adoptions/createSlug',[ArticleController::class,'createSlug'])->name('adoptions.createSlug')->middleware('auth');
Route::resource('/adoptions', AdoptionPostController::class)->middleware('auth');

// Life After Adoption Routes
Route::resource('/life-after-adoption', LifeAfterAdoptionController::class)->middleware('auth');
    
Route::post('/adoptions/{slug}/like', [LikedAdoptionPostController::class, 'like'])->middleware('auth');
Route::delete('/adoptions/{slug}/like', [LikedAdoptionPostController::class, 'unlike'])->middleware('auth');
Route::post('/life-after-adoption/{post_id}/like',[LikedLifeAfterAdoptionController::class,'like'])->middleware('auth');
Route::delete('/life-after-adoption/{post_id}/like',[LikedLifeAfterAdoptionController::class,'unlike'])->middleware('auth');
Route::get('life-after-adoption/{post_id}/like-count',[LikedLifeAfterAdoptionController::class,'likeCount'])->middleware('auth');

// Event Routes
Route::get('/events', [EventController::class, 'index'])->middleware('auth');
Route::get('/events/{slug}', [EventController::class, 'show'])->middleware('auth');

// Adoption Request Routes
Route::resource('/adoption-request', AdoptionRequestController::class);
