<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vehiculo;

class vehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehiculo=new vehiculo();
        $vehiculo->placa="3020FG";
        $vehiculo->modelo="yaris";
        $vehiculo->propietario="ivan calderon";

        $vehiculo->save();
    }
}
