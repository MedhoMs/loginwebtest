<?php

//use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ImagesController\ElectrodomesticosImages;
use App\Http\Controllers\ImagesController\MovilesImages;
use App\Http\Controllers\ImagesController\PortatilesImages;
use App\Http\Controllers\ImagesController\OrdenadoresImages;
use App\Http\Controllers\ImagesController\MixHubImages;

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

//Route::get('/', [DashboardController::class, 'index']);

Route::get('/authentication/create_account', function () {
    return view('authentication.create_account');
});

Route::get('/authentication/sign_in', function () {
    return view('authentication.sign_in');
});

Route::post('/register', [UserController::class, 'store']);

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    $user = DB::table('users')->where('email', $email)->first();

    if ($user && $user->password === $password) {
        session(['user_email' => $user->email]);
        return redirect('/');
    } else {
        return redirect()->back()->withErrors([
            'login' => 'Email o contraseña incorrectos.',
        ]);
    }
});

Route::get('/', function () {
    return view('hub');
});

Route::get('/authentication/set_username', function () {
    return view('authentication.set_username');
});

Route::get('/electrodomesticos', function () {
    return view('electrodomesticos');
});

Route::get('/electrodomesticos', [ElectrodomesticosImages::class, 'electrodomestico']);

Route::get('/moviles', function () {
    return view('moviles');
});

Route::get('/moviles', [MovilesImages::class, 'movil']);

Route::get('/portatiles', function () {
    return view('portatiles');
});

Route::get('/portatiles', [PortatilesImages::class, 'portatil']);

Route::get('/ordenadores', function () {
    return view('ordenadores');
});

Route::get('/ordenadores', [OrdenadoresImages::class, 'ordenador']);

Route::get('/', [MixHubImages::class, 'mostrarProductos']);
