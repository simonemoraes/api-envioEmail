<?php

use Illuminate\Database\Seeder;

class ClienteTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cliente::class, 5)
            ->create()
            ->each(function ($cliente) {
                $model = \App\Paciente::create([
                    'nome' => $cliente->nome,
                    'email' => $cliente->email,
                    'telefone' => $cliente->telefone,
                    'mensagem' => $cliente->mensagem
                ]);
                $cliente->save();
                $model->save();

            });
    }
}
