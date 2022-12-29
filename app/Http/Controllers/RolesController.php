<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {
        return Role::get();
    }

    public function create(Request $request)
    {
        Role::create($request->only('name'));

        return response()->json(true);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));

        return response()->json($role);
    }

    public function show(Role $role):JsonResponse
    {
        return response()->json(['data' => $role]); //выведет в массиве имя

    }

    public function users(Role $role)
    {
        return $role->users->map->name;
        //return User::where('role_id', $role->id)->get();
        //return $role->users()->orderByDesc('id')->get();
    }
}

