<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userController extends Controller
{
    // Xu ly lay danh sach user
    public function getListUser()
    {
        //Lay du lieu tu database
        $list_user = users::all()->sortByDesc('created_at');
        return view('listUser', compact('list_user'));

    }

    public function addUser(Request $request)
    {
        $add_us = new users();
        $add_us->fullName = $request->input('fullName');
        $add_us->birthday = $request->input('birthday');
        $add_us->email = $request->input('email');
        $add_us->phoneNumber = $request->input('phoneNumber');
        $add_us->job = $request->input('job');
        $add_us->avatar = $request->input('avatar');
        $add_us->facebook = $request->input('facebook');
        $add_us->gender = $request->input('gender');
        $add_us->country = $request->input('country');
        $add_us->role = $request->input('role');
        $add_us->status = $request->input('status');
        $add_us->save();


    }
}
