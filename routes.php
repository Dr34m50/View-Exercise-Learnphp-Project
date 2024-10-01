<?php

use App\Controllers\AuthController;
use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Route;
// PublicController::class => 'App\Controllers\PublicController'
Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/form', [PublicController::class, 'answer']);

Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::post('/admin/posts', [PostsController::class, 'store']);
Route::get('/admin/posts/edit', [PostsController::class, 'edit']);
Route::post('/admin/posts/edit', [PostsController::class, 'update']);
Route::get('/admin/posts/delete', [PostsController::class, 'destroy']);
Route::get('/admin/posts/view', function() {
    $id = $_GET['id'];
    (new PostsController())->show($id);
});
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);