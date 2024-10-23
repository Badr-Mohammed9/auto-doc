<?php

use App\Http\Controllers\DocumentationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class,'getAllProjects'])->name('projects');

Route::get('/create_project_page',[ProjectController::class,'get_create'])->name('create-project');

Route::post('/create_project',[ProjectController::class,'create_project'])->name('create_project');

Route::get('/documentation/{project}',[DocumentationController::class,'getDoc'])->name('get-doc');

