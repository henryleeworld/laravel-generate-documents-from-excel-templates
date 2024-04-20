<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::get('document/generate/', [DocumentController::class, 'generate']);
