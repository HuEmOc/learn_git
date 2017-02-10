<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function testAction(){
        echo 'day la 1 action trong class WelcomeController';
        return redirect()->route('hcm');
    }

    public function thegioi(){
        echo 'hello world';
        return redirect()->route('qt');
    }

    // controller gọi đến view
    public function showinfo(){
        return view('information');
    }
}
