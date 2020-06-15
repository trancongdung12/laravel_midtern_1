<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tour;
class HomeController extends Controller
{
    function index(){
        $tours = Tour::all();
        return view('home',['tour'=>$tours]);
    }
}
