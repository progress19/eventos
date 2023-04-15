<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function index() {
        
        $salones = array(
        
            '693675655', //0
            '689651119', //1
            '689650649', //2
            '689650859', //3
            '696261923', //4
            '691015270', //5
            '707002081', //6
            '707002081', //7
            '707003439', //8
            '707001090', //9
            '707004519', //10
            '707005567', //11

        );

        return view('home')->with([
            'salones' => $salones,
        ]);

    }

    public function enviarContacto(Request $request) {
    
    sleep(1);

       //guarda el valor de los campos enviados desde el form en un array
       $data = $request->all();
        /*       
          $data = [
           'data' => $request->all(),
           'promo' => $promo
          ];
        */
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       \Mail::send('emails.contacto', $data, function($message) use ($request)
       
       {
            //remitente
            $message->from('info@eventosbsas.com', 'Eventos San Telmo');

            //asunto
            $message->subject('Contacto desde Eventos San Telmo');

            $message->to('luciano@laventanaweb.com', 'Eventos San Telmo');  
       
            $message->to($request->email, $request->nombre);
      
       });

    return '<div class="mensaje-consulta"><span style="font-size:30px"></span><br>GRACIAS POR TU CONSULTA! <br> PRONTO TE CONTACTAREMOS!!!</div>';
    
  }

}
