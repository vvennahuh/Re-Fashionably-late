<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        $categories = Category::all(); // カテゴリを取得
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:1,2,3', // 1:男性, 2:女性, 3:その他
            'email' => 'required|email',
            'tel' => 'required|string|max:5',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id', // カテゴリIDのバリデーション
            'detail' => 'required|string|max:120',
        ]);

        return view('confirm', $validated);
    }

    public function send(ContactRequest $request)
    {
        // データ保存
        Contact::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
            'category_id' => $request->input('category_id'),
            'detail' => $request->input('detail'),
        ]);

        // サンクスページにリダイレクト
        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
