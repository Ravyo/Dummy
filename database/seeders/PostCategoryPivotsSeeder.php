<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoryPivotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table('post_categories_pivots')->truncate();
            $data = [
                [
                    'post_id' => 1,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 5,
                    'category_id'=> 6,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 3,
                    'category_id'=> 5,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 4,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 5,
                    'category_id'=> 6,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 8,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 11,
                    'category_id'=> 7,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 13,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 12,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 11,
                    'category_id'=> 8,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 13,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
                [
                    'post_id' => 10,
                    'category_id'=> 2,
                    'created_at' => '2021-12-25 06:57:12',
                    'updated_at' => '2021-12-25 06:54:12',
                    
                ],
              

            ];


            DB::table('post_categories_pivots')->insert($data);
        }
}
