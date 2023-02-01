<?php

namespace Database\Seeders;

use App\Models\table_state;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class states extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'state_name' => 'Maharashtra',
                'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'state_name' => 'Karnataka',
                'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'state_name' => 'Uttar Pradesh',
                'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'state_name' => 'Gujraj',
                'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'state_name' => 'Odisha',
                'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'state_name' => 'Keral',
                'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],  
        ];
        table_state::insert($data);
    }
}
