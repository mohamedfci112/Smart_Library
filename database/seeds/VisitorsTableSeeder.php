<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0 ; $i < 10 ; $i++){
            DB::table('visitors')->insert([
                'name' => str_random(10),
                'using_type' =>'reading',
                
            ]);
        }
    }
}
