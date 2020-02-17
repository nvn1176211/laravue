<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Constants;
use Auth;

class UsersController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            echo 200;die;
        }
        echo 404;die;
    }


}
