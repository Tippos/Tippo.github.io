<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userController extends Controller
{
    // Xu ly lay danh sach user
    public function getListUser(){
      //Lay du lieu tu database
        $list_user=users::all();
        return view('listUser',compact('list_user'));
    }
}
