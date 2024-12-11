<?php

use App\Http\Controllers\Tierlist\TierlistController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::controller(TierlistController::class)->group(function () {
    Route::get('tierlistuser', 'getTierlistUsers');
});