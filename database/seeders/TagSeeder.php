<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['heterochromia', 'fat', 'black', 'white', 'orange'];

        foreach($tags as $tag) {
            Tag::factory()->create(['tag' => $tag]);
        }
    }
}
