<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends PostController
{
    public function hello() {
        return 'Hello World';
    }
}
