<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
{
    // カテゴリデータを取得
    $categories = Category::all();

    // ビューにデータを渡して表示
    return view('category.category', ['categories' => $categories]);
}

}
