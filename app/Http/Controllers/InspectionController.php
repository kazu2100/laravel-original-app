<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspectionController extends Controller
{
    // 診断開始画面
    public function show(Request $request, string $question)
    {
        $total_score = 0;
        if($request->has('total_score')){
            $total_score = $request->input('total_score');
        }
        if($request->has('score')){
            $total_score = $total_score + $request->input('score');
        }
        return view('inspection.'.$question, compact('total_score'));
    }
    // 診断終了画面
    public function finish()
    {
        return view('viewers.finspection');
    }
}
