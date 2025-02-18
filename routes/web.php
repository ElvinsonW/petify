<?php

use App\Http\Controllers\AdoptionPostController;
use App\Http\Controllers\AdoptionPostRequestController;
use App\Http\Controllers\AdoptionRequestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleRequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventRequestController;
use App\Http\Controllers\LifeAfterAdoptionController;
use App\Http\Controllers\LikedAdoptionPostController;
use App\Http\Controllers\LikedLifeAfterAdoptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Middleware\GuestMode;
use App\Models\ArticleRequest;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/login',function (){
    return view('login');
})->name("login")->middleware(GuestMode::class);

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
})->name('login')->middleware(GuestMode::class);

// Registration Routes
Route::get('/register',function(){
    return view('register');
})->middleware(GuestMode::class);

Route::post('/register', function(Request $request){
    $validatedData = $request->validate([
        "name" => ['required','max:255'],
        "username" => ['required','max:15'],
        "address" => ['required','max:255'],
        "email" => ['required','email'],
        'phone_number' => ['required'],
        'password' => ['required','min:8','regex:/[A-Z]/','regex:/[a-z]/', 'regex:/[0-9]/'],
        'role' => ['prohibited']
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    unset($validatedData['role']);

    User::create($validatedData);
    
    return redirect('/login')->with('registerSuccess','Registration Success, Please Login!');
})->middleware(GuestMode::class);

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
Route::get('/events/createSlug',[EventController::class,'createSlug'])->name('adoptions.createSlug')->middleware('auth');
Route::resource('/events', EventController::class)->middleware('auth');

// Adoption Request Routes
Route::resource('/adoptions/{slug}/adoption-request', AdoptionRequestController::class);

// Route::resource('/dashboard', DashboardController::class);

Route::resource('/dashboard/article-requests', ArticleRequestController::class);

Route::get('/dashboard/article-requests/{slug}/{action}', [ArticleRequestController::class,'handleRequest']);

Route::resource('/dashboard/adoption-post-requests', AdoptionPostRequestController::class);

Route::get('/dashboard/adoption-post-requests/{slug}/{action}', [AdoptionPostRequestController::class,'handleRequest']);

Route::resource('/dashboard/event-requests', EventRequestController::class);

Route::get('/dashboard/event-requests/{slug}/{action}', [EventRequestController::class,'handleRequest']);

Route::fallback(function () {
    return view('homepage');  
});

Route::get('/dashboard/my-posts',[UserDashboardController::class,'indexPost']);

Route::get('/dashboard/my-adoption-requests',[UserDashboardController::class,'indexAdoptionRequest']);

Route::get('/dashboard/my-liked-posts',[UserDashboardController::class,'indexLikedPost']);

Route::get('/dashboard/my-post-requests',[UserDashboardController::class,'indexPostRequest']);

// Route::get('/dashboard/update-profile',[UserDashboardController::class,'indexUpdateProfile']);

Route::get("/dashboard/profile",[UserController::class,"index"]);

Route::put("/dashboard/profile",[UserController::class,"update"]);