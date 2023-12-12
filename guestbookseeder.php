<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class guestbookseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('guestbook')->insert([
            'name'=>'Joni',
            'from'=>'cimahi',
            'agenda'=>'tamu khusus',
         ]);
    }
}
