<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        //Method GET
        return $peoples = People::all();
    }

    
    public function store(Request $request)
    {
        //Method POST
        $peoples = People::create($request->all());

        return $peoples;
    }

    public function update(Request $request,$id)
    {
        //Method PATCH
        $peoples = People::find($id);

        $peoples-> nameUser =$request-> get('nameUser');
        $peoples-> nameComplete =$request-> get('nameComplete');
        $peoples-> email =$request-> get('email');
        $peoples-> number =$request-> get('number');
        $peoples-> age =$request-> get('age');
        $peoples-> dayBirthday =$request-> get('dayBirthday');

        $peoples ->save();
        return $peoples;
    }

    
    public function destroy( $id)
    {
        //Method DELETE
        $peoples = People::find($id);
        $peoples->delete();


        return "delete succesfull";
    }
}