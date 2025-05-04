<?php

//use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
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

        return redirect('/hub');
    } else {
        return redirect()->back()->withErrors([
            'login' => 'Usuario o contraseña incorrectos.',
        ]);
    }
});

Route::get('/hub', function () {
    return view('hub'); 
});
