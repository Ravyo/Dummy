<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table('categories')->truncate();
            $data = [
                [
                    'name' => 'Hoilday Villa',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],
                [
                    'name' => 'Rental Villa',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],
                [
                    'name' => 'Vilas for Sale',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],
                [
                    'name' => 'TownHouse',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],

                [
                    'name' => 'Condo',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],
                [
                    'name' => 'Flat',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],
                [
                    'name' => 'Rowhouse',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],
                [
                    'name' => 'Villa',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    'parent_id'  => null
                ],

            ];


            DB::table('categories')->insert($data);
        }
}
