<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookTourController extends Controller
{
    function create(){
        return view('admin.create');
    }
}
