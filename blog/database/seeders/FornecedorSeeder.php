<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 400';
        $fornecedor->site = 'www.fornecedor400.com.br';
        $fornecedor->uf = 'PB';
        $fornecedor->email = 'fornecedor400@gmail.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 500',
            'site' => 'www.fornecedor500.com.br',
            'uf' => 'RN',
            'email' => 'fornecedro500@gmail.com'
        ]);

        DB::table('fornecedors')->insert([
            'nome' => 'Fornecedor 600',
            'site' => 'www.fornecedor600.com.br',
            'uf' => 'RJ',
            'email' => 'fornecedro600@gmail.com'
        ]);
    }
}
