<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return "Selamat Routing Anda Sudah Benar";
    // }
    public function home()
    {
        $data = User::get();
        // return view('index', compact('data'));
        return view('home', compact('data'));
        // return view('home');
    }
}
