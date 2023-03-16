<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspectionController extends Controller
{
    // 診断開始画面
    public function show($question)
    {
        return view('inspection.'.$question);
    }
    // 診断終了画面
    public function finish()
    {
        return view('viewers.finspection');
    }
}
