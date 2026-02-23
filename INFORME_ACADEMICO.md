# Informe académico — Proyecto Monogatarya

## Portada
- **Proyecto:** Rediseño y corrección técnica web de Monogatarya
- **Fecha:** 2026-02-23
- **Integrantes:**
  - Integrante 1
  - Integrante 2

## Explicación del responsive
Se implementó un sistema de 3 niveles:
- **Escritorio (>=1025px):** contenedor central máximo 1180px, layout en columnas y tarjetas.
- **Tablet (601px–1024px):** los grids de 3 columnas pasan a 2; perfiles y eventos reducen densidad visual.
- **Móvil (<=600px):** se apilan columnas, tarjetas a 1 columna, formularios en vertical y escalado de imágenes.

## Explicación de etiquetas estructurales
Se reforzó el uso semántico con:
- `<header>` para cabecera fija y navegación principal.
- `<main>` como contenido principal por página.
- `<section>` para bloques temáticos.
- `<article>` para piezas autónomas (cards/eventos).
- `<aside>` para datos complementarios del evento.
- `<footer>` en la landing pública.

## Descripción de funcionalidades
- Login unificado.
- Registro de lector y de promotor con validación HTML5.
- Página inicial con hero + tarjetas.
- Perfil (usuario/promotor) en panel con avatar + formulario.
- Catálogo de animes y mangas con tarjetas enlazadas.
- Página de detalle de evento editorial (contenido + aside estructurado).
- Formulario de creación de eventos para promotor.
- Navegación global entre inicio, perfil, catálogo, eventos y cierre de sesión.

## Validación técnica
- Header y menú lateral preservados sin cambios funcionales.
- Sistema visual único: container + card + grid + formularios reutilizables.
- HTML semántico y mejoras de accesibilidad base (alt, labels, jerarquía de headings).
