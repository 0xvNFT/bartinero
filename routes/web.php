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

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id;
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/single', function () {
    return view('pages.single');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});
