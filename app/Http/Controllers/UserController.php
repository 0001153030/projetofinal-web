<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(12);

        return view("admin.users.index", compact("users"));
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:8|confirmed",
        ]);

        // The User model casts 'password' => 'hashed', so assigning directly will hash it.
        User::create($data);

        return redirect()
            ->route("admin.users.index")
            ->with("success", "Conta criada.");
    }

    public function show(User $user)
    {
        return view("admin.users.show", compact("user"));
    }

    public function edit(User $user)
    {
        return view("admin.users.edit", compact("user"));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email," . $user->id,
            "password" => "nullable|string|min:8|confirmed",
        ]);

        if (empty($data["password"])) {
            unset($data["password"]);
        }

        $user->update($data);

        return redirect()
            ->route("admin.users.index")
            ->with("success", "Conta atualizada.");
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route("admin.users.index")
            ->with("success", "Conta removida.");
    }
}
