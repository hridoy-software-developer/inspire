<?php

use Sirbizz\SoftwareLab\SoftwareLabController;
use Illuminate\Support\Facades\Route;

Route::get('inspire', [SoftwareLabController::class, 'index']);