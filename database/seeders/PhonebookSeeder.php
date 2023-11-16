<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('phonebooks')->insert([
                'name' => 'Phonebook ' . $i,
                'imgUrl' => 'image' . $i . '.jpg',
                'address' => 'Address ' . $i,
                'correspondence_address' => 'Correspondence Address ' . $i,

            ]);
        }
    }
}
