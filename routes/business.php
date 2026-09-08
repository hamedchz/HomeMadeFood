<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [SetLocale::class]], function () {


  Route::livewire('/', 'business.dashboard.dashboard');
});
