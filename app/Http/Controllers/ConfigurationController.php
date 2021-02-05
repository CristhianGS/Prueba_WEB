<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        //Method GET
        return $config = Configuration::all();
    }


    public function store(Request $request)
    {
        //Method POST
        $config = Configuration::create($request->all());

        return $config;
    }


    public function update(Request $request,$id)
    {
        //Method PATCH
        $config = Configuration::find($id);

        $config-> language =$request-> get("language");
        $config-> country =$request-> get("country");
        $config-> state =$request-> get("state");

        $config ->save();
        return $config;
    }

  
    public function destroy($id)
    {
               //Method DELETE
               $config = Configuration::find($id);
               $config->delete();
       
       
               return "delete succesfull";
    }
}