<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class myWork
 * @package App
 *
 * @property string Title
 * @property int is_done
 * @property int id_list_work
 * @property mixed Describes
 * @mixin \Eloquent
 */
class myWork extends Model
{
    //
    protected $table = "my_work";
    public function listday(){
        $this->belongsTo('App\listDay','id_list_day','id');
    }
    public function listwork(){
        $this->belongsTo('App\listWork','id_list_work','id');
    }
}
