<?php

//use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ElectrodomesticosImages;
use App\Http\Controllers\MovilesImages;
use App\Http\Controllers\PortatilesImages;
use App\Http\Controllers\OrdenadoresImages;
use App\Http\Controllers\MixHubImages;

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

Route::get('/create_account', function () {
    return view('create_account');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::post('/register', [UserController::class, 'store']);

Route::post('/login', function (Request $request) {
    $username = $request->input('name');
    $password = $request->input('password');

    $user = DB::table('users')->where('id', $username)->first();

    if ($user && $user->password === $password) {
        // Puedes guardar datos en la sesión si lo deseas
        session(['user_id' => $user->id]);

        return redirect('/');
    } else {
        return redirect()->back()->withErrors([
            'login' => 'Usuario o contraseña incorrectos.',
        ]);
    }
});

Route::get('/', function () {
    return view('hub');
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
