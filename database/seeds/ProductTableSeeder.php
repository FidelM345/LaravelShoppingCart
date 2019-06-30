<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Karanga',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>10
        ]);
        $product->save();


        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Mbosho',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>15
        ]);
        $product->save();

        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Managu',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>18
        ]);
        $product->save();


        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Mursik',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>14
        ]);
        $product->save();

        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Samaki',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>20
        ]);
        $product->save();

        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Omena',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>7
        ]);
        $product->save();

        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Waru',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>15
        ]);
        $product->save();

        $product=new Product([
            'imagepath'=>'https://firebasestorage.googleapis.com/v0/b/myprojo-be85d.appspot.com/o/laravel_images%2Ffoodone.jpg?alt=media&token=c01f5134-1524-4cd3-975a-7baa9a7939b6',
             'title'=>'Minji',
             'description'=>'Lorem, ipsum dolor sit amet 
             consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
             sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus',
             'price'=>23
        ]);
        $product->save();
    }
}
