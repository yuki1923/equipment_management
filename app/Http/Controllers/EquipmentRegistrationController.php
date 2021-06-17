<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Equipment;

class EquipmentRegistrationController extends Controller
{
    public function show()
    {
        return view('equipment.equipment_registration');
    }

    public function create(Request $request)
    {
        // $request->validate([
        //     'equipment_name' => 'required' | 'string',
        //     'storage_location' => 'required' | 'string',
        //     'quantity' => 'required' | 'integer',
        //     'notification_date' => 'required' | 'date_format'
        // ]);


        $equipment = new Equipment;
        // $equipment->fill($request->all())->save();
        $equipment->user_id = $request->user()->id;
        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->storage_location = $request->input('storage_location');
        $equipment->quantity = $request->input('quantity');
        $equipment->notification_date = $request->input('notification_date');
        $equipment->save();
        return redirect('/home')->with('flash_message', 'テスト');
    }
}
