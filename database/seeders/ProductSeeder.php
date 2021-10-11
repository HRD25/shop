<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('items')->truncate();

        for ($i = 0; $i < 10; $i++) {
            DB::table('items')->insert([
                'photo' => 'https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg',
                'name' => 'Computer',
                'description' => 'This is a very good computer.You can play in new games and surf at internet.You can watch popular movies.',
                'price' => '3200',
                'quantity' => '221',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('items')->insert([
                'photo' => 'https://mi-store.pl/pol_pl_Telewizor-4K-Xiaomi-Mi-TV-P1-43-1457_3.jpg',
                'name' => 'TV',
                'description' => 'This is a very good TV.You can watch popular movies.',
                'price' => '2100',
                'quantity' => '111',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
