<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(20)->create();
        // Listing::create([
        //     'job' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel,Javascript',
        //     'company' => 'Skytop technologies',
        //     'location' => 'Nairobi',
        //     'email' => 'cheruiyotkipkoech612@gmail.com',
        //     'website' => 'www.skytoptechnologies.com',
        //     'description' => 'A javascript, laravel developer is needed'

        // ]);

        // Listing::create([
        //     'job' => 'Java Senior Developer',
        //     'tags' => 'Java,JSP',
        //     'company' => 'DewCIS Limited',
        //     'location' => 'Nairobi',
        //     'email' => 'dewcis@gmail.com',
        //     'website' => 'www.dewcis.com',
        //     'description' => 'A java, JSp developer is needed'

        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
