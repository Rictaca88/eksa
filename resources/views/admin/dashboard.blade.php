@extends('admin.layouts.app')

@section('title', 'Dashboard de Contactos')
@section('page_title', 'Dashboard General')

@section('styles')
<style>
  /* KPI Cards */
  .stat-card-kpi {
    background: #ffffff;
    border-radius: 16px;
    padding: 22px 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 15px rgba(0, 45, 98, 0.04);
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: all 0.25s ease;
    height: 100%;
    text-decoration: none;
    color: inherit;
  }
  .stat-card-kpi:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0, 45, 98, 0.08);
    border-color: var(--eksa-cyan);
    text-decoration: none;
    color: inherit;
  }
  .kpi-info h3 {
    font-size: 28px;
    font-weight: 800;
    color: var(--eksa-navy);
    margin: 0 0 4px 0;
    line-height: 1;
  }
  .kpi-info p {
    font-size: 13px;
    font-weight: 600;
    color: var(--eksa-text-muted);
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .kpi-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
  }
  .kpi-icon-today { background: #e0f2fe; color: #0284c7; }
  .kpi-icon-week { background: #ecfdf5; color: #059669; }
  .kpi-icon-month { background: #fef3c7; color: #d97706; }
  .kpi-icon-total { background: #f1f5f9; color: var(--eksa-navy); }

  /* Chart bars */
  .trend-bars-container {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 12px;
    height: 160px;
    padding: 15px 10px 0;
  }
  .trend-col {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
    height: 100%;
    justify-content: flex-end;
  }
  .trend-bar {
    width: 100%;
    max-width: 38px;
    background: linear-gradient(180deg, var(--eksa-cyan) 0%, var(--eksa-navy) 100%);
    border-radius: 6px 6px 0 0;
    min-height: 8px;
    transition: height 0.4s ease;
    position: relative;
  }
  .trend-val {
    font-size: 11px;
    font-weight: 700;
    color: var(--eksa-navy);
    margin-bottom: 4px;
  }
  .trend-label {
    font-size: 11px;
    font-weight: 600;
    color: var(--eksa-text-muted);
    margin-top: 6px;
    white-space: nowrap;
  }

  /* Table styling */
  .table-admin {
    width: 100%;
    margin-bottom: 0;
    font-size: 13.5px;
  }
  .table-admin th {
    background-color: #f8fafc;
    color: var(--eksa-navy);
    font-weight: 700;
    border-top: none;
    border-bottom: 1px solid #e2e8f0;
    padding: 12px 14px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .table-admin td {
    padding: 12px 14px;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
  }
  .table-admin tr:hover td {
    background-color: #f8fafc;
  }

  .badge-sucursal {
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    text-transform: capitalize;
  }
  .badge-santiago { background: #e0f2fe; color: #0369a1; }
  .badge-san-antonio { background: #ecfdf5; color: #065f46; }
  .badge-san-felipe { background: #fef3c7; color: #92400e; }
</style>
@endsection

@section('content')

<!-- 4 Tarjetas KPI Solicitadas -->
<div class="row mb-4">

  <!-- KPI 1: Contactos Hoy -->
  <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
    <a href="{{ route('admin.contactos', ['desde' => date('Y-m-d'), 'hasta' => date('Y-m-d')]) }}" class="stat-card-kpi">
      <div class="kpi-info">
        <h3>{{ number_format($hoy) }}</h3>
        <p>Contactos Hoy</p>
      </div>
      <div class="kpi-icon kpi-icon-today">
        <i class="fa-solid fa-calendar-day"></i>
      </div>
    </a>
  </div>

  <!-- KPI 2: Contactos Semana -->
  <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
    <a href="{{ route('admin.contactos', ['desde' => now()->subDays(7)->format('Y-m-d')]) }}" class="stat-card-kpi">
      <div class="kpi-info">
        <h3>{{ number_format($semana) }}</h3>
        <p>Últimos 7 Días</p>
      </div>
      <div class="kpi-icon kpi-icon-week">
        <i class="fa-solid fa-calendar-week"></i>
      </div>
    </a>
  </div>

  <!-- KPI 3: Contactos Mes -->
  <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
    <a href="{{ route('admin.contactos', ['desde' => now()->startOfMonth()->format('Y-m-d')]) }}" class="stat-card-kpi">
      <div class="kpi-info">
        <h3>{{ number_format($mes) }}</h3>
        <p>Mes de {{ ucfirst(now()->translatedFormat('F')) }}</p>
      </div>
      <div class="kpi-icon kpi-icon-month">
        <i class="fa-solid fa-calendar"></i>
      </div>
    </a>
  </div>

  <!-- KPI 4: Total Histórico (Full) -->
  <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
    <a href="{{ route('admin.contactos') }}" class="stat-card-kpi">
      <div class="kpi-info">
        <h3>{{ number_format($total) }}</h3>
        <p>Total Acumulado</p>
      </div>
      <div class="kpi-icon kpi-icon-total">
        <i class="fa-solid fa-database"></i>
      </div>
    </a>
  </div>

</div>

<div class="row">

  <!-- Columna Izquierda: Tendencia y Últimos Contactos -->
  <div class="col-lg-8">

    <!-- Tarjeta: Tendencia de Contactos Últimos 7 Días -->
    <div class="card-white">
      <div class="card-white-header">
        <h2 class="card-white-title">
          <i class="fa-solid fa-chart-column text-info"></i> Tendencia de Contactos (Últimos 7 Días)
        </h2>
        <span class="badge badge-light border text-muted small">Actualizado en vivo</span>
      </div>

      @php
        $maxTendencia = max(array_column($tendencia, 'total'));
        $maxTendencia = $maxTendencia > 0 ? $maxTendencia : 1;
      @endphp

      <div class="trend-bars-container">
        @foreach($tendencia as $item)
          @php
            $heightPct = round(($item['total'] / $maxTendencia) * 85);
            $heightPct = $item['total'] > 0 ? max($heightPct, 12) : 4;
          @endphp
          <div class="trend-col">
            <span class="trend-val">{{ $item['total'] }}</span>
            <div class="trend-bar" style="height: {{ $heightPct }}%;"></div>
            <span class="trend-label">{{ $item['dia'] }}</span>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Tarjeta: Últimos Contactos Recibidos -->
    <div class="card-white">
      <div class="card-white-header">
        <h2 class="card-white-title">
          <i class="fa-solid fa-inbox text-info"></i> Últimos Contactos Registrados
        </h2>
        <a href="{{ route('admin.contactos') }}" class="btn btn-sm btn-outline-primary" style="border-radius: 6px; font-weight: 700;">
          Ver todos los contactos <i class="fa-solid fa-arrow-right ml-1"></i>
        </a>
      </div>

      <div class="table-responsive">
        <table class="table table-admin">
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Nombre & Empresa</th>
              <th>Sucursal</th>
              <th>Asunto</th>
              <th class="text-right">Acción</th>
            </tr>
          </thead>
          <tbody>
            @forelse($ultimosContactos as $contacto)
              <tr>
                <td>
                  <span class="font-weight-bold d-block text-dark">{{ date('d/m/Y', strtotime($contacto->reg_date)) }}</span>
                  <small class="text-muted">{{ date('H:i', strtotime($contacto->reg_date)) }} hrs</small>
                </td>
                <td>
                  <span class="font-weight-bold d-block text-dark">{{ $contacto->nombre }}</span>
                  <small class="text-muted"><i class="fa-solid fa-building mr-1"></i> {{ $contacto->empresa ?? 'Particular' }}</small>
                </td>
                <td>
                  @php
                    $suc = strtolower(trim($contacto->sucursal));
                    $sucClass = 'badge-santiago';
                    if (str_contains($suc, 'antonio')) $sucClass = 'badge-san-antonio';
                    elseif (str_contains($suc, 'felipe')) $sucClass = 'badge-san-felipe';
                  @endphp
                  <span class="badge-sucursal {{ $sucClass }}">{{ $contacto->sucursal }}</span>
                </td>
                <td>
                  <span class="small font-weight-bold text-dark">{{ $contacto->asunto }}</span>
                </td>
                <td class="text-right">
                  <button type="button" class="btn btn-sm btn-light border text-info btn-ver-detalle" data-id="{{ $contacto->id }}" title="Ver detalle">
                    <i class="fa-solid fa-eye"></i>
                  </button>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center py-4 text-muted">
                  <i class="fa-solid fa-folder-open d-block mb-2" style="font-size: 28px;"></i>
                  No se registran contactos aún en el sistema.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Columna Derecha: Distribuciones y Atajos -->
  <div class="col-lg-4">

    <!-- Distribución por Sucursal -->
    <div class="card-white">
      <div class="card-white-header">
        <h2 class="card-white-title">
          <i class="fa-solid fa-location-dot text-info"></i> Por Sucursal
        </h2>
      </div>

      <div>
        @php $totalSucursales = $total > 0 ? $total : 1; @endphp
        @forelse($porSucursal as $item)
          @php $pct = round(($item->total / $totalSucursales) * 100); @endphp
          <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span class="font-weight-bold small text-dark">{{ ucfirst($item->sucursal) }}</span>
              <span class="small font-weight-bold text-muted">{{ $item->total }} ({{ $pct }}%)</span>
            </div>
            <div class="progress" style="height: 7px; border-radius: 10px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: {{ $pct }}%;"></div>
            </div>
          </div>
        @empty
          <p class="text-muted small">Sin datos disponibles.</p>
        @endforelse
      </div>
    </div>

    <!-- Distribución por Asunto -->
    <div class="card-white">
      <div class="card-white-header">
        <h2 class="card-white-title">
          <i class="fa-solid fa-tags text-info"></i> Por Tipo de Asunto
        </h2>
      </div>

      <div>
        @forelse($porAsunto as $item)
          @php $pct = round(($item->total / $totalSucursales) * 100); @endphp
          <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span class="font-weight-bold small text-dark text-truncate" style="max-width: 180px;">{{ $item->asunto }}</span>
              <span class="small font-weight-bold text-muted">{{ $item->total }} ({{ $pct }}%)</span>
            </div>
            <div class="progress" style="height: 7px; border-radius: 10px;">
              <div class="progress-bar" role="progressbar" style="width: {{ $pct }}%; background-color: var(--eksa-navy);"></div>
            </div>
          </div>
        @empty
          <p class="text-muted small">Sin datos disponibles.</p>
        @endforelse
      </div>
    </div>

    <!-- Atajos Rápidos -->
    <div class="card-white" style="background: linear-gradient(135deg, #001f44, #002d62); color: #ffffff;">
      <h4 class="text-white font-weight-bold mb-2" style="font-size: 16px;">
        <i class="fa-solid fa-shield-halved text-info mr-1"></i> Seguridad de tu Cuenta
      </h4>
      <p class="small text-light mb-3" style="opacity: 0.85;">
        Protege el acceso a tu cuenta administrativa activando la Autenticación en Dos Pasos (MFA) por correo.
      </p>
      <a href="{{ route('admin.perfil') }}" class="btn btn-sm btn-info btn-block font-weight-bold" style="border-radius: 8px;">
        Gestionar Mi Perfil & MFA <i class="fa-solid fa-arrow-right ml-1"></i>
      </a>
    </div>

  </div>

</div>

<!-- Modal para ver detalle de contacto rápido -->
<div class="modal fade" id="modalDetalleContacto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 10px 35px rgba(0,0,0,0.15);">
      <div class="modal-header" style="background: var(--eksa-navy); color: #ffffff; border-top-left-radius: 16px; border-top-right-radius: 16px;">
        <h5 class="modal-title font-weight-bold" style="font-size: 16px;">
          <i class="fa-solid fa-envelope-open mr-2 text-info"></i> Detalle del Contacto
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4" id="modalDetalleContenido">
        <div class="text-center py-4">
          <div class="spinner-border text-info" role="status"></div>
        </div>
      </div>
      <div class="modal-footer bg-light" style="border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
  $(document).ready(function () {
    $('.btn-ver-detalle').on('click', function () {
      var id = $(this).data('id');
      var url = "{{ url('desktop/contactos') }}/" + id;
      
      $('#modalDetalleContenido').html('<div class="text-center py-4"><div class="spinner-border text-info" role="status"></div></div>');
      $('#modalDetalleContacto').modal('show');

      $.get(url, function (data) {
        var html = `
          <div class="mb-3 border-bottom pb-2">
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge badge-info">${data.sucursal}</span>
              <span class="text-muted small">${data.fecha}</span>
            </div>
            <h4 class="mt-2 mb-1 font-weight-bold text-dark" style="font-size: 18px;">${data.nombre}</h4>
            <span class="text-muted small d-block"><i class="fa-solid fa-building mr-1"></i> ${data.empresa}</span>
          </div>

          <div class="row mb-3">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <strong class="d-block small text-muted">Teléfono:</strong>
              <a href="tel:${data.fono}" class="text-info font-weight-bold"><i class="fa-solid fa-phone mr-1"></i> ${data.fono}</a>
            </div>
            <div class="col-sm-6">
              <strong class="d-block small text-muted">Correo:</strong>
              <a href="mailto:${data.email}" class="text-info font-weight-bold"><i class="fa-solid fa-envelope mr-1"></i> ${data.email}</a>
            </div>
          </div>

          <div class="mb-3">
            <strong class="d-block small text-muted">Asunto:</strong>
            <span class="font-weight-bold text-dark">${data.asunto}</span>
          </div>

          <div class="p-3 bg-light rounded" style="border: 1px solid #e2e8f0;">
            <strong class="d-block small text-muted mb-1">Mensaje:</strong>
            <p class="mb-0 text-dark small" style="white-space: pre-line; line-height: 1.6;">${data.message}</p>
          </div>
        `;
        $('#modalDetalleContenido').html(html);
      }).fail(function () {
        $('#modalDetalleContenido').html('<div class="alert alert-danger mb-0">No se pudo cargar la información del contacto.</div>');
      });
    });
  });
</script>
@endsection

