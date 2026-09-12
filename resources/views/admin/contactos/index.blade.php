@extends('admin.layouts.app')

@section('title', 'Gestión de Contactos')
@section('page_title', 'Bandeja de Contactos')

@section('styles')
<style>
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
    padding: 14px;
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

  .badge-estado-0 {
    background: #fff1f2;
    color: #e11d48;
    border: 1px solid #fecdd3;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    cursor: pointer;
  }
  .badge-estado-1 {
    background: #ecfdf5;
    color: #059669;
    border: 1px solid #a7f3d0;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    cursor: pointer;
  }

  .filter-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 20px 22px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 15px rgba(0, 45, 98, 0.03);
    margin-bottom: 25px;
  }
</style>
@endsection

@section('content')

<!-- Barra de Filtros y Búsqueda -->
<div class="filter-card">
  <form action="{{ route('admin.contactos') }}" method="GET">
    <div class="row align-items-end">

      <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
        <label class="small font-weight-bold text-muted mb-1">Buscar por palabra clave</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text bg-light border-right-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
          </div>
          <input type="text" name="q" class="form-control form-control-admin border-left-0" placeholder="Nombre, empresa, email, teléfono..." value="{{ request('q') }}">
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
        <label class="small font-weight-bold text-muted mb-1">Sucursal</label>
        <select name="sucursal" class="form-control form-control-admin">
          <option value="">Todas las sucursales</option>
          @foreach($sucursales as $suc)
            <option value="{{ $suc }}" {{ request('sucursal') == $suc ? 'selected' : '' }}>{{ ucfirst($suc) }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
        <label class="small font-weight-bold text-muted mb-1">Tipo de Asunto</label>
        <select name="asunto" class="form-control form-control-admin">
          <option value="">Todos los asuntos</option>
          @foreach($asuntos as $as)
            <option value="{{ $as }}" {{ request('asunto') == $as ? 'selected' : '' }}>{{ ucfirst($as) }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-lg-2 col-md-4 col-6 mb-3 mb-lg-0">
        <label class="small font-weight-bold text-muted mb-1">Desde</label>
        <input type="date" name="desde" class="form-control form-control-admin" value="{{ request('desde') }}">
      </div>

      <div class="col-lg-2 col-md-4 col-6 mb-3 mb-lg-0">
        <label class="small font-weight-bold text-muted mb-1">Hasta</label>
        <input type="date" name="hasta" class="form-control form-control-admin" value="{{ request('hasta') }}">
      </div>

      <div class="col-lg-1 col-md-4 mb-3 mb-lg-0 text-right">
        <button type="submit" class="btn btn-admin-primary btn-block p-2" title="Aplicar Filtros">
          <i class="fa-solid fa-filter"></i>
        </button>
      </div>

    </div>

    @if(request()->hasAny(['q', 'sucursal', 'asunto', 'desde', 'hasta', 'estado']))
      <div class="mt-3 pt-2 border-top d-flex align-items-center justify-content-between">
        <span class="small text-muted font-weight-bold">
          <i class="fa-solid fa-filter-circle-xmark mr-1 text-info"></i> Filtros aplicados
        </span>
        <a href="{{ route('admin.contactos') }}" class="btn btn-sm btn-outline-danger font-weight-bold" style="border-radius: 6px; font-size: 12px;">
          <i class="fa-solid fa-xmark mr-1"></i> Limpiar Filtros
        </a>
      </div>
    @endif
  </form>
</div>

<!-- Tabla Principal de Contactos -->
<div class="card-white p-0 overflow-hidden">
  <div class="p-4 d-flex justify-content-between align-items-center border-bottom">
    <div>
      <h2 class="card-white-title">
        <i class="fa-solid fa-address-book text-info mr-1"></i> Listado General de Contactos
      </h2>
      <small class="text-muted">Mostrando {{ $contactos->firstItem() ?? 0 }} a {{ $contactos->lastItem() ?? 0 }} de {{ $contactos->total() }} registros</small>
    </div>

    <div>
      <span class="badge badge-info p-2 font-weight-bold" style="background-color: var(--eksa-navy);">
        Total: {{ number_format($totalContactos) }}
      </span>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-admin">
      <thead>
        <tr>
          <th>ID</th>
          <th>Fecha & Hora</th>
          <th>Nombre & Empresa</th>
          <th>Contacto</th>
          <th>Sucursal</th>
          <th>Asunto</th>
          <th>Estado</th>
          <th class="text-right">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse($contactos as $contacto)
          <tr>
            <td>
              <span class="badge badge-light border text-muted">#{{ $contacto->id }}</span>
            </td>
            <td>
              <span class="font-weight-bold d-block text-dark">{{ date('d/m/Y', strtotime($contacto->reg_date)) }}</span>
              <small class="text-muted">{{ date('H:i', strtotime($contacto->reg_date)) }} hrs</small>
            </td>
            <td>
              <span class="font-weight-bold d-block text-dark">{{ $contacto->nombre }}</span>
              <small class="text-muted"><i class="fa-solid fa-building mr-1"></i> {{ $contacto->empresa ?? 'Particular' }}</small>
            </td>
            <td>
              <a href="tel:{{ $contacto->fono }}" class="small d-block text-info font-weight-bold text-decoration-none mb-1">
                <i class="fa-solid fa-phone mr-1"></i> {{ $contacto->fono ?? 'No informado' }}
              </a>
              <a href="mailto:{{ $contacto->email }}" class="small d-block text-muted text-decoration-none">
                <i class="fa-solid fa-envelope mr-1"></i> {{ $contacto->email }}
              </a>
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
              <span class="small font-weight-bold text-dark d-block">{{ $contacto->asunto }}</span>
              <small class="text-muted d-block text-truncate" style="max-width: 220px;" title="{{ $contacto->message }}">
                {{ $contacto->message }}
              </small>
            </td>
            <td>
              <form action="{{ route('admin.contactos.estado', $contacto->id) }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="{{ $contacto->estado == 1 ? 'badge-estado-1' : 'badge-estado-0' }} border-0" title="Haz clic para cambiar estado">
                  @if($contacto->estado == 1)
                    <i class="fa-solid fa-circle-check mr-1"></i> Gestionado
                  @else
                    <i class="fa-solid fa-clock mr-1"></i> Pendiente
                  @endif
                </button>
              </form>
            </td>
            <td class="text-right">
              <button type="button" class="btn btn-sm btn-info text-white font-weight-bold btn-ver-detalle" data-id="{{ $contacto->id }}" style="border-radius: 6px;" title="Ver mensaje completo">
                <i class="fa-solid fa-eye mr-1"></i> Ver
              </button>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8" class="text-center py-5 text-muted">
              <i class="fa-solid fa-folder-open d-block mb-3" style="font-size: 36px; opacity: 0.5;"></i>
              <h5 class="font-weight-bold mb-1">No se encontraron contactos</h5>
              <p class="small mb-0">Intenta modificando los términos de búsqueda o los filtros aplicados.</p>
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <!-- Paginación -->
  @if($contactos->hasPages())
    <div class="p-4 border-top d-flex justify-content-between align-items-center flex-wrap">
      <small class="text-muted mb-2 mb-sm-0">Página {{ $contactos->currentPage() }} de {{ $contactos->lastPage() }}</small>
      <div>
        {{ $contactos->appends(request()->query())->links('pagination::bootstrap-4') }}
      </div>
    </div>
  @endif
</div>

<!-- Modal Detalle del Contacto -->
<div class="modal fade" id="modalDetalleContacto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 15px 40px rgba(0,0,0,0.2);">
      <div class="modal-header" style="background: var(--eksa-navy); color: #ffffff; border-top-left-radius: 16px; border-top-right-radius: 16px;">
        <h5 class="modal-title font-weight-bold" style="font-size: 17px;">
          <i class="fa-solid fa-envelope-open mr-2 text-info"></i> Detalle de la Solicitud del Cliente
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4" id="modalDetalleContenido">
        <div class="text-center py-5">
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
      
      $('#modalDetalleContenido').html('<div class="text-center py-5"><div class="spinner-border text-info" role="status"></div></div>');
      $('#modalDetalleContacto').modal('show');

      $.get(url, function (data) {
        var estadoBadge = data.estado == 1
          ? '<span class="badge badge-success px-3 py-1 font-weight-bold"><i class="fa-solid fa-circle-check mr-1"></i> Gestionado</span>'
          : '<span class="badge badge-danger px-3 py-1 font-weight-bold"><i class="fa-solid fa-clock mr-1"></i> Pendiente</span>';

        var html = `
          <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
            <div>
              <span class="badge badge-info mr-2">${data.sucursal}</span>
              ${estadoBadge}
            </div>
            <span class="text-muted small"><i class="fa-regular fa-calendar-days mr-1"></i> ${data.fecha} hrs</span>
          </div>

          <div class="row mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="small font-weight-bold text-muted d-block mb-1">Nombre del Remitente:</label>
              <h4 class="font-weight-bold text-dark mb-1" style="font-size: 20px;">${data.nombre}</h4>
              <span class="text-muted small"><i class="fa-solid fa-building mr-1"></i> ${data.empresa}</span>
            </div>

            <div class="col-md-6 text-md-right">
              <label class="small font-weight-bold text-muted d-block mb-1">Acciones Rápidas:</label>
              <a href="tel:${data.fono}" class="btn btn-sm btn-outline-info mr-1">
                <i class="fa-solid fa-phone mr-1"></i> Llamar (${data.fono})
              </a>
              <a href="mailto:${data.email}?subject=Respuesta a requerimiento EKSA: ${encodeURIComponent(data.asunto)}" class="btn btn-sm btn-outline-primary">
                <i class="fa-solid fa-envelope mr-1"></i> Responder
              </a>
            </div>
          </div>

          <div class="card p-3 mb-3 bg-light border-0" style="border-radius: 10px;">
            <div class="row">
              <div class="col-sm-6 mb-2 mb-sm-0">
                <strong class="d-block small text-muted">Correo Electrónico:</strong>
                <span class="font-weight-bold text-dark">${data.email}</span>
              </div>
              <div class="col-sm-6">
                <strong class="d-block small text-muted">Tipo de Requerimiento:</strong>
                <span class="font-weight-bold text-dark">${data.asunto}</span>
              </div>
            </div>
          </div>

          <div class="form-group mb-0">
            <label class="small font-weight-bold text-muted mb-2">Mensaje Completo / Consulta:</label>
            <div class="p-3 bg-white border rounded shadow-sm" style="min-height: 120px; white-space: pre-line; line-height: 1.6; font-size: 14px; color: #1e293b;">
              ${data.message}
            </div>
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

