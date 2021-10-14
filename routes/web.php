<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookissueController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [AdminController::class, 'login'])->name('auth.login');
Route::get('/auth/registration', [AdminController::class, 'registration'])->name('auth.registration');
Route::post('/auth/save', [AdminController::class, 'save'])->name('auth.save');
Route::post('/auth/cklogin', [AdminController::class, 'cklogin'])->name('auth.cklogin');
Route::get('/auth/logout', [AdminController::class, 'logout'])->name('auth.logout');



Route::group(['middleware'=>['Authcheck']], function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    //member
    Route::get('/admin/member/memberlist', [MemberController::class, 'index']);
    Route::get('/admin/member/addmember', [MemberController::class, 'addmember']);
    Route::get('/admin/member/addmember/{id}', [MemberController::class, 'addmember']);
    Route::post('/admin/createmember', [MemberController::class, 'createmember'])->name('admin.insert');
    Route::get('/admin/member/memberlist/delete/{id}', [MemberController::class, 'delete']);
    //book
    Route::get('/admin/book/booklist', [BookController::class, 'index']);
    Route::get('/admin/book/addbook', [BookController::class, 'addbook']);
    Route::get('/admin/book/addbook/{id}', [BookController::class, 'addbook']);
    Route::post('/admin/createbook', [BookController::class, 'createbook'])->name('admin.create');
    Route::get('/admin/book/booklist/delete/{id}', [BookController::class, 'delete']);
    //issue
    Route::get('/admin/issue/issuebooklist', [BookissueController::class, 'index']);
    Route::get('/admin/issue/issuebook', [BookissueController::class, 'issuebook']);
    Route::get('/admin/issue/issuebook/{id}', [BookissueController::class, 'addbook']);
    Route::post('/admin/createissue', [BookissueController::class, 'createissue'])->name('admin.create');
    Route::get('/admin/issue/issuebooklist/delete/{id}', [BookissueController::class, 'delete']);

});