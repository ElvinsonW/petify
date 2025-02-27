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
use App\Http\Controllers\FindMyPetController;
use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\CheckPostOwnership;
use App\Http\Middleware\GuestMode;
use App\Http\Middleware\OwnerDashboardOnly;
use App\Models\ArticleRequest;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/login',[UserController::class,"loginForm"])->name("login")->middleware(GuestMode::class);

Route::post('/login', [UserController::class,"login"])->name('login')->middleware(GuestMode::class);

// Registration Routes
Route::get('/register',[UserController::class,"registerForm"])->middleware(GuestMode::class);

Route::post('/register', [UserController::class,"register"])->middleware(GuestMode::class);

Route::post('/logout',[UserController::class,"logout"])->middleware('auth');

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

Route::post('/adoptions/{slug}/unlike', [LikedAdoptionPostController::class, 'unlike'])->middleware('auth');

Route::post('/life-after-adoption/{post_id}/like',[LikedLifeAfterAdoptionController::class,'like'])->middleware('auth');

Route::delete('/life-after-adoption/{post_id}/like',[LikedLifeAfterAdoptionController::class,'unlike'])->middleware('auth');

Route::get('life-after-adoption/{post_id}/like-count',[LikedLifeAfterAdoptionController::class,'likeCount'])->middleware('auth');

// Event Routes
Route::get('/events/createSlug',[EventController::class,'createSlug'])->name('adoptions.createSlug')->middleware('auth');

Route::resource('/events', EventController::class)->middleware('auth');

// Adoption Request Routes
Route::get('/adoptions/{slug}/adoption-request/create', [AdoptionRequestController::class, 'create']);

Route::resource('/dashboard/article-requests', ArticleRequestController::class)->middleware(AdminOnly::class);

Route::get('/dashboard/article-requests/{slug}/{action}', [ArticleRequestController::class,'handleRequest'])->middleware(AdminOnly::class);

Route::resource('/dashboard/adoption-post-requests', AdoptionPostRequestController::class)->middleware(AdminOnly::class);

Route::get('/dashboard/adoption-post-requests/{slug}/{action}', [AdoptionPostRequestController::class,'handleRequest'])->middleware(AdminOnly::class);

Route::resource('/dashboard/event-requests', EventRequestController::class)->middleware(AdminOnly::class);

Route::get('/dashboard/event-requests/{slug}/{action}', [EventRequestController::class,'handleRequest'])->middleware(AdminOnly::class);

Route::get('/dashboard/{username}/posts',[UserDashboardController::class,'indexPost']);

Route::resource('/find-your-pet', FindMyPetController::class)->middleware('auth');

Route::resource('/find-my-pet', FindMyPetController::class)->middleware('auth');

Route::get('/find-my-pet-form', [FindMyPetController::class, 'create'])->name('find-my-pet-form')->middleware('auth');

Route::get('/dashboard/{username}/adoption-requests',[UserDashboardController::class,'indexAdoptionRequest'])->middleware(OwnerDashboardOnly::class);

Route::get('/dashboard/{username}/liked-posts',[UserDashboardController::class,'indexLikedPost'])->middleware(OwnerDashboardOnly::class);

Route::get('/dashboard/{username}/post-requests',[UserDashboardController::class,'indexPostRequest'])->middleware(OwnerDashboardOnly::class);

Route::get("/dashboard/{username}/profile",[UserController::class,"index"])->middleware(OwnerDashboardOnly::class);

Route::put("/dashboard/{username}/profile",[UserController::class,"update"])->middleware(OwnerDashboardOnly::class);

Route::get('/dashboard/{username}/adoption-history',[UserDashboardController::class,'indexAdoptionHistory']);

Route::get('/adoptions/{slug}/adoption-request/{id}/{action}',[AdoptionRequestController::class,"handleRequest"])->middleware(CheckPostOwnership::class);
