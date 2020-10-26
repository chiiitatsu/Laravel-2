<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('home');
    }

    public function post(HomeRequest $request){
        $name = $request -> name;
        $date = ['name' => 'こんにちは'.$name.'さん！',];
        return view('home',$date);
    }
}
