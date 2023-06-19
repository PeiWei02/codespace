<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Forum\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Channel::create([
            "name" => "Topic 1",
            "slug" =>  Str::slug("Topic 1")
        ]);

        Channel::create([
            "name" => "Topic 2",
            "slug" =>  Str::slug("Topic 2")
        ]);

        Channel::create([
            "name" => "Topic 3",
            "slug" =>  Str::slug("Topic 3")
        ]);

    }
}
