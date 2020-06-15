<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Tour extends Model
{
    function getFormatedMoney(){
        return number_format($this->price).' đ';
    }

}
