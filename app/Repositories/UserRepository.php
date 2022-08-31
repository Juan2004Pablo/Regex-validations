<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function getAllUsers(): Collection
    {
        return User::get();
    }

    public function storeUser(Request $request): void
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->last_name = $request->last_name;
        $user->id_type = $request->id_type;
        $user->identification = $request->identification;

        $user->save();
    }
}