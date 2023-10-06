<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $all_user = User::all();

        return response([
            'message' => 'GET',
            'status' => 200,
            'data' => $all_user
        ]);

    }
}
