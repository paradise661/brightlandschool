<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\NoticeCategoryController;
use App\Http\Controllers\Admin\PageItemController;
use App\Http\Controllers\Admin\StudentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserRegisterController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\DownloadCategoryController;
use App\Http\Controllers\Admin\DownloadsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;

Auth::routes(['register' => false]);

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('register', [UserRegisterController::class, 'index'])->name('register');
    Route::post('register', [UserRegisterController::class, 'store'])->name('store.register');

    Route::get('change-password', [AuthController::class, 'index'])->name('profile');
    Route::post('change-password', [AuthController::class, 'store'])->name('change.password');

    //setting
    Route::get('setting', [SettingController::class, 'edit'])->name('admin.setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('admin.setting.update');

    Route::resource('contacts', ContactsController::class);

    Route::resource('blog', PostController::class);
    Route::resource('blog-category', BlogCategoryController::class);

    Route::resource('downloads', DownloadsController::class);
    Route::resource('downloads-category', DownloadCategoryController::class);

    Route::resource('student', StudentsController::class);
    Route::get('student/{student}/download', [StudentsController::class, 'download'])->name('student.download');

    Route::resource('notices', NoticeController::class);
    Route::resource('notices-category', NoticeCategoryController::class);

    Route::resource('slider', SliderController::class);

    Route::resource('album', AlbumController::class);
    Route::prefix('album/{album}/gallery')->name('album.gallery.')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index');
        Route::get('/create', [GalleryController::class, 'create'])->name('create');
        Route::post('/', [GalleryController::class, 'store'])->name('store');
        Route::delete('/{gallery}/delete-file', [GalleryController::class, 'documentDelete'])->name('delete-file');
    });

    Route::resource('event-category', EventCategoryController::class);
    Route::resource('event', EventController::class);

    Route::resource('pages', PageController::class);
    Route::resource('pages.items', PageItemController::class);

    Route::resource('review', ReviewController::class);
});
