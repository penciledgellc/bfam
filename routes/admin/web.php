<?php

use App\Http\Controllers\AdminViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();

Route::middleware('auth')->name('admin.')->group(function () {
    Route::middleware('role:admin')->group(function (){
        Route::get('/',                                                     [AdminViewController::class, 'dashboard'])->name('dashboard');
        Route::get('/create-course',                                        [AdminViewController::class, 'createCourse'])->name('create-course');
        Route::get('/create-course-category',                               [AdminViewController::class, 'createCourse'])->name('create-course-category');
        Route::get('/create-course-sections/{course_id}',                   [AdminViewController::class, 'addSections'])->name('add-course-section');
        Route::get('/create-course-section-content/{section_id}',           [AdminViewController::class, 'addSectionContents'])->name('add-course-section-content');


        Route::get('/courses',                                               [AdminViewController::class, 'courses'])->name('courses');
        Route::get('/course-details/{course_id}',                            [AdminViewController::class, 'courseDetails'])->name('course-details');

        Route::get('/edit-course/{course_id}',                               [AdminViewController::class, 'editCourse'])->name('edit-course');
        Route::get('/edit-course-section/{section_id}',                      [AdminViewController::class, 'editSection'])->name('edit-course-section');

        Route::get('/categories',                                            [AdminViewController::class, 'categories'])->name('categories');
        Route::get('/categories/{category_name}',                            [AdminViewController::class, 'categoryCourses'])->name('category-courses');

        Route::get('/students',                                              [AdminViewController::class, 'students'])->name('students');
    });
});