<?php

use Illuminate\Support\Facades\Route;



Route::resource('blogs','BlogController');
Route::resource('blogCategories','BlogCategoryController');
