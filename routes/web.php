<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/dashboard', action: [DashboardController::class, 'index'])->name(name: 'dashboard');
Route::get(uri: '/students', action: [StudentController::class, 'index'])->name(name: 'students.index');
Route::get(uri: '/students/create', action: [StudentController::class, 'create'])->name(name: 'students.create');
Route::get(uri: '/students/{id}', action: [StudentController::class, 'show'])->name(name: 'students.show');
Route::get(uri: '/students/{id}/edit', action: [StudentController::class, 'edit'])->name(name: 'students.edit');





// // Basic Routing
// Route::get(uri: '/students', action: function(): string {
//     return 'students data...';
// });

// // redirect Routing
// Route::redirect(uri: '/redirect', destination: '/students');

// // Named Routing
// Route::get(uri: '/students/create', action: function(): string {
//     return 'create student data...';
// })->name(name: 'students.create');

// // Routing with parameter
// Route::get(uri: '/students/{id}', action: function(string $id): string {
//     return 'student ' . $id;
// });
// connect to controller






