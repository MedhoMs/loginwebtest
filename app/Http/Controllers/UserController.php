<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validación
            $request->validate([
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:4',
                'username' => 'required|string|unique:users,username',
            ]);

            // Inserción
            DB::table('users')->insert([
                'email' => $request->input('email'),
                'username' => $request->input('username'),
                'password' => $request->input('password'), //Hash::make($request->input('password')), con esto encriptas la contraseña
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect('/')->with('success', 'Cuenta creada exitosamente');
        } catch (ValidationException $e) {
            return redirect('/authentication/create_account')
                ->withErrors(['duplicate' => '!Ese email o nombre de usuario ya existe.¡'])
                ->withInput();
        }
    }
}
