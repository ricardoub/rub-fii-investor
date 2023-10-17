<?php

namespace App\Services\Common;

use Illuminate\Support\Facades\Log;

class FormatService
{

    public function formatData_toBR_fromEN($dtRecebida)
    {
        if ($dtRecebida) {
            return \Carbon\Carbon::parse($dtRecebida)->format('d/m/Y');
        }
        return null;
    }
    public function formatData_toEN_fromBR($dtRecebida)
    {
        if ($dtRecebida) {
            return \Carbon\Carbon::createFromFormat('d/m/Y', $dtRecebida)->toDateString();
        }
        return null;
    }

    public function formatNumber_toBR_fromEN($vlrRecebido, $qtdeDecimais) 
    {
        Log::debug("vlrRecebido: $vlrRecebido - qtdeDecimais: $qtdeDecimais");
        
        if ($vlrRecebido && $qtdeDecimais) {
            //$numero = str_replace(".", ',', $vlrRecebido);
            return number_format((float) $vlrRecebido, $qtdeDecimais, ',', '.');
        }
        return null;

    }
    public function formatNumber_toEN_fromBR($vlrRecebido, $qtdeDecimais) 
    {
        if ($vlrRecebido && $qtdeDecimais) {
            $numero = str_replace(",", '.', $vlrRecebido);
            return number_format($numero, $qtdeDecimais, '.', ',');
        }
        return null;
    }

}