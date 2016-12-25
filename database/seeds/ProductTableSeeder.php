<?php

use App\Product;
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
        $product = new Product([
            'imagePath'=>'http://hyperdub.s3.amazonaws.com/images/large/HDBCD002.png',
            'title'=>'Burial',
            'description'=>'Rival Dealer',
            'price'=>'15'
        ]);

        $product->save();

        $product = new Product([
            'imagePath'=>'https://i1.sndcdn.com/artworks-000123512506-yuedb3-t500x500.jpg',
            'title'=>'Ishome',
            'description'=>'Ken Tavr',
            'price'=>'12'
        ]);

        $product->save();

        $product = new Product([
            'imagePath'=>'https://img.discogs.com/r3ft0U4m8tSjW9P3N8tBrhPZsYA=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/A-2519943-1385910824-6343.png.jpg',
            'title'=>'Volor Flex',
            'description'=>'Senility',
            'price'=>'10'
        ]);

        $product->save();

        $product = new Product([
            'imagePath'=>'https://i.ytimg.com/vi/xm1--Ojow4w/hqdefault.jpg',
            'title'=>'Underworld',
            'description'=>'Born Slippy',
            'price'=>'17'
        ]);

        $product->save();

        $product = new Product([
            'imagePath'=>'https://img.discogs.com/FxcOiuIqTIejvefoo9kOgBoRC3I=/fit-in/600x546/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-3130165-1432926602-1662.jpeg.jpg',
            'title'=>'Tycho',
            'description'=>'Dive',
            'price'=>'11'
        ]);

        $product->save();

        $product = new Product([
            'imagePath'=>'http://images.junostatic.com/full/CS1663975-02A-BIG.jpg',
            'title'=>'Calibre',
            'description'=>'Even If',
            'price'=>'10'
        ]);

        $product->save();
    }
}
