<?php

namespace App;
use Image;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Fun extends Model {

    public static function getTitleSalon($id) {

        switch ($id) {
            case '0': echo 'SALÓN JULIÉ'; break;
            case '1': echo 'SALÓN VIRREY'; break;
            case '2': echo 'SALÓN ALJIBE'; break;
            case '3': echo 'SALÓN GALA'; break;
            case '4': echo 'ROOFTOP'; break;
            case '5': echo 'CAVA'; break;
            case '6': echo 'SALÓN CATEDRAL'; break;
            case '7': echo 'SALÓN CATEDRAL'; break;
            case '8': echo 'SALÓN COLOSSO'; break;
            case '9': echo 'SALÓN ARROGANTE'; break;
            case '10': echo 'BAR DANTE'; break;
            case '11': echo 'TEATRO MICHELANGELO'; break;
        }
    }

    public static function getBtnPresentacionSalon($id) {

        $file='';
        
        switch ($id) {
            case '0': $file = 'SalónJulié-EventosBsAs'; break;
            case '1': $file = 'SalónVirrey-EventosBsAs'; break;
            case '2': $file = 'SalónAljibe-EventosBsAs'; break;
            case '3': $file = 'SalónGala-EventosBsAs.pdf'; break;
            case '4': $file = 'Rooftop-EventosBsAs'; break;
            case '5': $file = 'SalónCAVA-EventosBsAs'; break;
            case '6': $file = 'SalónCatedral-EventosBsAs'; break;
            case '7': $file = 'SalónCatedral-EventosBsAs'; break;
            case '8': $file = 'SalónColosso-EventosBsAs'; break;
            case '9': $file = 'SalónArrogante-EventosBsAs'; break;
            case '10': $file = 'SalónBarDante-EventosBsAs'; break;
            case '11': $file = 'TeatroMichelangelo-EventosBsAs'; break;
        }

        $url = asset('pdfs/' . $file . '.pdf');

        return '<a target="new" class="btn-presentacion" href="'.$url.'">MIRÁ TODOS NUESTROS SERVICIOS</a>';

    }

}
