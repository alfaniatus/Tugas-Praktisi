<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function card()
    {
        $user = Auth::user();

        return view("member/card", [
            'user' => $user
        ]);
    }

    public function list()
    {
        //$users = User::all();
        $users = DB::table('users')->get();

        //dd($users);
        return view("member/list", [
            'users' => $users
        ]);
    }
}
