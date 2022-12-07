<?php

use Illuminate\Support\Facades\Route;

Route::get('/webhook', [\App\Http\Controllers\WebhookController::class, 'input']);
