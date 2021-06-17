<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class SignUpController extends Controller
{
    public function show()
    {
        return view('equipment.signup');
    }

    public function postSignup(Request $request)
    {
        // バリデーション
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
        ]);

        // DBインサート
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        // 保存
        $user->save();

        // リダイレクト
        return redirect()->route('equipment.top');
    }

    public function test(Request $request)
    {
        $items = DB::select('select * from users');
        return view('equipment.signup', ['items' => $items]);
    }

    public function test2(Request $request)
    {
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select('select * from users where id =:id', $param);
        } else {
            $items = DB::select('select * from users');
        }
        return view('equipment.signup', ['items' => $items]);
    }
    public function test3(Request $request)
    {
        $items = DB::table('users')->get(['id',]);
        return view('equipment.signup', ['items' => $items]);
    }
}
