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
        $user = pizza::findOrFail($id);
        return view('detail',['user'=>$user]);
    }
}
