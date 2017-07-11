<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listWork extends Model
{
    //
    protected $table = "list_work";
    public function mywork_work(){
        $this->hasMany('App\myWork','id_list_work','id');
    }
}
