<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos
        $request->validate([
            'name' => 'required|string|unique:users,id',
            'password' => 'required|string|min:4',
        ]);

        // Inserta en la base de datos
        DB::table('users')->insert([
            'id' => $request->input('name'),
            'password' => $request->input('password'), // encripta la contraseña con bcrypt()
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/sign_in')->with('success', 'Cuenta creada exitosamente');
    }
}
