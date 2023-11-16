<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(PhonebookSeeder::class);
        //$this->call(MailSeeder::class);
        $this->call(PhoneNumberSeeder::class);
    }
}