<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
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
            DB::table('books')->insert([
                'isbn'=> 1234,
                'total'=> 10,
                'avilable'=> 5,
                'isbn'=> 5050,
                'title'=> 'test title ',
                'language'=> 'english',
                'description' => str_random(20) ,
                'author_id' => 1,
                'created_by' => 'admin',
                'publisher_id' => 1,
                'cupbord_id' => 1,
                'category_id' => 1,
                'bookcover' => str_random(20) ,
                
                
            ]);
        }
    }
}
