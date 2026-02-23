# Memoria del proyecto · Monogatarya

## Portada
- **Asignatura:** Desenvolupament d'interfícies
- **Proyecto:** Sitio web responsive de manga/anime
- **Fecha:** 2026-02-23
- **Integrantes del grupo:**
  - Integrante 1 (coordinación)
  - Integrante 2 (frontend)
  - Integrante 3 (documentación y QA)

## 1) Funcionalidades implementadas
- Página inicial con contenido destacado y navegación global.
- Perfil de usuario lector.
- Perfil de usuario promotor.
- Página pública de información de evento.
- Página de gestión de evento para promotor.
- Catálogos de animes y mangas.
- Flujo de acceso con:
  - **1 login único** para ambos tipos de usuario.
  - **2 registros independientes** (lector y promotor).

## 2) Diseño responsive
### Resoluciones objetivo
- **Móvil:** hasta 480px.
- **Tablet:** de 481px a 768px.
- **Escritorio:** más de 768px.

### Cómo cambia el diseño
- Tipografía escalable mediante `clamp()` y ajuste de `html { font-size }`.
- Menú superior adaptable con wrap y distribución vertical en tablet/móvil.
- Uso de `grid` y `flex` para reorganizar bloques:
  - Home: hero de 2 columnas a 1 columna.
  - Catálogo: 3 → 2 → 1 columna.
  - Perfil/evento: 2 columnas a 1 columna.
- Imágenes fluidas con `max-width: 100%` y `height: auto`.

### Capturas por resolución
**Móvil (375x812)**  
![Home móvil](browser:/tmp/codex_browser_invocations/c58c53dfe52415f5/artifacts/docs/screenshots/home-mobile.png)

**Tablet (768x1024)**  
![Home tablet](browser:/tmp/codex_browser_invocations/c58c53dfe52415f5/artifacts/docs/screenshots/home-tablet.png)

**Escritorio (1366x768)**  
![Home escritorio](browser:/tmp/codex_browser_invocations/c58c53dfe52415f5/artifacts/docs/screenshots/home-desktop.png)

## 3) Estructura HTML semántica
En todas las páginas se emplean etiquetas estructurales:
- `header`: cabecera con marca y navegación.
- `nav`: menú principal.
- `main`: contenido principal de cada vista.
- `section` y `article`: agrupación temática y contenido modular.
- `aside`: metadatos del evento.
- `footer`: pie común informativo.

Esto facilita accesibilidad, mantenimiento y comprensión de la jerarquía del documento.

## 4) Accesibilidad aplicada
- Todas las imágenes incluyen `alt` descriptivo.
- Formularios con `label` explícito asociado por `for/id`.
- Validaciones HTML nativas (`required`, `pattern`, `minlength`, `type`).
- Jerarquía consistente de headings (`h1` único de marca y títulos de sección).

## 5) Navegación y enlaces
- Menú coherente y disponible en todas las páginas principales.
- Enlaces entre inicio, perfiles, catálogos y eventos.
- Salida a pantalla de inicio (logout académico) desde la home.
- Verificación de enlaces internos sin rutas rotas.

## 6) Organización del código
- Separación clara por vistas y estilos:
  - `start/*` para acceso y registro.
  - `main/*` para área principal.
  - `main/main.css` como base reusable.
  - CSS específico por módulo (`index.css`, `user.css`, `catalogo.css`, `event.css`).
- Nombres de clases coherentes y legibles.

## 7) Requisitos evaluables
Este documento describe explícitamente todas las funcionalidades implementadas para que sean evaluables según la rúbrica.
