<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Models\Menu;
use App\Models\User;
use App\Models\Contact;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactUsFormController;
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

// Route::get('/', function () {
//     return redirect('_','/login')->name('login');
// });
Route::redirect('/','/login');
Route::get('/test_category',function(){
    $category = Category::find(1);
    echo $category->name;
});
Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/menu', MenuController::class)->middleware('auth');

// login and logout
Route::redirect('_','/login')->name('login');
Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
Route::post('/login', [AdminController::class, 'loginPost'])->name('admin.login.post');
Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/',[FrontendController::class,'index'])->name('homepage');
Route::get('/list',[FrontendController::class,'list']);

Route::get('/show/{id}',[FrontendController::class,'show']);

Route::get('/frontend/{category}', [FrontendController::class,'getByCategory']);

Route::get('/search', [FrontendController::class,'getBySearch']);

Route::get('/list',[FrontendController::class,'list']);
Route::get('/about',[FrontendController::class,'about'])->name('aboutPage');
// Route::get('/contact',[FrontendController::class,'contact'])->name('contactPage');

Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contactPage');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
