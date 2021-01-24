<?php

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
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('danh-muc', [CategoryController::class, 'index'])->name('cate.index');

Route::get('danh-muc/add', [CategoryController::class, 'addForm'])->name('cate.add');
Route::post('danh-muc/add', [CategoryController::class, 'saveAdd']);

Route::get('danh-muc/edit/{id}', [CategoryController::class, 'editForm'])->name('cate.edit');
Route::post('danh-muc/edit/{id}', [CategoryController::class, 'saveEdit'])->name('cate.edit');
Route::get('danh-muc/{id}/remove', [CategoryController::class, 'remove'])->name('cate.remove');




Route::get('san-pham', [ProductController::class, 'index'])->name('pro.index');
Route::get('san-pham/{id}/remove', [ProductController::class, 'remove'])->name('pro.remove');



//testGit
//testGit2
//testGit3


// Route::get('/login', function () {
//     $name = "FPT poly";
//     return view('login', ['screen_name'=>$name]);
// });

// Route::post('/login', function (Request $request) {
//     // return $request->all();

//     return $request->email;
// })->name('login-url');

// Route::get('/user/{id}/{name?}', function ($id, $name="") {
//     return $id . "-" . $name;
// });


// Route::group(['prefix' => 'admin'], function () {
//     Route::get("/", function () {
//         return "Trang quản trị";
//     });

//     Route::get("user", function () {
//         return "Quản trị danh sách người dùng";
//     });
// });