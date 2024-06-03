<?php

namespace Database\Seeders;

use App\Models\SiteModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteModel();
        // $contato->nome = 'Hugo Cardoso';
        // $contato->telefone = '83 98616-5997';
        // $contato->email = 'hugocardosopb@gmail.com';
        // $contato->motivo_contato = '2';
        // $contato->mensagem = 'Hello World!';

        // $contato->save();

        SiteModel::factory(100)->create();

    
    }
}
