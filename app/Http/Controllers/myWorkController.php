<?php

namespace App\Http\Controllers;

use App\myWork;
use Illuminate\Http\Request;
use App\listDay;
use App\listWork;

class myWorkController extends Controller
{
    //
    public function getWork(){
        $mywork = myWork::latest()->get();
        return view('index',['mywork'=>$mywork]);
    }
    public  function postWork(Request $request){

        $task = new myWork;
        $task->Title = $request->Title;
        $task->Describes = $request->Describes;
        if(empty($task->Title)){
            $task->Title = 'No title';
        };
        if(empty($task->Describes)){
            $task->Describes = 'No title';
        };
        $task->is_done = 0;
        $task->id_list_work = 1;
        $task->id_list_day = 1;
        $task->save();
        return redirect('/home');
    }

    public function deleteWork($id)
    {
        myWork::find($id)->delete();
        return redirect('/home');
    }
    public function doneWork($id)
    {
        $mywork = myWork::find($id);
        $mywork->is_done = 1;
        $mywork->save();
        return redirect('/home');
    }
}
