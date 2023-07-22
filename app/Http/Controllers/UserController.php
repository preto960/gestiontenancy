<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        dd($users);
    }

    public function store(Request $request)
    {
        // Lógica para crear una nueva tarea para el usuario autenticado
    }

    public function show(User $user)
    {
        dd($user);
    }

    public function update(Request $request, User $user)
    {
        // Lógica para actualizar una tarea específica del usuario autenticado
    }

    public function destroy(User $user)
    {
        // Lógica para eliminar una tarea específica del usuario autenticado
    }
}
