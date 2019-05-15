<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('produtos')->insert([
            'tipo' => "Geladeira",
            'descricao' => 'Refrigerador Electrolux Duplex DC35A 260L - Branco',
            'preco' => 1329.05,
            'quantidade' => 89
        ]);
        DB::table('produtos')->insert([
            'tipo' => "Maquina de Lavar",
            'descricao' => 'Lavadora de Roupas Electrolux 13 kg Alta Capacidade LT13B - Branca',
            'preco' => 1449.99,
            'quantidade' => 78
        ]);
        DB::table('produtos')->insert([
            'tipo' => "Celular",
            'descricao' => 'Celular Xiaomi Redmi 6A 16gb 4g Dual Chip Original',
            'preco' => 614.90,
            'quantidade' => 58
        ]);
    }
}
