<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function test3()
    {
        $user = User::find(2);
        return view('test.test3',[
            'user' => $user
        ]);
    }
}
