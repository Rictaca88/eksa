# Auditoría Inicial del Proyecto - EKSA Comercial

**Fecha:** 28 de Agosto de 2026
**Auditor:** Bibliotecario / Ingeniero de IA
**Estado del Repositorio:** Activo / Producción

---

## 1. Resumen Ejecutivo
El proyecto **EKSA Comercial** (`ekascomercial`) es una plataforma web corporativa desarrollada sobre el framework **Laravel** (PHP). Su propósito principal es servir como portal institucional y comercial para la empresa **EKSA Comercial**, facilitando la presentación de servicios/productos y la captación de prospectos mediante formularios de contacto integrados con bases de datos y notificaciones por correo electrónico.

---

## 2. Stack Tecnológico

### Backend
- **Framework:** Laravel 8.54+ (PHP ^7.3 | ^8.0)
- **Autenticación / API:** Laravel Sanctum 2.11
- **Cliente HTTP:** GuzzleHttp 7.0.1
- **Motor de Plantillas:** Blade
- **Testing:** PHPUnit 9.5.8, Mockery 1.4

### Frontend
- **Compilador de Assets:** Laravel Mix 6.0.6 (Webpack)
- **CSS / Preprocesamiento:** PostCSS 8.1.14
- **Librerías JS:** Axios 0.21, Lodash 4.17.19

### Base de Datos & Almacenamiento
- **Motor:** MySQL / MariaDB (con soporte preparado para conexión a servicios externos)
- **Caché y Hosting:** Configurado para rutas de servidor Linux/cPanel (`/home/eksacomercial/public_html/cache`).

---

## 3. Arquitectura y Componentes Clave

### Rutas (`routes/web.php`)
- `GET /` -> Renderiza la vista `index2` (Landing page / Home corporativo).
- `POST /contacto` -> Invoca a `ContactoController@store` para procesar formularios de contacto.

### Controladores y Lógica de Negocio (`app/Http/Controllers/`)
- **`ContactoController`**:
  - Recibe solicitudes de contacto.
  - Guarda los datos a través de `ContactoModel::ContactoGuardar()`.
  - Dispara correos electrónicos con la vista `email.blade.php` hacia el buzón corporativo (`rsoto@eksacomercial.cl` desde `contacto@eksacomercial.cl`).
  - Contiene código para integración con APIs externas (ej. HRnet / PostgreSQL).

### Modelos (`app/Models/`)
- **`ContactoModel`**: Maneja la inserción de registros en la tabla `contactos`.
- **`User`**: Modelo estándar de autenticación de usuarios.
- **`Util`**: Utilidad auxiliar para depuración y ejecución de consultas SQL.

---

## 4. Hallazgos y Oportunidades de Mejora

1. **Seguridad en Consultas SQL (Prioridad Alta):**
   En `ContactoModel.php`, la inserción de registros se realiza concatenando parámetros directamente en una cadena SQL (`insert into contactos ...`). Se recomienda migrar a sentencias preparadas con bindings (`DB::insert(...)`) o utilizar el ORM Eloquent (`ContactoModel::create(...)`) para prevenir riesgos de inyección SQL.

2. **Control de Versiones:**
   El directorio del proyecto contiene archivos de configuración de Git (`.gitignore`, `.gitattributes`), aunque no se detectó el árbol `.git` local en este directorio específico. Se preserva `/.brain` en `.gitignore` para no interferir con futuros despliegues.

3. **Validación de Formularios:**
   Implementar `FormRequest` en Laravel para validar y sanitizar los campos entrantes (`nombre`, `email`, `fono`, `asunto`, `mensaje`) antes de procesarlos en el controlador.
