<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('/login');
    }

    public function store(LoginRequest $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // 認証に成功した場合、セッションを再生成してセキュリティ強化
        $request->session()->regenerate();
        return redirect()->intended('/admin');
    }

    // 認証失敗時は戻してエラーメッセージ表示
    return back()->withErrors([
        'email' => 'メールアドレスまたはパスワードが正しくありません。',
    ])->withInput();

}

}
