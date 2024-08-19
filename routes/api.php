<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticalTagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomDayController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DayController;

// Article Routes
Route::get('articles', [ArticleController::class, 'index']);
Route::post('articles/store', [ArticleController::class, 'store']);
Route::get('articles/{id}', [ArticleController::class, 'show']);
Route::put('articles/{id}', [ArticleController::class, 'update']);
Route::delete('articles/{id}', [ArticleController::class, 'destroy']);

// ArticalTag Routes
Route::get('artical-tags', [ArticalTagController::class, 'index']);
Route::post('artical-tags/store', [ArticalTagController::class, 'store']);
Route::get('artical-tags/{id}', [ArticalTagController::class, 'show']);
Route::put('artical-tags/{id}', [ArticalTagController::class, 'update']);
Route::delete('artical-tags/{id}', [ArticalTagController::class, 'destroy']);

// Category Routes
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories/store', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::put('categories/{id}', [CategoryController::class, 'update']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);

// Facility Routes
Route::get('facilities', [FacilityController::class, 'index']);
Route::post('facilities/store', [FacilityController::class, 'store']);
Route::get('facilities/{id}', [FacilityController::class, 'show']);
Route::put('facilities/{id}', [FacilityController::class, 'update']);
Route::delete('facilities/{id}', [FacilityController::class, 'destroy']);

// Member Routes
Route::get('members', [MemberController::class, 'index']);
Route::post('members/store', [MemberController::class, 'store']);
Route::get('members/{id}', [MemberController::class, 'show']);
Route::put('members/{id}', [MemberController::class, 'update']);
Route::delete('members/{id}', [MemberController::class, 'destroy']);

// Offer Routes
Route::get('offers', [OfferController::class, 'index']);
Route::post('offers/store', [OfferController::class, 'store']);
Route::get('offers/{id}', [OfferController::class, 'show']);
Route::put('offers/{id}', [OfferController::class, 'update']);
Route::delete('offers/{id}', [OfferController::class, 'destroy']);

// Payment Routes
Route::get('payments', [PaymentController::class, 'index']);
Route::post('payments/store', [PaymentController::class, 'store']);
Route::get('payments/{id}', [PaymentController::class, 'show']);
Route::put('payments/{id}', [PaymentController::class, 'update']);
Route::delete('payments/{id}', [PaymentController::class, 'destroy']);

// Room Routes
Route::get('rooms', [RoomController::class, 'index']);
Route::post('rooms/store', [RoomController::class, 'store']);
Route::get('rooms/{id}', [RoomController::class, 'show']);
Route::put('rooms/{id}', [RoomController::class, 'update']);
Route::delete('rooms/{id}', [RoomController::class, 'destroy']);

// RoomDay Routes
Route::get('room-days', [RoomDayController::class, 'index']);
Route::post('room-days/store', [RoomDayController::class, 'store']);
Route::get('room-days/{id}', [RoomDayController::class, 'show']);
Route::put('room-days/{id}', [RoomDayController::class, 'update']);
Route::delete('room-days/{id}', [RoomDayController::class, 'destroy']);

// Sport Routes
Route::get('sports', [SportController::class, 'index']);
Route::post('sports/store', [SportController::class, 'store']);
Route::get('sports/{id}', [SportController::class, 'show']);
Route::put('sports/{id}', [SportController::class, 'update']);
Route::delete('sports/{id}', [SportController::class, 'destroy']);

// Subscription Routes
Route::get('subscriptions', [SubscriptionController::class, 'index']);
Route::post('subscriptions/store', [SubscriptionController::class, 'store']);
Route::get('subscriptions/{id}', [SubscriptionController::class, 'show']);
Route::put('subscriptions/{id}', [SubscriptionController::class, 'update']);
Route::delete('subscriptions/{id}', [SubscriptionController::class, 'destroy']);

// Tag Routes
Route::get('tags', [TagController::class, 'index']);
Route::post('tags/store', [TagController::class, 'store']);
Route::get('tags/{id}', [TagController::class, 'show']);
Route::put('tags/{id}', [TagController::class, 'update']);
Route::delete('tags/{id}', [TagController::class, 'destroy']);



Route::get('days', [DayController::class, 'index']);
Route::post('days/store', [DayController::class, 'store']);
Route::get('days/{id}', [DayController::class, 'show']);
Route::put('days/{id}', [DayController::class, 'update']);
Route::delete('days/{id}', [DayController::class, 'destroy']);
