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
public function dashboard (){
$data = User::get();
    return view('dashboard', compact('data'));
    // return view('home');
}
}
