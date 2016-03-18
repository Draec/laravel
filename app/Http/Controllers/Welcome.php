<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class Welcome extends Controller
{
    public function index($name){

        dd(Input::get('q'));
        return "salut depuis le controller $name";

    }

    public function postTest(){

    }

    public function getIndex(){
        return "Salut les gens";
    }
}
