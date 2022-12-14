<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayControler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

// Auth::routes();

//Route::get('/user', [UserController::class, 'index']);

Route::prefix('/')->group(function() {
    Route::prefix('/articles')->group(function() {
        Route::controller(ArticleController::class)->group(function() {
            Route::get('/', 'all')->name('all.article');
            Route::get('/{article}', 'show')->name('show.article');
        });
    });
    Route::prefix('/contact')->group(function() {
        Route::controller(ContactController::class)->group(function() {
            Route::get('/', 'form')->name('form.contact');
            Route::post('/', 'send')->name('form.send');
        });
    });
    Route::prefix('/cart')->group(function() {
        Route::controller(CartController::class)->group(function() {
            Route::get('/', 'show')->name('show.cart');
            Route::post('/', 'add')->name('add.cart');
        });
    });
    Route::prefix('/pay')->group(function() {
        Route::controller(PayControler::class)->group(function() {
            Route::post('/', 'pay')->name('pay');
        });
    });
})->name('boutique.');

Route::prefix('/admin')->group(function() {
    Route::prefix('/articles')->group(function() {
        Route::controller(AdminArticleController::class)->group(function() {
            Route::get('/', 'all')->name('all.article');
            Route::get('/new', 'newArticle')->name('new.article');
            Route::get('/{article}', 'show')->name('show.article');
            Route::post('/new', 'save')->name('save.article');
            Route::put('/{article}', 'updateArticle')->name('update.article');
            Route::delete('/{article}', 'deleteArticle')->name('delete.article');
        });
    });
    Route::prefix('/orders')->group(function() {
        Route::controller(OrderController::class)->group(function() {
            Route::get('/', 'all')->name('all.order');
        });
    });
})->name('admin.');









use App\Models\User;

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});
