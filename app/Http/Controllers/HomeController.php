<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $equipment = Equipment::where('user_id', $user_id)->get();
        //equipmentがからの場合のviewでの表示のため
        if ($equipment->isEmpty()) {
            $equipment = 0;
        }
        return view('/index', ['equipment' => $equipment]);
    }

    public function sort(Request $request)
    {
    }
}
