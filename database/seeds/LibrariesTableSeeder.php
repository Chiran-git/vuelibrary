<?php

use App\Library;
use Illuminate\Database\Seeder;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Library::truncate();
        //factory(Library::class, 7)->create();

        Library::create([
            'name' => "Geoscience"
        ]);

        Library::create([
            'name' => "Psychology"
        ]);

        Library::create([
            'name' => "Mathematics"
        ]);

        Library::create([
            'name' => "Political science"
        ]);

        Library::create([
            'name' => "Computer Science"
        ]);
    }
}
