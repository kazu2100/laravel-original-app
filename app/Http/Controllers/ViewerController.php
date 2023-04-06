<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ViewerController extends Controller
{
    //ホーム画面
    public function home() {        
        return view('viewers.home');
    }
    // 診断終了画面
    public function result(Request $request) {
        $total_score = 0;
        if($request->has('total_score')){
            $total_score = $request->input('total_score');
        }
        $item = Item::latest()->first();
        return view('viewers.result', compact('total_score', 'item'));
    }
}