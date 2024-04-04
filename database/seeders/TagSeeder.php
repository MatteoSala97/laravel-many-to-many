<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'coding',
            'laravel',
            'css',
            'js',
            'vue',
            'html',
            'frontend',
            'backend',
            'fullstack',
            'node',

        ];

        foreach ($tags as $element) {
           $new_tag = new Tag();

           $new_tag->name = $element;
           $new_tag->slug = Str::slug($new_tag->name);

           $new_tag->save();
        };
    }
}
