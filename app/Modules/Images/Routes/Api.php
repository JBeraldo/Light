<?php

use App\Modules\Images\Http\Controller\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/optimize',[ImageController::class, 'optimize']);
