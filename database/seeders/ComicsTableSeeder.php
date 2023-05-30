<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');

        foreach ($comics_array as $comic_item) {
            $comic = new Comic();
            $comic->fill($comic_item);
            $comic->save();
        }

    }
}
