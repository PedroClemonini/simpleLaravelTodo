<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Models\ListItem;

Route::get('/', function () {
    return view('welcome', ["listItems" => ListItem::where('is_complete',0)->get()]);
});

Route::post('/saveItem', [TodoListController::class,'saveItem'])->name('saveItem');
Route::post('/markComplete/{id}', [TodoListController::class,'markComplete'])->name('markComplete');
