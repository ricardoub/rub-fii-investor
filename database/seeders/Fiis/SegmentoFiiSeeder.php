<?php

namespace Database\Seeders\Fiis;

use App\Models\Fiis\SegmentoFii;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SegmentoFiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $this->seed_segmentoTijolo();
        $this->seed_segmentoPapel();
        $this->seed_segmentoFof();
        $this->seed_segmentoHibrido();

    }

    private function seed_segmentoTijolo()
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
        $escritorio = SegmentoFii::updateOrCreate(
            ['sigla' => 'ESCRITORIO'],
            [
                'sigla' => 'ESCRITORIO',
                'nome' => 'ESCRITORIO',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - escritório',
            ],
        );
        $industria = SegmentoFii::updateOrCreate(
            ['sigla' => 'INDUSTRIA'],
            [
                'sigla' => 'INDUSTRIA',
                'nome' => 'INDUSTRIA',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - industria',
            ],
        );
        $logistica = SegmentoFii::updateOrCreate(
            ['sigla' => 'LOGISTICA'],
            [
                'sigla' => 'LOGISTICA',
                'nome' => 'LOGISTICA',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - logistica',
            ],
        );
        $hotel = SegmentoFii::updateOrCreate(
            ['sigla' => 'HOTEL'],
            [
                'sigla' => 'HOTEL',
                'nome' => 'HOTEL',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - hotel',
            ],
        );
        $shopping = SegmentoFii::updateOrCreate(
            ['sigla' => 'SHOPPING'],
            [
                'sigla' => 'SHOPPING',
                'nome' => 'SHOPPING',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - shopping',
            ],
        );
        $hospital = SegmentoFii::updateOrCreate(
            ['sigla' => 'HOSPITAL'],
            [
                'sigla' => 'HOSPITAL',
                'nome' => 'HOSPITAL',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - hospital',
            ],
        );
        $escola = SegmentoFii::updateOrCreate(
            ['sigla' => 'ESCOLA'],
            [
                'sigla' => 'ESCOLA',
                'nome' => 'ESCOLA',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - escola',
            ],
        );
        $banco = SegmentoFii::updateOrCreate(
            ['sigla' => 'BANCO'],
            [
                'sigla' => 'BANCO',
                'nome' => 'BANCO',
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - banco',
            ],
        );
    }
    private function seed_segmentoPapel()
    {
        /**
         * Letras de Crédito Imobiliário (LCIs);
         * Letras Hipotecárias (LHs);
         * Certificados de Potencial Adicional de Construção (CEPACs);
         * Certificados de Recebíveis Imobiliários (CRIs);
         * Cotas de Fundos de Investimento em Direitos Creditórios (FIDCs)
         */
        $lci = SegmentoFii::updateOrCreate(
            ['sigla' => 'LCI'],
            [
                'sigla' => 'LCI',
                'nome' => 'LCI',
                'descricao' => 'LETRA DE CREDITO IMOBILIARIO - Título de Renda Fixa lastreado no crédito imobiliário.',
            ],
        );
        $lh = SegmentoFii::updateOrCreate(
            ['sigla' => 'LH'],
            [
                'sigla' => 'LH',
                'nome' => 'LH',
                'descricao' => 'LETRAS HIPOTECÁRIAS - Título de Renda Fixa lastreado no crédito imobiliário de hipoteca.',
            ],
        );
        $cepac = SegmentoFii::updateOrCreate(
            ['sigla' => 'CEPAC'],
            [
                'sigla' => 'CEPAC',
                'nome' => 'CEPAC',
                'descricao' => 'CERTIFICADO DE POTENCIAL ADICIONAL DE CONSTRUÇÃO - são valores mobiliários emitidos pela Prefeitura do Município de São Paulo, como contrapartida para a outorga de Direito Urbanístico.',
            ],
        );
        $cri = SegmentoFii::updateOrCreate(
            ['sigla' => 'CRI'],
            [
                'sigla' => 'CRI',
                'nome' => 'CRI',
                'descricao' => 'CERTIFICADO DE RECEBÍVEIS IMOBILIÁRIOS - é um título que gera um direito de crédito ao investidor, receber periódicamente uma remuneração (geralmente juros) e, ao final o valor investido.',
            ],
        );
        $fidc = SegmentoFii::updateOrCreate(
            ['sigla' => 'FIDC'],
            [
                'sigla' => 'FIDC',
                'nome' => 'FIDC',
                'descricao' => 'COTAS DE FUNDOS DE INVESTIMENTO EM DIREITOS CREDITÓRIOS - é um investimento de renda fixa. Seu rendimento está atrelado a uma taxa previamente acordada.',
            ],
        );
    }
    private function seed_segmentoFof()
    {
        $fof = SegmentoFii::updateOrCreate(
            ['sigla' => 'FOF'],
            [
                'sigla' => 'FOF',
                'nome' => 'FOF',
                'descricao' => 'FUNDOS DE FUNDOS - investem 95% de seu capital em cotas de outros fundos. Objetivo diluir custos, otimizar ganhos.',
            ],
        );
    }
    private function seed_segmentoHibrido()
    {
        $hibrido = SegmentoFii::updateOrCreate(
            ['sigla' => 'HIBRIDO'],
            [
                'sigla' => 'HIBRIDO',
                'nome' => 'HIBRIDO',
                'descricao' => 'FUNDOS HIBRIDOS - investem em uma mescla de ativos do setor imobiliário.',
            ],
        );
    }
}
