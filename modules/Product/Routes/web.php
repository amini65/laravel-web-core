<?php

use Illuminate\Support\Facades\Route;



Route::resource('products','ProductController');
Route::resource('productCategories','ProductCategoryController');
