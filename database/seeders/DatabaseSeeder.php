<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   
    public function run()
    {

        \DB::table('DDDFixo')->insert([
            'origem' => '016',
            'destino' => '011',
            'valor' => '1.90',
        ]);

        \DB::table('DDDFixo')->insert([
            'origem' => '011',
            'destino' => '016',
            'valor' => '2.90',
        ]);


        \DB::table('DDDFixo')->insert([
            'origem' => '017',
            'destino' => '011',
            'valor' => '2.70',
        ]);

        \DB::table('DDDFixo')->insert([
            'origem' => '011',
            'destino' => '017',
            'valor' => '1.70',
        ]);


        \DB::table('DDDFixo')->insert([
            'origem' => '018',
            'destino' => '011',
            'valor' => '1.90',
        ]);

        \DB::table('DDDFixo')->insert([
            'origem' => '011',
            'destino' => '018',
            'valor' => '0.9',
        ]);


        \DB::table('DDDFixo')->insert([
            'destino' => '018',
            'origem' => '017',
            'valor' => '0',
        ]);
        
        
    }
}
