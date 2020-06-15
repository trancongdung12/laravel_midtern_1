<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookTourController extends Controller
{
    function create(){
        return view('admin.create');
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'schedule'=>'required',
            'type'=>'required',
            'depart'=>'required',
            'number'=>'required',
            'price'=>'required'
        ]);
    }
}
