<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use App\Models\users;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function getListSubject(){

        $list_sub = subjects::all();
        $list_user_sub=users::all();
        return view('listSubject', compact('list_sub','list_user_sub'));
    }
    public function addSubject(Request $request){
        $add_sb=new subjects();
        $add_sb->name=$request->input('name');
        $add_sb->description=$request->input('description');
        $add_sb->avatar=$request->input('avatar');
        $add_sb->facebook=$request->input('facebook');
        $add_sb->status=$request->input('status');
        $add_sb->userId=$request->input('userId');
        $add_sb->save();

    }
}
