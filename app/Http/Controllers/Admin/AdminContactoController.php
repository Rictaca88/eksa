<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactoModel;
use Illuminate\Http\Request;

class AdminContactoController extends Controller
{
    /**
     * Listado general de contactos con buscador y filtros avanzados.
     */
    public function index(Request $request)
    {
        $query = ContactoModel::query();

        // 1. Buscador por texto general
        if ($request->filled('q')) {
            $search = '%' . trim($request->q) . '%';
            $query->where(function ($q) use ($search) {
                $q->where('nombre', 'LIKE', $search)
                    ->orWhere('empresa', 'LIKE', $search)
                    ->orWhere('email', 'LIKE', $search)
                    ->orWhere('fono', 'LIKE', $search)
                    ->orWhere('message', 'LIKE', $search);
            });
        }

        // 2. Filtro por Sucursal
        if ($request->filled('sucursal')) {
            $query->where('sucursal', $request->sucursal);
        }

        // 3. Filtro por Asunto
        if ($request->filled('asunto')) {
            $query->where('asunto', $request->asunto);
        }

        // 4. Filtro por Estado
        if ($request->has('estado') && $request->estado !== '') {
            $query->where('estado', (int) $request->estado);
        }

        // 5. Filtro por Rango de Fechas
        if ($request->filled('desde')) {
            $query->whereDate('reg_date', '>=', $request->desde);
        }
        if ($request->filled('hasta')) {
            $query->whereDate('reg_date', '<=', $request->hasta);
        }

        $contactos = $query->orderBy('reg_date', 'desc')
            ->paginate(15)
            ->appends($request->all());

        // Sucursales y Asuntos únicos para los filtros del formulario
        $sucursales = ContactoModel::select('sucursal')
            ->whereNotNull('sucursal')
            ->where('sucursal', '!=', '')
            ->distinct()
            ->pluck('sucursal');

        $asuntos = ContactoModel::select('asunto')
            ->whereNotNull('asunto')
            ->where('asunto', '!=', '')
            ->distinct()
            ->pluck('asunto');

        $totalContactos = ContactoModel::count();
        $contactosHoy = ContactoModel::whereDate('reg_date', today())->count();

        return view('admin.contactos.index', compact(
            'contactos',
            'sucursales',
            'asuntos',
            'totalContactos',
            'contactosHoy'
        ));
    }

    /**
     * Retorna los datos de un contacto en formato JSON para el modal.
     */
    public function show($id)
    {
        $contacto = ContactoModel::find($id);

        if (!$contacto) {
            return response()->json(['error' => 'Contacto no encontrado'], 404);
        }

        return response()->json([
            'id' => $contacto->id,
            'nombre' => $contacto->nombre,
            'empresa' => $contacto->empresa ?? 'No especificada',
            'fono' => $contacto->fono ?? 'No informado',
            'email' => $contacto->email,
            'sucursal' => ucfirst($contacto->sucursal),
            'asunto' => ucfirst($contacto->asunto),
            'message' => $contacto->message,
            'estado' => $contacto->estado,
            'fecha' => date('d/m/Y H:i', strtotime($contacto->reg_date)),
        ]);
    }

    /**
     * Alterna el estado de un contacto (Pendiente / Gestionado).
     */
    public function toggleEstado(Request $request, $id)
    {
        $contacto = ContactoModel::findOrFail($id);
        $contacto->estado = $contacto->estado == 1 ? 0 : 1;
        $contacto->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'nuevo_estado' => $contacto->estado,
                'mensaje' => $contacto->estado == 1 ? 'Marcado como gestionado' : 'Marcado como pendiente',
            ]);
        }

        return back()->with('success', 'Estado del contacto actualizado correctamente.');
    }
}

