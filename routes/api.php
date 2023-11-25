<?php

use App\Http\Controllers\Api\SupportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/supports', SupportController::class);

