<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Equipment;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;

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

    public function index(Request $request)
    {
        $user_id = Auth::id();
        $equipment = Equipment::where('user_id', $user_id)->get();
        //equipmentがからの場合のviewでの表示のため
        if ($equipment->isEmpty()) {
            $equipment = 0;
        }
        if (!empty($request->sort)) {
            $param = $request->sort;
            switch ($param) {
                case 1:
                    $equipment = Equipment::where('user_id', $user_id)->orderBy('notification_date', 'asc')->get();
                    break;
                case 2:
                    $equipment = Equipment::where('user_id', $user_id)->orderBy('notification_date', 'desc')->get();
                    break;
                case 3:
                    $equipment = Equipment::where('user_id', $user_id)->orderBy('quantity', 'asc')->get();
                    break;
                case 4:
                    $equipment = Equipment::where('user_id', $user_id)->orderBy('quantity', 'desc')->get();
                    break;
            }
        }
        return view('/index', ['equipment' => $equipment]);
    }

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
            'quantity' => 'required|integer|min:1',
            'notification_date' => 'required|date|after:today',
        ]);

        $equipment = new Equipment;
        $equipment->user_id = $request->user()->id;
        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->storage_location = $request->input('storage_location');
        $equipment->quantity = $request->input('quantity');
        $equipment->notification_date = $request->input('notification_date');
        $equipment->save();
        return redirect('equipment/index')->with('flash_message', '登録が完了しました。');
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
        //findで指定したIDの備品情報を格納
        $equipment = Equipment::find($id);
        return view('equipment/edit', compact('equipment'));
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
        $request->validate([
            'equipment_name' => 'required|string',
            'storage_location' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'notification_date' => 'required|date|after:today',
        ]);

        $equipment = Equipment::find($id);
        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->storage_location = $request->input('storage_location');
        $equipment->quantity = $request->input('quantity');
        $equipment->notification_date = $request->input('notification_date');
        $equipment->save();
        return redirect('equipment/index')->with('flash_message', '編集が完了しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipment::destroy($id);
        return redirect('equipment/index')->with('flash_message', '削除が完了しました。');
    }
}
