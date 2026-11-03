<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/items/create',[ItemController::class,'create']);

Route::post('/item',[ItemController::class,'store'])->name('item.store');

//  <from action="{{route('item.store')}}"method="post">