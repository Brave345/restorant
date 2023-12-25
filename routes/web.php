<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Pengguna;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TransaksiController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'booking'])->name('booking.store');
Route::get('/reservations', [ReservationController::class, 'index'])->name('booking.index');
Route::delete('/reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail{id}', [HomeController::class, 'blogdetail'])->name('blogdetail');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comen{id}', [HomeController::class, 'comen'])->name('comen');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/transaksi', [HomeController::class, 'transaksi'])->name('transaksi');
Route::delete('/transaksi/{id}', [HomeController::class, 'destroy'])->name('transaksi.destroy');

Route::get('/transaksis', [HomeController::class, 'transaksis'])->name('transaksis');
Route::get('/transaksis_pdf', [HomeController::class, 'transaksiPDF'])->name('download.pdf');
Route::get('/invoice/{id}', [HomeController::class, 'invoice']);
Route::get('/download/invoice/pdf{id}', [HomeController::class, 'downloadInvoicePDF'])->name('download.invoice.pdf');
Route::get('/print/invoice{id}', [HomeController::class, 'showInvoice'])->name('invoice.show');
Route::resource('articles', ArticleController::class);
Route::get('/articles', [AdminController::class, 'artikel'])->name('articles.index');
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware'=> ['auth']],function(){
    Route::group(['middleware' => ['cekUserLogin:1']],function(){
        Route::resource('Admin',AdminController::class);
       
        
    });
    Route::group(['middleware' => ['cekUserLogin:2']],function(){
        Route::resource('pengguna',Pengguna::class);
    });
});
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs',[BlogController::class,'store'])->name('blogs.store');
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
//Route::get('/auth/register',[AuthController::class, 'register']);