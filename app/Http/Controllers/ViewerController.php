<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewerController extends Controller
{
    //ホーム画面
    public function home() {        
        return view('viewers.home');
    }
    // 診断終了画面
    public function result() {
    return view('viewers.result');
    }
}