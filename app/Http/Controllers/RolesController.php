<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RolesController extends Controller
{
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

    public function index()
    {
//        return Role::all();
//        return Role::find(1);
//        Role::where('id', 1)->first();
//        dd(Role::whereNotNull('created_at')->orWhere('id', '>', 1)->get());
//        dd(Role::whereNotNull('created_at')->orWhere('id', '>', 1)->get());
//        return Role::where('created_at', '!=', null)->get();
//        dd(Role::get()->sortBy('name'));

//        return response()->json(Role::get());

//        $role = Role::find(3);
//        $role->name = 'Manager';
//        $role->save();

//        $role = Role::find(3)->update([
//            'name' => 'M',
//        ]);
//
//        return Role::find(3);

        //Role::find(3)->delete();
/*        foreach (Role::all() as $role) {
            echo $role->name;
        }*/
    }

    public function show(Role $role):JsonResponse
    {
        return response()->json(['data' => $role]); //выведет в массиве имя

    }
}

