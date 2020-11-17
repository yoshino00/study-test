<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function test3()
    {
        $user = User::find(8);
        return view('test.test3',[
            'user' => $user
        ]);
    }

    public function test4()
    {
        return view('test.test4', [
            'title' => 'test4',
            'body' => 'Hello World!'
        ]);
    }


    public function test5()
    {
        return view('test.test5-1',[
            'title' => 'これはテストです',
            'body' => 'テストテスト'
        ]);
    }    
}

