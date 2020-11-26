<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10 ; $i++) { 
            # code...
            DB::table('categories')->insert([
                'name' => 'cat  '. str_random(10),
                'description' => str_random(10),
                'created_by' => str_random(10),
                'created_at'=> now() , 
                'updated_at'=> now(), 
               
            ]);
        }
    }
}
