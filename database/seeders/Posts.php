<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table('posts')->truncate();
            $data = [
                [
                    'name' => 'Hotel 1',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2021-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 2',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 8,
                    'available_dates' => '2021-12-28 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                   
                ],
                [
                    'name' => 'Hotel 3',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 4,
                    'available_dates' => '2021-12-29 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                   
                ],
                [
                    'name' => 'Hotel 4',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 3,
                    'available_dates' => '2021-12-31 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 5',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 16,
                    'available_dates' => '2022-01-01 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 6',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 20,
                    'available_dates' => '2021-12-13 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 7',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 3,
                    'available_dates' => '2021-12-04 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 8',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2022-01-23 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 9',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2022-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 10',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 3,
                    'available_dates' => '2021-12-28 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                   
                ],
                [
                    'name' => 'Hotel 11',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2021-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 12',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2021-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                   
                ],
                [
                    'name' => 'Hotel 13',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2021-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                 
                ],
                [
                    'name' => 'Hotel 14',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2021-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'name' => 'Hotel 15',
                    'description' => 'Nice Hotel',
                    'no_of_guests' => 5,
                    'available_dates' => '2021-12-25 06:57:12',
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
               

            ];


            DB::table('posts')->insert($data);
        }
}
