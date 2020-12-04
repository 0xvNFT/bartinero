 <?php

use Illuminate\Support\Facades\Route;

//imported to para sa [PagesController::class]
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id;
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

//mas better parin yung may @ index to dito mga items
//Route::get('/', 'PagesController@index');

//homepage
Route::get('/', function() {
    return view ('home');
})->name('home');

//Register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::POST('/register', [RegisterController::class, 'store']);

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::POST('/login', [LoginController::class, 'store']);

//Logout
Route::POST('/logout', [LogoutController::class, 'store'])->name('logout');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')
->middleware('auth');//prevent unsign user viewing dashboard

Route::get('/categories', [PagesController::class, 'categories'])->name('categories');

Route::get('/single', [PagesController::class, 'single']);
