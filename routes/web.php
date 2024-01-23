<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PractController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/post/{id}', function ($id) {
    return "<h1>Post $id</h1>";
});
Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "<h1>Post $id | $slug </h1>";
})->where(['id' => '[0-9+]', 'slug' => '[A-Za-z]+']);

Route::get('/home', function () {
    $res = 2+3;
    $name = 'name';
    return view('home', compact('res','name'));
});
// Route::get('/contact', function () {
   
//     return view('contact');
// });
// Route::post('/send', function () {
//     if(!empty($_POST)){
//         dump($_POST);
//     }
//     // return '<h1>SEND</h1>';
// });
route::match(['post', 'get'], '/contact7', function () {
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact') ;
})-> name('isp222'); 

route::prefix('admin')->group(function(){
    Route::get('/posts', function(){
        return 'Posts List';
    });
    Route::get('/posts/create', function(){
        return 'Posts Create';
    });
    Route::get('/posts/{id}/edit', function($id){
        return "Posts Post $id";
    });
});
route::prefix('user')->group(function(){
    Route::get('/{id}', function($id){
        return "user $id";
    });
    Route::get('/{id}/{name}', function ($id, $name) {
        return "<h1>user $id - $name </h1>";
    });
});

Route::get('/articles/{date}', function($date){
    return "$date";
});

route::fallback(function(){
    return redirect()->route('home');
});


route::get('/post/create', [HomeController::class, 'create'])->name('post.create')->middleware('admin');
route::post('/post', [HomeController::class, 'store'])->name('post.store');

route::get('/enter/create', [PractController::class, 'create'])->name('enter.create');
route::post('/enter', [PractController::class, 'store'])->name('enter.store');

route::get('/post/{id}', [ArtController::class, 'getOne']);
route::get('/pages/show', [TypeController::class, 'index']);
//route::get('/pages/all', [TypeController::class, 'showAll']);
route::get('/pages/all/{id}', [TypeController::class, 'showAll']);
route::resource('/posts', PhotoController::class);

route::redirect('/contact7', 'home', 301);




// route::group(['middleware'=>'guest'],function(){
    
//     route::get('/register', [UserController::class, 'create'])->name('user.create');
//     route::post('/register', [UserController::class, 'store'])->name('user.store');
//     route::get('/login', [UserController::class, 'LoginCreate'])->name('login.create');
//     route::post('/login', [UserController::class, 'LoginStore'])->name('login.store');
// });
// route::group(['middleware'=>'auth'],function(){
//     route::get('/logout', [UserController::class, 'logout'])->name('logout');
// });
// route::group(['middleware'=>'admin'],function(){
//     route::get('/post/create', [HomeController::class, 'create'])->name('post.create');
//     route::post('/post', [HomeController::class, 'store'])->name('post.store');
// });
   
route::middleware(['guest'])->group(function(){
    route::get('/register', [UserController::class, 'create'])->name('user.create');
    route::post('/register', [UserController::class, 'store'])->name('user.store');
    route::get('/login', [UserController::class, 'LoginCreate'])->name('login.create');
    route::post('/login', [UserController::class, 'LoginStore'])->name('login.store');
});
    route::get('/home', [HomeController::class, 'index'])->name('home');
    route::get('/about', [HomeController::class, 'show'])->name('about');

route::middleware(['auth'])->group(function(){
    route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
route::middleware(['admin'])->group(function(){
    route::get('/post/create', [HomeController::class, 'create'])->name('post.create');
    route::post('/post', [HomeController::class, 'store'])->name('post.store');
    route::get('/main', [MainController::class, 'index'])->name('main.index');
});

Route::get('/task', [HomeController::class, 'task']);

