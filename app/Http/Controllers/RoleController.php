<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        //Method GET
        return $roles = Role::all();
    }

    public function store(Request $request)
    {
        //Method POST
        $roles = Role::create($request->all());

        return $roles;
    }

    public function update(Request $request,  $id)
    {
        //Method PATCH
        $roles = Role::find($id);
        
        $roles-> description =$request-> get("description");

        $roles ->save();
        return $roles;
    }

 
    public function destroy( $id)
    {
        //Method DELETE
        $roles = Role::find($id);
        $roles->delete();


        return "delete succesfull";
    }
}