<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;

class PageController extends BaseController
{
    public function index() {
        return 'welcome';
    }

    public function about() {
        return 'Name = Yanuar Thaif Chalil Candra, NIM = 2241720004';
    }

    public function show($id) {
        return 'Article Page with ID '.$id;
    }
//    public function about($name = 'NULL', $nim = 'NULL') {
//        return 'Name = '.$name.', NIM = '.$nim;
//    }
}
