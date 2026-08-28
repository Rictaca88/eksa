<?php

namespace App\Models;

use App\Models\Util;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    use HasFactory;

    static public function ContactoGuardar($contacto, $op){

      $sql = "
              insert into contactos (nombre, empresa, fono, email, sucursal, asunto, message)
              values ('".$contacto->nombre."', '".$contacto->empresa."', '".$contacto->fono."', '".$contacto->email."', '".$contacto->sucursal."', '".$contacto->asunto."', '".$contacto->mensaje."');
              ";

      Util::versql($sql, $op);
      $results = DB::select( $sql );
      //echo "<pre>";print_r($results);echo "</pre>";die;
      return $results;
    }

}
