<?php

use App\Book;
use App\Library;
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
        factory(Book::class, 36)->create()->each(
            function ($book) {
        	   $library = Library::all()->random()->pluck('id');
        });
    }
}
