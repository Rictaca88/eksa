<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactoModel;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    /**
     * Muestra el Dashboard principal con métricas KPI y análisis.
     */
    public function index()
    {
        // 1. Métricas Principales (4 Indicadores Requeridos)
        $hoy = ContactoModel::whereDate('reg_date', today())->count();
        $semana = ContactoModel::where('reg_date', '>=', now()->subDays(7))->count();
        $mes = ContactoModel::whereMonth('reg_date', now()->month)
            ->whereYear('reg_date', now()->year)
            ->count();
        $total = ContactoModel::count();

        // 2. Distribución por Sucursal
        $porSucursal = ContactoModel::select('sucursal', DB::raw('count(*) as total'))
            ->groupBy('sucursal')
            ->orderBy('total', 'desc')
            ->get();

        // 3. Distribución por Tipo de Requerimiento (Asunto)
        $porAsunto = ContactoModel::select('asunto', DB::raw('count(*) as total'))
            ->groupBy('asunto')
            ->orderBy('total', 'desc')
            ->get();

        // 4. Últimos 6 Contactos Recibidos
        $ultimosContactos = ContactoModel::orderBy('reg_date', 'desc')
            ->limit(6)
            ->get();

        // 5. Histórico de los últimos 7 días (para gráfico/tendencia)
        $tendencia = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $count = ContactoModel::whereDate('reg_date', $date->toDateString())->count();
            $tendencia[] = [
                'dia' => $date->translatedFormat('D d/m'),
                'total' => $count,
            ];
        }

        return view('admin.dashboard', compact(
            'hoy',
            'semana',
            'mes',
            'total',
            'porSucursal',
            'porAsunto',
            'ultimosContactos',
            'tendencia'
        ));
    }
}

