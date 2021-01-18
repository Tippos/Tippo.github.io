<?php

namespace App\Http\Controllers;

use App\Models\classes;
use App\Models\subjects;
use App\Models\users;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    // Xu ly lay danh sach class
    public function getListClass()
    {
        //Lay du lieu tu database
        $list_class = classes::all();
        $list_user_class=users::all();
        $list_subject_class=subjects::all();
        return view('listClass', compact('list_class','list_user_class','list_subject_class'));
    }
    public function addClass(Request $request){
        $add_cl= new classes();
        $add_cl->name=$request->input('name');
        $add_cl->avatar=$request->input('avatar');
        $add_cl->status=$request->input('status');
        $add_cl->userId=$request->input('userId');
        $add_cl->subjectId=$request->input('subjectId');
        $add_cl->save();

    }
}
