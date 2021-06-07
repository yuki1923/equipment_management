<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            'user_id' => 3,
            'equipment_name' => 'トイレットペーパー',
            'storage_location' => 'トイレ上収納',
            'quantity' => 4,
            'notification_date' => '2021-06-11',
            'image' => 'storage/images/lfajlfjslajflas.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
