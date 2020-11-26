<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {   
        $this->call(UsersTableSeeder::class);
        $this->call(CubpordssTableSeeder::class);
        $this->call(VisitorsTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        
    }
}
