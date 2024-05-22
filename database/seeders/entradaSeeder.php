<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\entrada;




class entradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entrada=new entrada();
        $entrada->placa="3020FG";
        $entrada->fecha="12-12-12";
        $entrada->save();
    }
}
