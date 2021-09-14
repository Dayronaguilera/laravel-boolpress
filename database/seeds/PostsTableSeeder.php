<?php

use Illuminate\Database\Seeder;
use App\Post; // usa i dati all interno del db 
use Faker\Generator as Faker; // crea del contenuto fake per il nostro DB

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){  // in maniera del tutto automatica, Laravel andrà a soddisfare questa dipendenza.

         $lorem = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";
        
        for ($i=0; $i < 50; $i++) {  // gli diciamo quanti post deve creare 
            $postObject = new Post(); // andiamo a popolare le nostre colonne presenti nel db
            $postObject->title = $faker->sentence(10);
            $postObject->content = $lorem; // $lorem
            $postObject->image = $faker->imageUrl(200,200 ,'post', true);
            $postObject->author = $faker->firstName();
            $postObject->created_at = $faker->dateTime();
            $postObject->updated_at = $faker->dateTime();
            $postObject->save();   
        }
    }
}
