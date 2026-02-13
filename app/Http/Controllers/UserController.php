<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Afficher la liste des usagers.
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Afficher le formulaire de création d'un nouvel usager.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Enregistrer un nouvel usager dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Afficher un usager spécifique.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Afficher le formulaire d'édition d'un usager.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Mettre à jour les informations d'un usager dans la base de données.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     *  Supprimer un usager de la base de données.
     */
    public function destroy(User $user)
    {
        //
    }
}
