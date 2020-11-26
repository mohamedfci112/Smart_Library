<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    public function run()
    {
        //
        for($i = 0 ; $i < 10 ; $i++){
            DB::table('publishers')->insert([
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'phone' => '01000000000',
                
            ]);
        }
    }
}
