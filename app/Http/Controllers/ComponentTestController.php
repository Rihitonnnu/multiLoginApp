<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent(){
        $message="メッセ";
        return view('tests.component-test',compact('message'));
    }
}
