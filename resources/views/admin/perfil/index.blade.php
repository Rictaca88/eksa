@extends('admin.layouts.app')

@section('title', 'Mi Perfil de Usuario')
@section('page_title', 'Perfil de Usuario & Seguridad')

@section('content')

<div class="row">

  <!-- Columna Izquierda: Datos del Perfil y Cambio de Contraseña -->
  <div class="col-lg-6 mb-4">

    <!-- Tarjeta: Datos Básicos -->
    <div class="card-white mb-4">
      <div class="card-white-header">
        <h2 class="card-white-title">
          <i class="fa-solid fa-user-gear text-info mr-1"></i> Información Personal
        </h2>
      </div>

      <form action="{{ route('admin.perfil.update') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
          <label class="small font-weight-bold text-muted">Nombre Completo</label>
          <input type="text" name="name" class="form-control form-control-admin" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group mb-4">
          <label class="small font-weight-bold text-muted">Correo Electrónico de Acceso</label>
          <input type="email" name="email" class="form-control form-control-admin" value="{{ old('email', $user->email) }}" required>
          <small class="text-muted d-block mt-1">Este correo se utiliza para recibir notificaciones y códigos de respaldo.</small>
        </div>

        <button type="submit" class="btn btn-admin-primary">
          <i class="fa-solid fa-floppy-disk"></i> Guardar Cambios de Perfil
        </button>
      </form>
    </div>

    <!-- Tarjeta: Cambio de Contraseña -->
    <div class="card-white">
      <div class="card-white-header">
        <h2 class="card-white-title">
          <i class="fa-solid fa-key text-info mr-1"></i> Modificar Contraseña
        </h2>
      </div>

      <form action="{{ route('admin.perfil.password') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
          <label class="small font-weight-bold text-muted">Contraseña Actual</label>
          <input type="password" name="current_password" class="form-control form-control-admin" placeholder="••••••••" required>
        </div>

        <div class="form-group mb-3">
          <label class="small font-weight-bold text-muted">Nueva Contraseña (mínimo 8 caracteres)</label>
          <input type="password" name="password" class="form-control form-control-admin" placeholder="••••••••" required>
        </div>

        <div class="form-group mb-4">
          <label class="small font-weight-bold text-muted">Confirmar Nueva Contraseña</label>
          <input type="password" name="password_confirmation" class="form-control form-control-admin" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn btn-admin-primary">
          <i class="fa-solid fa-lock"></i> Actualizar Contraseña
        </button>
      </form>
    </div>

  </div>

  <!-- Columna Derecha: Panel de Control de MFA -->
  <div class="col-lg-6 mb-4">

    <div class="card-white h-100 d-flex flex-column justify-content-between">
      <div>
        <div class="card-white-header">
          <h2 class="card-white-title">
            <i class="fa-solid fa-shield-halved text-info mr-1"></i> Autenticación en Dos Pasos (MFA)
          </h2>
          @if($user->nivel == 2)
            <span class="badge badge-success px-3 py-1 font-weight-bold" style="font-size: 11px;">
              <i class="fa-solid fa-mobile-screen-button mr-1"></i> GOOGLE AUTH ACTIVO
            </span>
          @elseif($user->nivel == 1)
            <span class="badge badge-primary px-3 py-1 font-weight-bold" style="font-size: 11px;">
              <i class="fa-solid fa-envelope mr-1"></i> EMAIL OTP ACTIVO
            </span>
          @else
            <span class="badge badge-warning px-3 py-1 font-weight-bold text-dark" style="font-size: 11px;">
              <i class="fa-solid fa-circle-xmark mr-1"></i> INACTIVO
            </span>
          @endif
        </div>

        <!-- Caja de Estado MFA -->
        <div class="p-3 mb-4 rounded" style="background: {{ $user->nivel > 0 ? '#ecfdf5' : '#fffbeb' }}; border: 1px solid {{ $user->nivel > 0 ? '#a7f3d0' : '#fde68a' }};">
          <div class="d-flex align-items-start">
            <div class="mr-3 mt-1" style="font-size: 24px; color: {{ $user->nivel > 0 ? '#059669' : '#d97706' }};">
              <i class="fa-solid {{ $user->nivel > 0 ? 'fa-shield-check' : 'fa-triangle-exclamation' }}"></i>
            </div>
            <div>
              <h5 class="font-weight-bold mb-1" style="color: {{ $user->nivel > 0 ? '#065f46' : '#92400e' }}; font-size: 15px;">
                @if($user->nivel == 2)
                  Tu cuenta está protegida con Google Authenticator
                @elseif($user->nivel == 1)
                  Tu cuenta está protegida con código al correo
                @else
                  Aumenta la seguridad de tu acceso
                @endif
              </h5>
              <p class="mb-0 small" style="color: {{ $user->nivel > 0 ? '#047857' : '#78350f' }}; line-height: 1.5;">
                @if($user->nivel == 2)
                  Cada vez que inicies sesión deberás ingresar el código dinámico generado en tiempo real por la app <strong>Google Authenticator</strong> en tu dispositivo móvil.
                @elseif($user->nivel == 1)
                  Cada vez que inicies sesión se enviará un código numérico de 6 dígitos a tu correo registrado <strong>{{ $user->email }}</strong>.
                @else
                  Configura Google Authenticator en tu celular para proteger tu cuenta contra accesos no autorizados mediante códigos dinámicos de un solo uso.
                @endif
              </p>
            </div>
          </div>
        </div>

        <!-- Explicación de Google Authenticator -->
        <h6 class="font-weight-bold text-dark mb-2">
          <i class="fa-brands fa-google text-primary mr-1"></i> Google Authenticator (Método Recomendado)
        </h6>
        <ul class="text-muted small pl-3 mb-4" style="line-height: 1.8;">
          <li>Genera códigos dinámicos de 6 dígitos de alta seguridad directamente en tu teléfono móvil.</li>
          <li>Funciona de forma instantánea sin necesidad de esperar correos ni SMS, incluso sin conexión a internet.</li>
          <li>Compatible con <strong>Google Authenticator</strong>, Microsoft Authenticator y Authy.</li>
        </ul>

      </div>

      <div class="pt-3 border-top">
        @if($user->nivel > 0)
          <div class="d-flex flex-column gap-2" style="gap: 10px;">
            @if($user->nivel == 2)
              <button type="button" class="btn btn-outline-primary btn-block font-weight-bold py-2 btn-open-totp-modal" style="border-radius: 8px;">
                <i class="fa-solid fa-qrcode mr-1"></i> Reconfigurar / Cambiar Dispositivo Móvil
              </button>
            @else
              <button type="button" class="btn btn-admin-primary btn-block py-2 btn-open-totp-modal" style="border-radius: 8px; justify-content: center;">
                <i class="fa-solid fa-mobile-screen-button mr-1"></i> Mejorar a Google Authenticator (Recomendado)
              </button>
            @endif

            <!-- Botón para Desactivar MFA -->
            <button type="button" class="btn btn-outline-danger btn-block font-weight-bold py-2 mt-2" data-toggle="modal" data-target="#modalDesactivarMfa" style="border-radius: 8px;">
              <i class="fa-solid fa-shield-xmark mr-1"></i> Desactivar Autenticación en Dos Pasos
            </button>
          </div>
        @else
          <!-- Botón Principal: Configurar Google Authenticator -->
          <button type="button" class="btn btn-admin-primary btn-block py-2 btn-open-totp-modal" style="border-radius: 8px; justify-content: center;">
            <i class="fa-solid fa-mobile-screen-button mr-1"></i> Configurar Google Authenticator (Recomendado)
          </button>

          <!-- Opción secundaria: MFA por Correo -->
          <div class="text-center mt-3">
            <form action="{{ route('admin.perfil.mfa.send') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-link text-muted small p-0 text-decoration-none">
                <i class="fa-solid fa-envelope mr-1"></i> O activar mediante código por correo electrónico
              </button>
            </form>
          </div>
        @endif
      </div>
    </div>

  </div>

</div>

<!-- MODAL: Configuración Paso a Paso de Google Authenticator -->
<div class="modal fade" id="modalSetupTotp" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 50px rgba(0,0,0,0.25);">
      
      <div class="modal-header" style="background: var(--eksa-navy); color: #ffffff; border-top-left-radius: 16px; border-top-right-radius: 16px;">
        <h5 class="modal-title font-weight-bold" style="font-size: 16px;">
          <i class="fa-solid fa-shield-halved mr-2 text-info"></i> Vincular Google Authenticator
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>

      <form action="{{ route('admin.perfil.totp.confirm') }}" method="POST">
        @csrf

        <div class="modal-body p-4">
          
          <div class="row">
            
            <!-- Columna Izquierda: Pasos 1 y 2 -->
            <div class="col-md-7 border-right pr-md-4">
              
              <!-- Paso 1: Descargar App -->
              <div class="mb-4">
                <div class="d-flex align-items-center mb-2">
                  <span class="badge badge-primary rounded-circle mr-2 d-inline-flex align-items-center justify-content-center" style="width: 24px; height: 24px; background: var(--eksa-navy); font-size: 12px;">1</span>
                  <h6 class="font-weight-bold text-dark mb-0">Descarga la app en tu teléfono</h6>
                </div>
                <p class="small text-muted mb-2 pl-4">Si aún no la tienes, descárgala gratis desde tu tienda de aplicaciones:</p>
                <div class="pl-4 d-flex flex-wrap gap-2" style="gap: 8px;">
                  <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-dark" style="border-radius: 8px; font-size: 12px;">
                    <i class="fa-brands fa-google-play mr-1 text-success"></i> Google Play (Android)
                  </a>
                  <a href="https://apps.apple.com/app/google-authenticator/id388497605" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-dark" style="border-radius: 8px; font-size: 12px;">
                    <i class="fa-brands fa-app-store-ios mr-1 text-primary"></i> App Store (iOS)
                  </a>
                </div>
              </div>

              <!-- Paso 2: Escanear QR -->
              <div class="mb-2">
                <div class="d-flex align-items-center mb-2">
                  <span class="badge badge-primary rounded-circle mr-2 d-inline-flex align-items-center justify-content-center" style="width: 24px; height: 24px; background: var(--eksa-navy); font-size: 12px;">2</span>
                  <h6 class="font-weight-bold text-dark mb-0">Escanea el Código QR</h6>
                </div>
                <p class="small text-muted mb-2 pl-4">Abre Google Authenticator, pulsa <strong>"+"</strong> y selecciona <strong>"Escanear código QR"</strong>:</p>
                
                <div class="pl-4">
                  <div class="text-center p-2 bg-light rounded mb-2 border" style="display: inline-block;">
                    <div id="totpQrLoading" class="py-4 px-5 text-muted">
                      <i class="fa-solid fa-spinner fa-spin fa-2x text-info"></i>
                      <div class="small mt-2 font-weight-bold">Generando código seguro...</div>
                    </div>
                    <img id="totpQrImage" src="" alt="Código QR Google Authenticator" style="display: none; width: 180px; height: 180px;" class="rounded">
                  </div>

                  <div class="mt-2">
                    <small class="text-muted d-block font-weight-bold">¿No puedes escanear el QR? Usa esta clave secreta:</small>
                    <div class="input-group input-group-sm mt-1" style="max-width: 280px;">
                      <input type="text" id="totpSecretText" class="form-control font-weight-bold bg-white text-dark text-center" readonly style="letter-spacing: 2px; font-family: monospace; font-size: 13px;">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="btnCopySecret" title="Copiar al portapapeles">
                          <i class="fa-regular fa-copy"></i>
                        </button>
                      </div>
                    </div>
                    <small id="copySuccessMsg" class="text-success small font-weight-bold d-none mt-1">¡Clave copiada al portapapeles!</small>
                  </div>
                </div>
              </div>

            </div>

            <!-- Columna Derecha: Paso 3 (Confirmar con Código) -->
            <div class="col-md-5 pl-md-4 d-flex flex-column justify-content-center mt-4 mt-md-0">
              <div class="text-center">
                <div class="d-flex align-items-center justify-content-center mb-2">
                  <span class="badge badge-primary rounded-circle mr-2 d-inline-flex align-items-center justify-content-center" style="width: 24px; height: 24px; background: var(--eksa-navy); font-size: 12px;">3</span>
                  <h6 class="font-weight-bold text-dark mb-0">Verifica el código</h6>
                </div>
                
                <p class="small text-muted mb-3">
                  Ingresa el código numérico de <strong>6 dígitos</strong> que aparece en la app para tu cuenta EKSA:
                </p>

                <div class="form-group mb-3">
                  <input type="text" name="code" class="form-control text-center font-weight-bold" placeholder="123456" maxlength="6" pattern="\d{6}" style="font-size: 28px; letter-spacing: 8px; height: 56px; border-radius: 12px; border: 2px solid #cbd5e1; color: var(--eksa-navy);" required autocomplete="off">
                </div>

                <div class="alert alert-info py-2 small mb-3 text-left" style="border-radius: 8px; font-size: 12px;">
                  <i class="fa-solid fa-circle-info mr-1"></i> El código de la aplicación se actualiza automáticamente cada 30 segundos.
                </div>

                <button type="submit" class="btn btn-admin-primary btn-block py-2 font-weight-bold" style="border-radius: 10px; justify-content: center;">
                  <i class="fa-solid fa-circle-check mr-1"></i> Activar Google Authenticator
                </button>
              </div>
            </div>

          </div>

        </div>

        <div class="modal-footer bg-light" style="border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal para Confirmar Activación de MFA por Correo (Alternativa) -->
<div class="modal fade" id="modalConfirmarMfaEmail" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 15px 40px rgba(0,0,0,0.2);">
      <div class="modal-header" style="background: var(--eksa-navy); color: #ffffff; border-top-left-radius: 16px; border-top-right-radius: 16px;">
        <h5 class="modal-title font-weight-bold" style="font-size: 16px;">
          <i class="fa-solid fa-envelope mr-2 text-info"></i> Confirmar Activación por Correo
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <form action="{{ route('admin.perfil.mfa.confirm') }}" method="POST">
        @csrf
        <div class="modal-body p-4 text-center">
          <p class="small text-muted mb-3">
            Hemos enviado un código numérico de 6 dígitos a <strong>{{ $user->email }}</strong>. Ingrésalo a continuación para confirmar la activación:
          </p>

          <div class="form-group mb-3">
            <input type="text" name="code" class="form-control text-center font-weight-bold" placeholder="123456" maxlength="6" pattern="\d{6}" style="font-size: 26px; letter-spacing: 8px; height: 52px; border-radius: 10px;" required autofocus>
            <small class="text-muted d-block mt-2">Código válido por 10 minutos</small>
          </div>
        </div>
        <div class="modal-footer bg-light" style="border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-admin-primary btn-sm">Confirmar y Activar MFA por Correo</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal para Desactivar MFA -->
<div class="modal fade" id="modalDesactivarMfa" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 15px 40px rgba(0,0,0,0.2);">
      <div class="modal-header bg-danger text-white" style="border-top-left-radius: 16px; border-top-right-radius: 16px;">
        <h5 class="modal-title font-weight-bold" style="font-size: 16px;">
          <i class="fa-solid fa-shield-xmark mr-2"></i> Desactivar Doble Factor de Seguridad
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <form action="{{ route('admin.perfil.mfa.deactivate') }}" method="POST">
        @csrf
        <div class="modal-body p-4">
          <p class="small text-muted mb-3">
            Para desactivar el Doble Factor (MFA), por favor confirma tu contraseña actual de acceso:
          </p>

          <div class="form-group mb-2">
            <label class="small font-weight-bold text-muted">Contraseña Actual</label>
            <input type="password" name="password_confirm" class="form-control form-control-admin" placeholder="••••••••" required autofocus>
          </div>
        </div>
        <div class="modal-footer bg-light" style="border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger btn-sm font-weight-bold">Confirmar Desactivación</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
  $(document).ready(function () {
    
    // Abrir modal de Google Authenticator y cargar datos QR vía AJAX
    $('.btn-open-totp-modal').on('click', function () {
      $('#modalSetupTotp').modal('show');
      $('#totpQrLoading').show();
      $('#totpQrImage').hide();
      $('#totpSecretText').val('');
      $('#copySuccessMsg').addClass('d-none');

      $.ajax({
        url: "{{ route('admin.perfil.totp.setup') }}",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}"
        },
        success: function (res) {
          if (res.success) {
            $('#totpQrImage').attr('src', res.qr_url).on('load', function () {
              $('#totpQrLoading').hide();
              $('#totpQrImage').show();
            });
            $('#totpSecretText').val(res.formatted_secret);
            $('#totpSecretText').data('raw-secret', res.secret);
          }
        },
        error: function () {
          alert('Hubo un error al generar los datos de configuración. Por favor intenta de nuevo.');
          $('#modalSetupTotp').modal('hide');
        }
      });
    });

    // Copiar clave secreta manual al portapapeles
    $('#btnCopySecret').on('click', function () {
      const secret = $('#totpSecretText').data('raw-secret') || $('#totpSecretText').val();
      if (secret) {
        navigator.clipboard.writeText(secret.replace(/\s+/g, '')).then(function () {
          $('#copySuccessMsg').removeClass('d-none');
          setTimeout(function () {
            $('#copySuccessMsg').addClass('d-none');
          }, 3000);
        });
      }
    });

    @if(session('mfa_modal_open'))
      $('#modalConfirmarMfaEmail').modal('show');
    @endif

    @if(session('totp_modal_open'))
      $('.btn-open-totp-modal').trigger('click');
    @endif

  });
</script>
@endsection
