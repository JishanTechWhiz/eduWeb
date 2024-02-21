<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManageCourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'home'])->name('home');

Route::get('/blog',[AuthController::class,'blogPage']);

Route::get('/course',[AuthController::class,'coursePage']);

Route::get('/contact',[AuthController::class,'contactPage']);

Route::get('/about',[AuthController::class,'aboutPage']);

Route::get('/checkout',[AuthController::class,'checkoutPage']);

Route::get('/singleCourses/{id}',[ManageCourseController::class,'singleCourse'])->name('singleCourse');

//Route::get('/manageCourse',[AuthController::class,'manageCoursePage']);

Route::post('/custom-registration',[AuthController::class,'regPost'])->name('register.custom');

Route::post('/custom-login', [AuthController::class, 'loginPost'])->name('login.custom');

Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');


Route::get('/manageCourse',[ManageCourseController::class,'coursePage']);
Route::post('/manageCourse',[ManageCourseController::class,'store']);

 Route::get('/manageCourse',[ManageCourseController::class,'show']);

 Route::get('/course',[ManageCourseController::class,'showCourse']);

 Route::post('/manageCourse/update/{id}',[ManageCourseController::class,'update']);

 Route::get('/manageCourse/delete/{id}',[ManageCourseController::class,'destroy']);
