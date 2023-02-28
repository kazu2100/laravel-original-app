<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// やりとりするモデルを宣言する
use App\Models\Item;

class ItemController extends Controller
{
    //indexページ
    public function index() {
        $items = Item::latest()->get();
        return view('items.index', compact('items'));
    }
    //作成ページ
    public function create() {
        return view('items.create');
    }

    // 作成機能
    public function store(Request $request) {
        $item = new Item();
        $item->description = $request->input('description');
        $item->html = $request->input('html');
        $item->price_score = $request->input('price_score');
        $item->save();

        return redirect()->route('items.index')->with('flash_message', '投稿が完了しました。');
    }

    // 詳細ページ
    public function show(Item $item) {
        return view('items.show', compact('item'));
    }

    // 更新ページ
    public function edit(Item $item) {
        return view('items.edit', compact('item'));
    }

    // 更新機能
    public function update(Request $request, Item $item) {
        $item->description = $request->input('description');
        $item->html = $request->input('html');
        $item->price_score = $request->input('price_score');
        $item->save();

        return redirect()->route('items.show', $item)->with('flash_message', '投稿を編集しました。');
    }

    // 削除機能
    public function destroy(Item $item) {
        $item->delete();

        return redirect()->route('items.index')->with('flash_message', '投稿を削除しました。');
    }
}
