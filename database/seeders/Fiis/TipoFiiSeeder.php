<?php

namespace Database\Seeders\Fiis;

use App\Models\Fiis\CategoriaFii;
use App\Models\Fiis\TipoFii;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoFiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tijolo = TipoFii::updateOrCreate(
            ['sigla' => 'TIJOLO'],
            [
                'sigla' => 'TIJOLO',
                'nome' => 'TIJOLO',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais'
            ],
        );
        $renda = TipoFii::updateOrCreate(
            ['sigla' => 'RENDA_TIJOLO'],
            [
                'sigla' => 'RENDA_TIJOLO',
                'nome' => 'RENDA - TIJOLO',
                'descricao' => 'Fundos imobiliários que investem em sua maioria em empreendimentos físicos'
            ],
        );

        $papel = TipoFii::updateOrCreate(
            ['sigla' => 'PAPEL'],
            [
                'sigla' => 'PAPEL',
                'nome' => 'PAPEL',
                'descricao' => 'Fundos de Recebíveis Imobiliários, de títulos ligados ao mercado imobiliário'
            ],
        );

        $fof = TipoFii::updateOrCreate(
            ['sigla' => 'FOF'],
            [
                'sigla' => 'FOF',
                'nome' => 'FUNDO DE FUNDOS',
                'descricao' => 'Fundos de fundos, investem na aquisição de cotas de outros fundos imobiliários'
            ],
        );

        $hibrido = TipoFii::updateOrCreate(
            ['sigla' => 'HIBRIDO'],
            [
                'sigla' => 'HIBRIDO',
                'nome'  => 'HIBRIDO',
                'descricao' => 'Fundos hibridos, carteira é uma mescla entre diferentes ativos do segmento imobiliários, como as LCIs, LHs, Cotas de outros Fundos Imobiliários e imóveis'],
        );

        $desenvolvimento = TipoFii::updateOrCreate(
            ['sigla' => 'DESENVOLVIMENTO'],
            [
                'sigla' => 'DESENVOLVIMENTO',
                'nome'  => 'DESENVOLVIMENTO',
                'descricao' => 'Fundos de desenvolvimento investem em projetos imobiliários para obter lucro com a venda ou arrendamento dos imóveis finalizados'],
        );
    }

}
