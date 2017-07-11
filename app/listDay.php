<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listDay extends Model
{
    //
    protected $table = "list_day";
    public function mywork_day(){
        $this->hasMany('App\myWork','id_list_day','id');
    }
}
