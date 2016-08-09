<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'src/img/Avventura.jpg',
            'title' => 'Lavventura',
            'description' => 'A woman disappears during a Mediterranean boating trip. During the search, her lover and her best friend become attracted to each other.',
            'price' => 10
        ]);
        $product->save();
		
		$product = new \App\Product([
            'imagePath' => 'src/img/ROLLING_thunder.jpg',
            'title' => 'Rolling Thunder',
            'description' => 'Major Charles Rane comes back from the war and is given a number of gifts from his hometown because he is a war hero. Some greedy thugs decide that they want to steal a number of silver ...',
            'price' => 10
        ]);
        $product->save();
		$product = new \App\Product([
            'imagePath' => 'src/img/Fireworks.jpg',
            'title' => 'Fireworks',
            'description' => 'Nishi leaves the police in the face of harrowing personal and professional difficulties. Spiraling into depression, he makes questionable decisions.',
            'price' => 10
        ]);
        $product->save();
		
		$product = new \App\Product([
            'imagePath' => 'src/img/Hard Eight.jpg',
            'title' => 'Hard Eight',
            'description' => 'Professional gambler Sydney teaches John the tricks of the trade. John does well until he falls for cocktail waitress Clementine.',
            'price' => 10
        ]);
        $product->save();
		
		$product = new \App\Product([
            'imagePath' => 'src/img/GegenDieWand.jpg',
            'title' => 'Gegen Die Wand',
            'description' => 'In Gegen Die Wand Cahit, a 40-something male from Mersin in Turkey has removed everything Turkish from his life. He has become an alcoholic drug addict and at the start of the movie wants...',
            'price' => 10
        ]);
        $product->save();
		
    }
}
