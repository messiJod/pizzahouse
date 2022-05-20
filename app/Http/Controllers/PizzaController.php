<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $users =[
            ["name"=>"Abhi","age"=>23],
            ["name"=>"Chap", "age"=>45]
        ];

        $contact =request('contact');
        return view('testimonial',['users' =>$users,'contact'=>$contact]);
    }

    public function show($id){
        return view('detail',['id'=>$id]);
    }
}
