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
        $this->seed_categoriaTijolo();
        $this->seed_categoriaPapel();
        $this->seed_categoriaFof();
        $this->seed_categoriaHibrido();

        //$fof = FiiCategory::where('codigo', 'FOF')->first();
        //$hibrido = FiiCategory::where('codigo', 'HIBRIDO')->first();
        //$desenvolvimento = FiiCategory::where('codigo', 'DESENVOLVIMENTO')->first();

    }
    private function seed_categoriaTijolo()
    {
        /**
         * Fundos Imobiliários de escritórios;
         * Fundos Imobiliários de prédios industriais;
         * Fundos Imobiliários de galpões logísticos;
         * Fundos Imobiliários de hotéis;
         * Fundos Imobiliários de shopping centers;
         * Fundos Imobiliários de hospitais;
         * Fundos Imobiliários de escolas;
         * Fundos Imobiliários de agências bancárias.
         */
        $tijolo = CategoriaFii::where('sigla', 'TIJOLO')->first();
        $escritorio = TipoFii::updateOrCreate(
            ['sigla' => 'ESCRITORIO'],
            [
                'sigla' => 'ESCRITORIO',
                'nome' => 'FII - ESCRITORIO',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - escritório',
            ],
        );
        $industria = TipoFii::updateOrCreate(
            ['sigla' => 'INDUSTRIA'],
            [
                'sigla' => 'INDUSTRIA',
                'nome' => 'FII - INDUSTRIA',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - industria',
            ],
        );
        $logistica = TipoFii::updateOrCreate(
            ['sigla' => 'LOGISTICA'],
            [
                'sigla' => 'LOGISTICA',
                'nome' => 'FII - LOGISTICA',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - logistica',
            ],
        );
        $hotel = TipoFii::updateOrCreate(
            ['sigla' => 'HOTEL'],
            [
                'sigla' => 'HOTEL',
                'nome' => 'FII - HOTEL',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - hotel',
            ],
        );
        $shopping = TipoFii::updateOrCreate(
            ['sigla' => 'SHOPPING'],
            [
                'sigla' => 'SHOPPING',
                'nome' => 'FII - SHOPPING',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - shopping',
            ],
        );
        $hospital = TipoFii::updateOrCreate(
            ['sigla' => 'HOSPITAL'],
            [
                'sigla' => 'HOSPITAL',
                'nome' => 'FII - HOSPITAL',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - hospital',
            ],
        );
        $escola = TipoFii::updateOrCreate(
            ['sigla' => 'ESCOLA'],
            [
                'sigla' => 'ESCOLA',
                'nome' => 'FII - ESCOLA',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - escola',
            ],
        );
        $banco = TipoFii::updateOrCreate(
            ['sigla' => 'BANCO'],
            [
                'sigla' => 'BANCO',
                'nome' => 'FII - BANCO',
                'categoria_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - banco',
            ],
        );
    }
    private function seed_categoriaPapel()
    {
        /**
         * Letras de Crédito Imobiliário (LCIs);
         * Letras Hipotecárias (LHs);
         * Certificados de Potencial Adicional de Construção (CEPACs);
         * Certificados de Recebíveis Imobiliários (CRIs);
         * Cotas de Fundos de Investimento em Direitos Creditórios (FIDCs)
         */
        $papel = CategoriaFii::where('sigla', 'PAPEL')->first();
        $lci = TipoFii::updateOrCreate(
            ['sigla' => 'LCI'],
            [
                'sigla' => 'LCI',
                'nome' => 'FII - LCI',
                'categoria_id' => $papel->id,
                'descricao' => 'LETRA DE CREDITO IMOBILIARIO - Título de Renda Fixa lastreado no crédito imobiliário.',
            ],
        );
        $lh = TipoFii::updateOrCreate(
            ['sigla' => 'LH'],
            [
                'sigla' => 'LH',
                'nome' => 'FII - LH',
                'categoria_id' => $papel->id,
                'descricao' => 'LETRAS HIPOTECÁRIAS - Título de Renda Fixa lastreado no crédito imobiliário de hipoteca.',
            ],
        );
        $cepac = TipoFii::updateOrCreate(
            ['sigla' => 'CEPAC'],
            [
                'sigla' => 'CEPAC',
                'nome' => 'FII - CEPAC',
                'categoria_id' => $papel->id,
                'descricao' => 'CERTIFICADO DE POTENCIAL ADICIONAL DE CONSTRUÇÃO - são valores mobiliários emitidos pela Prefeitura do Município de São Paulo, como contrapartida para a outorga de Direito Urbanístico.',
            ],
        );
        $cri = TipoFii::updateOrCreate(
            ['sigla' => 'CRI'],
            [
                'sigla' => 'CRI',
                'nome' => 'FII - CRI',
                'categoria_id' => $papel->id,
                'descricao' => 'CERTIFICADO DE RECEBÍVEIS IMOBILIÁRIOS - é um título que gera um direito de crédito ao investidor, receber periódicamente uma remuneração (geralmente juros) e, ao final o valor investido.',
            ],
        );
        $fidc = TipoFii::updateOrCreate(
            ['sigla' => 'FIDC'],
            [
                'sigla' => 'FIDC',
                'nome' => 'FII - FIDC',
                'categoria_id' => $papel->id,
                'descricao' => 'COTAS DE FUNDOS DE INVESTIMENTO EM DIREITOS CREDITÓRIOS - é um investimento de renda fixa. Seu rendimento está atrelado a uma taxa previamente acordada.',
            ],
        );
    }
    private function seed_categoriaFof()
    {
        $fof = CategoriaFii::where('sigla', 'FOF')->first();
        $fof1 = TipoFii::updateOrCreate(
            ['sigla' => 'FOF'],
            [
                'sigla' => 'FOF',
                'nome' => 'FII - FOF',
                'categoria_id' => $fof->id,
                'descricao' => 'FUNDOS DE FUNDOS - investem 95% de seu capital em cotas de outros fundos. Objetivo diluir custos, otimizar ganhos.',
            ],
        );
    }
    private function seed_categoriaHibrido()
    {
        $fof = CategoriaFii::where('sigla', 'HIBRIDO')->first();
        $fof1 = TipoFii::updateOrCreate(
            ['sigla' => 'HIBRIDO'],
            [
                'sigla' => 'HIBRIDO',
                'nome' => 'FII - HIBRIDO',
                'categoria_id' => $fof->id,
                'descricao' => 'FUNDOS HIBRIDOS - investem em uma mescla de ativos do setor imobiliário.',
            ],
        );
    }
}
