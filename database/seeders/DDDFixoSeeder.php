<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DDDFixoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DDDFixo')->insert([
            'destino' => '011',
            'origem' => '016',
            'valor' => '1.90',
        ]);

        DB::table('DDDFixo')->insert([
            'destino' => '016',
            'origem' => '011',
            'valor' => '2.90',
        ]);

        DB::table('DDDFixo')->insert([
            'destino' => '011',
            'origem' => '017',
            'valor' => '1.70',
        ]);

        DB::table('DDDFixo')->insert([
            'destino' => '017',
            'origem' => '011',
            'valor' => '2.70',
        ]);

        DB::table('DDDFixo')->insert([
            'destino' => '011',
            'origem' => '018',
            'valor' => '0.90',
        ]);

        DB::table('DDDFixo')->insert([
            'destino' => '018',
            'origem' => '011',
            'valor' => '1.90',
        ]);

        DB::table('DDDFixo')->insert([
            'destino' => '017',
            'origem' => '018',
            'valor' => '0',
        ]);

    }
}
