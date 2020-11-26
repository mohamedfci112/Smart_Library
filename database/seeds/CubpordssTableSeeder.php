<?php

use Illuminate\Database\Seeder;

class CubpordssTableSeeder extends Seeder
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
            DB::table('cupbords')->insert([
                'number' => rand(1, 100),
            ]);
        }
    }
}
