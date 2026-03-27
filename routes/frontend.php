<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');


Route::get('/message/{itemSlug}', [FrontendController::class, 'message'])->name('frontend.message.show');

Route::get('/academics/{slug}', [FrontendController::class, 'academics'])->name('frontend.academics');

Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('frontend.gallery');
Route::get('/gallery/{slug}', [FrontendController::class, 'albumShow'])->name('frontend.gallery.show');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'showBlog'])->name('frontend.blog.show');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactStore'])->name('frontend.contacts.store');
Route::get('/admission', [AdmissionController::class, 'admission'])->name('frontend.admission');
Route::post('/admission', [AdmissionController::class, 'studentStore'])->name('frontend.admission.store');
Route::get('/downloads', [FrontendController::class, 'downloads'])->name('downloads');
Route::get('/downloads/{slug}/file', [FrontendController::class, 'downloadFile'])->name('downloads.file');

Route::get('/notice', [FrontendController::class, 'notice'])->name('notice');
Route::post('/notice/{notice}/view', [FrontendController::class, 'incrementNoticeView'])->name('notice.view');

Route::get('/event', [FrontendController::class, 'event'])->name('frontend.events');
Route::get('/event/{slug}', [FrontendController::class, 'eventShow'])->name('frontend.events.show');

Route::get('/page/{slug}', [FrontendController::class, 'showPageSection'])->name('frontend.page.section');

Route::get('/reviews', [FrontendController::class, 'reviews'])->name('frontend.reviews');
Route::get('/teachers', [FrontendController::class, 'teachers'])->name('frontend.teachers');

Route::get('/esewa/success', [AdmissionController::class, 'esewaSuccess'])->name('esewa.success');
Route::get('/esewa/failure', [AdmissionController::class, 'esewaFailure'])->name('esewa.failure');
Route::get('/payment/confirmation', [AdmissionController::class, 'confirmation'])->name('esewa.confirmation');

Route::get('/calendar', [CalendarController::class, 'calendar'])->name('frontend.calendar');
