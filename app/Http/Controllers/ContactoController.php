<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Models\ContactoModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    $param = (object)$request->all();
    //echo"<pre>";print_r( $param );echo"</pre>";die();

    //
    // Guardamos los datos mysql
    ContactoModel::ContactoGuardar($param, 0);

    //
    // Enviamos los datos a HRnet - postgresql
    /*
    $client = new Client([
                        'headers' => [
                                      'content-type' => 'application/json',
                                      'Accept' => 'application/json'
                                      ]
                        ]);

    $response = $client->request(
                                  'GET',
                                  env('API_CONTACTO').'contacto/store',
                                  [
                                    'json' => [
                                              'id_negocio'=>'3',
                                              'nombre'=>$param->nombre,
                                              'empresa'=>$param->empresa,
                                              'fono'=>$param->fono,
                                              'email'=>$param->email,
                                              'sucursal'=>$param->sucursal,
                                              'asunto'=>$param->asunto,
                                              'mensaje'=>$param->mensaje
                                              ]
                                  ]
                                );

    $data = $response->getBody();

    $data = json_decode($data);
    //echo"<pre>data: ";print_r ($data); echo "</pre>";die();
    */

    //
    // Enviamos por correo un aviso de recepcion de contacto

    $subject = "Se ha hecho recepción de un nuevo contacto desde la web";
    $for = "rsoto@eksacomercial.cl";
    //$for = "ricteca88@gmail.com";
    Mail::send('email',$request->all(), function($msj) use($subject,$for){
        $msj->from("contacto@eksacomercial.cl","Contacto Eksacomercial Web");
        $msj->subject($subject);
        $msj->to($for);
    });


    //return Redirect()->route('index'); // produccion
    return Redirect()->route('home');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
