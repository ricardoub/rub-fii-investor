<?php

namespace Database\Seeders\Fiis;

use App\Models\Fiis\CategoriaFii;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaFiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tijolo = CategoriaFii::updateOrCreate(
            ['sigla' => 'TIJOLO'],
            [
                'sigla' => 'TIJOLO',
                'nome' => 'FII - TIJOLO',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais'
            ],
        );

        $papel = CategoriaFii::updateOrCreate(
            ['sigla' => 'PAPEL'],
            [
                'sigla' => 'PAPEL',
                'nome' => 'FII - PAPEL',
                'descricao' => 'Fundos de Recebíveis Imobiliários, de títulos ligados ao mercado imobiliário'
            ],
        );

        $fof = CategoriaFii::updateOrCreate(
            ['sigla' => 'FOF'],
            [
                'sigla' => 'FOF',
                'nome' => 'FII - FUNDO DE FUNDOS',
                'descricao' => 'Fundos de fundos, investem na aquisição de cotas de outros fundos imobiliários'
            ],
        );

        $hibrido = CategoriaFii::updateOrCreate(
            ['sigla' => 'HIBRIDO'],
            [
                'sigla' => 'HIBRIDO',
                'nome'  => 'FII - HIBRIDO',
                'descricao' => 'Fundos hibridos, carteira é uma mescla entre diferentes ativos do segmento imobiliários, como as LCIs, LHs, Cotas de outros Fundos Imobiliários e imóveis'],
        );

        $desenvolvimento = CategoriaFii::updateOrCreate(
            ['sigla' => 'DESENVOLVIMENTO'],
            [
                'sigla' => 'DESENVOLVIMENTO',
                'nome'  => 'FII - DESENVOLVIMENTO',
                'descricao' => 'Fundos de desenvolvimento investem em projetos imobiliários para obter lucro com a venda ou arrendamento dos imóveis finalizados'],
        );
    }
}
