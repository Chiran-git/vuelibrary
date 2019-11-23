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
        Book::truncate();
        /*factory(Book::class, 36)->create()->each(
            function ($book) {
        	   $library = Library::all()->random()->pluck('id');
        });*/

        Book::create([
            'name' => "Geographic Information Systems for Geoscientists: Modelling with GIS",
            'description' => "Geographic Information Systems for Geoscientists: Modelling with GIS provides 
                            introduction to the ideas and practice of GIS to students and professionals from a variety of geoscience backgrounds",
            'library_id' => 1
        ]);

        Book::create([
            'name' => "Data Assimilation for the Geosciences:",
            'description' => "Data Assimilation for the Geosciences: From Theory to Application brings together all of 
                            the mathematical,statistical, and probability background knowledge",
            'library_id' => 1
        ]);

        Book::create([
            'name' => "Quantitative Geosciences: Data Analytics, Geostatistics, Reservoir Characterization and Modeling",
            'description' => "Earth science is becoming increasingly quantitative in the digital age. Quantification of                     geoscience and engineering problems underpins many of the applications of big data and                         artificial intelligence.",
            'library_id' => 1
        ]);

        Book::create([
            'name' => "The Geology of Egypt",
            'description' => "This richly illustrated book offers a concise overview of the geology of Egypt in the                     context of the geology of the Arab Region and Northeast Africa",
            'library_id' => 1
        ]);

        Book::create([
            'name' => "Thinking, Fast and Slow",
            'description' => "Thinking, Fast and Slow is a best-selling book published in 2011 by Nobel Memorial Prize in Economic Sciences laureate Daniel Kahneman",
            'library_id' => 2
        ]);

        
        Book::create([
            'name' => "The Power of Habit",
            'description' => "The Power of Habit: Why We Do What We Do in Life and Business is a book by Charles Duhigg, a New York Times reporter, published in February 2012",
            'library_id' => 2
        ]);

        Book::create([
            'name' => "Man's Search for Meaning",
            'description' => "Man's Search for Meaning is a 1946 book by Viktor Frankl chronicling his experiences as a prisoner in Nazi concentration camps during World War II,",
            'library_id' => 2
        ]);

        Book::create([
            'name' => "Gödel, Escher, Bach: an Eternal Golden Braid",
            'description' => "Gödel, Escher, Bach: An Eternal Golden Braid, also known as GEB, is a 1979 book by Douglas Hofstadter. By exploring common themes in the lives and works of logician Kurt Gödel, artist M. C. Escher, and composer Johann Sebastian Bach",
            'library_id' => 3
        ]);

        Book::create([
            'name' => "What Is Mathematics?",
            'description' => "What Is Mathematics? is a mathematics book written by Richard Courant and Herbert Robbins, published in England by Oxford University Press.",
            'library_id' => 3
        ]);

        Book::create([
            'name' => "Euclid's Elements",
            'description' => "The Elements is a mathematical treatise consisting of 13 books attributed to the ancient Greek mathematician Euclid in Alexandria, Ptolemaic Egypt c. 300 BC.",
            'library_id' => 3
        ]);

        Book::create([
            'name' => "A HISTORY OF POLITICAL THOUGHT: PLATO TO MARX",
            'description' => "This lucidly written text, in its second edition, continues to provide a comprehensive study of the classical political tradition from Plato to Marx",
            'library_id' => 4
        ]);

        Book::create([
            'name' => "The Indian constitution",
            'description' => "The Indian Constitution provides a history of the Indian Constituent Assembly. It discusses how and why the members of the Assembly wrote their constitution as they did",
            'library_id' => 4
        ]);

        Book::create([
            'name' => "Structure and Interpretation of Computer Programs",
            'description' => "Structure and Interpretation of Computer Programs is a computer science textbook by Massachusetts Institute of Technology professors Harold Abelson ",
            'library_id' => 5
        ]);

        Book::create([
            'name' => "Code: The Hidden Language of Computer Hardware and Software",
            'description' => "Code: The Hidden Language of Computer Hardware and Software is a book by Charles Petzold that seeks to teach how personal computers work at a hardware and software level",
            'library_id' => 5
        ]);

    }
}
