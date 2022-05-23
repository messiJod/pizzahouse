<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;

class PizzaController extends Controller
{
    public function index(){
//        $users = pizza::all();

        $users = pizza::orderBy("type","desc")->get();
        return view('testimonial',['users' =>$users]);
    }

    public function show($id){
        return view('detail',['id'=>$id]);
    }
}
