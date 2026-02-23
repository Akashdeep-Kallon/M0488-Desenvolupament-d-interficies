# Memoria técnica — Proyecto Monogatarya

## Portada
- **Asignatura:** Desenvolupament d'interfícies
- **Proyecto:** Sitio web responsive Monogatarya
- **Fecha:** 2026-02-23
- **Integrantes del grupo:**
  - Integrante 1
  - Integrante 2
  - Integrante 3

## Funcionalidades implementadas
- Página de inicio con acceso a login y registro.
- Login único para todos los usuarios.
- Registro separado por tipo de usuario (lector y promotor).
- Página de perfil de usuario y perfil de promotor.
- Catálogo de animes y mangas con paginación por anclas.
- Página de información de eventos (consulta y gestión).
- Navegación global entre todas las páginas desde el menú lateral.

## Diseño responsive
### Resoluciones trabajadas
- **Móvil:** hasta 480px.
- **Tablet:** hasta 768px.
- **Escritorio:** más de 768px.

### Cambios por resolución
- **Móvil:** simplificación de cabeceras, menú lateral a ancho completo, botones compactos y tipografía reducida.
- **Tablet:** reorganización de bloques con menor separación y elementos de cabecera adaptados.
- **Escritorio:** distribución completa con cabecera amplia, buscador visible y layouts extendidos.

### Capturas por resolución
> Nota: en entorno de automatización no fue posible generar capturas con el navegador integrado por limitación de conexión al contenedor de navegador.
- Captura móvil: `start/start.html` (390x844).
- Captura tablet: `start/start.html` (768x1024).
- Captura escritorio: `start/start.html` (1440x900).

## Estructura HTML semántica
Se ha reforzado el uso de etiquetas estructurales en las páginas principales:
- `header`: cabecera superior con branding y navegación.
- `nav`: navegación por enlaces de menú.
- `main`: contenido principal de cada vista.
- `section`: bloques lógicos de contenido (catálogo, formularios, galerías).
- `article`: piezas de contenido agrupado (perfil, portada de inicio).
- `footer`: pie de página en la home.

Esta estructura organiza el contenido de forma clara para accesibilidad, mantenimiento y evaluación académica.

## Accesibilidad aplicada
- Inclusión de `alt` en imágenes relevantes del proyecto.
- Asociación de `label` con campos de formularios (login y registros).
- Uso de clase `sr-only` para mantener etiquetas accesibles sin alterar el estilo visual.
- Mejora de patrones de validación mínima para contraseñas.

## Navegación y enlaces
- Verificación de enlaces internos y rutas relativas del proyecto.
- Menú lateral operativo en páginas internas.
- Enlaces de entrada/salida de sesión y cambio entre vistas funcionales.

## Mejoras técnicas aplicadas
- Normalización de estructura HTML para evitar cierres fuera de orden.
- Ajustes responsive en `start/start.css` y formularios de autenticación.
- Corrección de paginación eliminando enlace a página inexistente en catálogos.
- Conservación de la identidad visual original (paleta, tipografía, componentes y jerarquía visual).

