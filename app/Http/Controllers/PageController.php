<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Muhammad Hamamiy Zadah 2041720028';
    }

    public function articles($id){
        return '‘Halaman Artikel dengan Id'.$id;
    }
}
