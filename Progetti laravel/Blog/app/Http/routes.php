<?php



Route::controller('backend/categories', 'Backend\CategoryController');
Route::controller('backend/articles', 'Backend\ArticleController');
Route::controller('backend/users', 'Backend\UserController');
Route::controller('backend', 'Backend\MainController');

Route::controller('/', 'FrontendController');



