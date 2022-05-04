<?php

use App\Category;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Musica','Notizie','Cucina','Sport','Gossip','Politica','Svago'
        ];

        foreach ($categories as $name) {
            
            $category = new Category();
            $category->name = $name;
            $category->slug = Str::slug($name);

            $category->save();

        }
    }
}
