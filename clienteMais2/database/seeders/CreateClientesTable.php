<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateClientesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cliente::factory(10)->create()->each(function($u){
            $u->telefones()->save(\App\Models\Telefone::factory()->make());
        });
    }
}
