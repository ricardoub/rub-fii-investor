<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Termwind\Components\Dt;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    protected function formatData_toBR_fromEN($dtRecebida)
    {
        return \Carbon\Carbon::parse($dtRecebida)->format('d/m/Y');
    }
    protected function formatData_toEN_fromBR($dtRecebida)
    {
        //Log::debug("dtRecebida: $dtRecebida");
        //\Carbon\Carbon::setLocale('en');
        return \Carbon\Carbon::createFromFormat('d/m/Y', $dtRecebida)->toDateString();
    }

    protected function formatNumber_toBR_fromEN($vlrRecebido, $qtdeDecimais) {
        $numero = str_replace(".", ',', $vlrRecebido);
        return number_format($numero, $qtdeDecimais, ',', '.');
    }
    protected function formatNumber_toEN_fromBR($vlrRecebido, $qtdeDecimais) {
        $numero = str_replace(",", '.', $vlrRecebido);
        return number_format($numero, $qtdeDecimais, '.', ',');
    }


}
