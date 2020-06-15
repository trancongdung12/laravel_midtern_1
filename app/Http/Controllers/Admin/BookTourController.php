<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tour;
use App\Http\Requests\ValidationRequest;
class BookTourController extends Controller
{
    function create(){
        return view('admin.create');
    }
    function store(ValidationRequest $request){
        // $request->validate([
        //     'name'=>'required',
        //     'image'=>'required',
        //     'schedule'=>'required',
        //     'type'=>'required',
        //     'depart'=>'required',
        //     'number'=>'required',
        //     'price'=>'required'
        // ]);
        $name = $request->input('name');
        $image= $request->file('image')->store('public');
        $schedule = $request->input('schedule');
        $type = $request->input('type');
        $depart = $request->input('depart');
        $number = $request->input('number');
        $price = $request->input('price');
        $tour = new Tour;
        $tour->name = $name;
        $tour->image=$image;
        $tour->shedule=$schedule;
        $tour->typetour=$type;
        $tour->depart=$depart;
        $tour->number=$number;
        $tour->price=$price;
        $tour->save();
    }
}
