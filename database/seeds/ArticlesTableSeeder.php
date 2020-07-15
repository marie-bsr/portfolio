<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 5)->create([
            'user_id' => User::where('id', '=', 1)->first()->id
        ]);
    }
}
