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
}
