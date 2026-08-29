<?php

namespace App\Http\Controllers;

use App\Models\ContactoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactoController extends Controller
{
    /**
     * Store a newly created contact message in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // 1. Validación estricta: ningún dato puede estar vacío o ser null
        $validated = $request->validate([
            'nombre'   => 'required|string|min:2|max:60|filled',
            'empresa'  => 'required|string|min:2|max:100|filled',
            'fono'     => 'required|string|min:6|max:15|filled',
            'email'    => 'required|email|max:50|filled',
            'sucursal' => 'required|string|max:100|filled',
            'asunto'   => 'required|string|max:100|filled',
            'mensaje'  => 'required|string|min:5|max:2000|filled',
        ], [
            'nombre.required'   => 'El nombre es obligatorio.',
            'empresa.required'  => 'El nombre de la empresa es obligatorio.',
            'fono.required'     => 'El teléfono de contacto es obligatorio.',
            'email.required'    => 'El correo electrónico es obligatorio.',
            'email.email'       => 'El formato del correo electrónico no es válido.',
            'sucursal.required' => 'Debe seleccionar una sucursal.',
            'asunto.required'   => 'Debe indicar el asunto del requerimiento.',
            'mensaje.required'  => 'El mensaje es obligatorio y no puede estar vacío.',
        ]);

        try {
            // 2. Guardamos los datos de forma segura en la base de datos MySQL
            ContactoModel::ContactoGuardar($validated);

            // 3. Envío de correo de notificación (con captura de errores para no interrumpir el registro)
            try {
                $subject = "Nuevo contacto recibido desde el sitio web EKSA";
                $for = env('MAIL_TO_ADDRESS', 'rsoto@eksacomercial.cl');

                Mail::send('email', $validated, function ($msj) use ($subject, $for) {
                    $msj->from(env('MAIL_FROM_ADDRESS', 'contacto@eksacomercial.cl'), 'Contacto EKSA Web');
                    $msj->subject($subject);
                    $msj->to($for);
                });
            } catch (\Throwable $mailError) {
                Log::warning('No se pudo enviar el correo de notificación: ' . $mailError->getMessage());
            }

            return Redirect::route('home')
                ->with('success', '¡Tu mensaje y solicitud de cotización han sido registrados exitosamente! Nos pondremos en contacto a la brevedad.');

        } catch (\Exception $e) {
            Log::error('Error al registrar contacto en la base de datos: ' . $e->getMessage());

            return Redirect::route('home')
                ->withInput()
                ->with('error', 'Ocurrió un inconveniente al registrar tus datos: ' . $e->getMessage());
        }
    }
}
