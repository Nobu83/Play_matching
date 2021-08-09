<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class agesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ages')->insert([
            [
              'ages_id' => '1',
              'display_name' => '10代以下',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ],
            [
                'ages_id' => '2',
                'display_name' => '20代',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
              ],
            [
                'ages_id' => '3',
                'display_name' => '30代',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
              ],
            [
                'ages_id' => '4',
                'display_name' => '40代',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
              ],
            [
                'ages_id' => '5',
                'display_name' => '50代',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
              ],
            [
                'ages_id' => '6',
                'display_name' => '60代以上',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
              ],
        ]);

    }
}