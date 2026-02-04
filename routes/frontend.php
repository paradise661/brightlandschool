<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/message', [FrontendController::class, 'message'])->name('message');
Route::get('/curriculum', [FrontendController::class, 'curriculum'])->name('curriculum');
Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'showBlog'])->name('frontend.blog.show');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/admission', [FrontendController::class, 'admission'])->name('frontend.admission');
Route::post('/admission', [FrontendController::class, 'studentStore'])->name('frontend.admission.store');
Route::get('/downloads', [FrontendController::class, 'downloads'])->name('downloads');
Route::get('/downloads/{slug}/file', [FrontendController::class, 'downloadFile'])->name('downloads.file');
