<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\User;
use Illuminate\Support\Facades\Validator;

class EquipmentController extends Controller
{
    public function __construct()
    {
        //ログインしていないユーザーが直接URLを入力した場合ログイン画面に遷移させる
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('equipment/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'equipment_name' => 'required|string',
            'storage_location' => 'required|string',
            'quantity' => 'required|integer',
            'notification_date' => 'required',
        ]);

        $equipment = new Equipment;
        $equipment->user_id = $request->user()->id;
        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->storage_location = $request->input('storage_location');
        $equipment->quantity = $request->input('quantity');
        $equipment->notification_date = $request->input('notification_date');
        $equipment->save();
        return redirect('/index')->with('flash_message', 'テスト');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
