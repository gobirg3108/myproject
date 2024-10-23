<?php

use App\Modules\ExampleModule\Http\Controllers\ExampleController;

Route::get('/example', [ExampleController::class, 'index']);
