<?php

use Sirbizz\SoftwareLab\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('inspire', [InspirationController::class, 'index']);