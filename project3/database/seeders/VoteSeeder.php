<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vote;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vote::insert([
            'title' => Str::random(50),
            'text' => Str::random(250),
            'positive' => 0,
            'negative' => 0,
        ]);
        Vote::insert([
            'title' => Str::random(50),
            'text' => Str::random(250),
            'positive' => 0,
            'negative' => 0,
        ]);
        Vote::insert([
            'title' => Str::random(50),
            'text' => Str::random(250),
            'positive' => 0,
            'negative' => 0,
        ]);
        Vote::insert([
            'title' => Str::random(50),
            'text' => Str::random(250),
            'positive' => 0,
            'negative' => 0,
        ]);
        Vote::insert([
            'title' => Str::random(50),
            'text' => Str::random(250),
            'positive' => 0,
            'negative' => 0,
        ]);
    }
}
