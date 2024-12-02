<?php

use App\Http\Controllers\FourChan\ThreadController;



Route::controller(ThreadController::class)->group(function () {
    Route::get('vrgthread', 'getVrgThread');
});