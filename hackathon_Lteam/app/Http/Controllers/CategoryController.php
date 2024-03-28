<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // カテゴリー一覧を表示
    public function index()
    {
        // カテゴリデータを取得
        $categories = Category::all();

        // ビューにデータを渡して表示
        return view('category.category', ['categories' => $categories]);
    }

    // カテゴリーの登録フォームを表示
    public function create()
    {
        return view('category.create');
    }

    // カテゴリーを保存
    public function store(Request $request)
    {
        // バリデーションを実行
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        
        // カテゴリーを作成して保存
        Category::create([
            'name' => $request->name,
        ]);

        // カテゴリー一覧を再度表示
        return $this->index()->withErrors(['success' => 'カテゴリーを作成しました！']);
    }
    
    public function delete(Request $request){
        $id = $request->id;
        Category::update()->
    }
}
