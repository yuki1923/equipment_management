<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Equipment extends Model
{

    protected $fillable = ['equipment_name', 'storage_location', 'quantity', 'notification_date', 'image',];
}
