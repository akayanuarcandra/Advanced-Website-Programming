<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends PostController
{
    public function hello() {
        return 'Hello World';
    }

    public function greeting() {
        return view('blog.hello')
            ->with('name', 'Yanuar Thaif Chalil Candra')
            ->with('occupation', 'Student');
    }
}
