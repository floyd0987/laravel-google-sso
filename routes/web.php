<?php

use Illuminate\Support\Facades\Route;
use GoogleSSO\Http\Controllers\GoogleSSOController;

Route::get('/auth/redirect/google', [GoogleSSOController::class, 'redirect']);
Route::get('/auth/callback/google', [GoogleSSOController::class, 'callback']);
