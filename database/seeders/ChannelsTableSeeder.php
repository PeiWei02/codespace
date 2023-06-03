<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Channel::create([
            'name' => 'Laravel 5.9',
            'slug' => 'test'
        ]);

        Channel::create([
            'name' => 'Laravel 5.10',
            'slug' => 'test'
        ]);

        Channel::create([
            'name' => 'Laravel 5.11',
            'slug' => 'test'
        ]);
    }
}
