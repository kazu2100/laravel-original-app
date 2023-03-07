<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewerController extends Controller
{
    //ホーム画面
    public function home() {        
        return view('viewers.home');
    }
    // 診断開始画面
    public function inspection() {
    return view('viewers.inspection');
    }
    // 診断終了画面
    public function finspection() {
    return view('viewers.finspection');
    }
    // 診断終了画面
    public function result() {
    return view('viewers.result');
    }
}