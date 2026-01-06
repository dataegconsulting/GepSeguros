# ANÁLISIS DE MIGRACIÓN: GEPETROL SEGUROS THEME v2.0 → v2.1

**Fecha:** 6 de enero de 2026  
**Objetivo:** Transformar el template antiguo (TemplateHtml) en la nueva versión del tema WordPress v2.1

---

## 📋 ESTRUCTURA ACTUAL (v2.0)

### A. Tema WordPress (Principal)
- **Versión actual:** 2.0
- **Motor:** WordPress + Redux Framework
- **Ubicación:** `/gepseguros/`

#### Archivos Raíz:
```
style.css              ✅ Metadatos del tema (v2.0)
functions.php         ✅ Funciones principales y carga de módulos
header.php            ✅ Encabezado HTML + navegación
footer.php            ✅ Pie de página
index.php             ✅ Página principal (Home)
page.php              ✅ Páginas estándar
single.php            ✅ Entradas individuales
tag.php               ✅ Páginas de etiquetas
404.php               ✅ Página de error 404
searchform-popup.php  ✅ Formulario de búsqueda popup
sidebar.php           ✅ Barra lateral
```

#### Carpeta `/inc/` (Configuraciones & Funciones)
```
setup.php                    ✅ Setup WordPress (soportes, menús, tamaños imagen)
enqueues.php               ✅ Cola de CSS/JS (versión 2.0)
functions-frontend.php     ✅ Helpers y funciones frontend
breadcrumb.php             ✅ Migas de pan
redux-framework/           ✅ Configuración opciones Redux
  └─ options-init.php
  └─ css/, js/, extensions/
```

#### Carpeta `/assets/` (Recursos)
```
css/
  ├─ bootstrap.min.css, bootstrap.css
  ├─ animate.css, owl.css, nice-select.css
  ├─ gepetrolseguros.css      ✅ Estilos principales (personalizado)
  ├─ global.css               ✅ Estilos globales
  ├─ responsive.css           ✅ Media queries
  ├─ color/                   ✅ Variantes de color (color switcher)
  └─ (otros: fontawesome, flaticon, etc.)

js/
  ├─ jquery-3.6.4.min.js, jquery.min.js
  ├─ bootstrap.min.js
  ├─ gepetrolseguros.js       ✅ JS principal personalizado
  ├─ script.js                ✅ Scripts globales
  ├─ owl.js, isotope.js, wow.js
  ├─ nav-tool.js              ✅ Herramientas de navegación
  ├─ validation.js            ✅ Validación de formularios
  └─ (otros: appear.js, paroller.js, etc.)

fonts-web/
  ├─ nunito/
  └─ poppins/

images/
  ├─ background/
  ├─ banner/
  ├─ icons/
  ├─ resource/
  └─ shape/
```

#### Carpeta `/page-template/` (Plantillas de Página)
```
_tpl-quienes-somos.php             ✅ Quiénes somos
tpl-contacto-pages.php             ✅ Contacto (páginas)
tpl-contacto-servicios.php         ✅ Contacto (servicios)
tpl-gobierno-corporativo.php       ✅ Gobierno corporativo
tpl-historia.php                   ✅ Historia
tpl-noticias.php                   ✅ Noticias
tpl-seguros-empresas.php           ✅ Seguros para empresas
tpl-seguros-particulares.php       ✅ Seguros para particulares
```

#### Carpeta `/template-parts/` (Componentes reutilizables)
```
header/
home/
  ├─ seguro-coche.php
  ├─ site-services.php
  ├─ site-plan.php
  ├─ youtube.php
  └─ site-contact.php
services/
slider/
```

---

### B. Template HTML Antiguo (Para Convertir)
- **Ubicación:** `/gepseguros/templateHtml/`
- **Tipo:** HTML estático + PHP básico
- **Estado:** Template de referencia para integración

#### Estructura:
```
templateHtml/
├─ config.php                  ✅ Config de rutas y URL base
├─ index.php                   ✅ Página principal (857 líneas)
├─ _index.html                 ✅ Versión HTML pura
│
├─ pages/                      ✅ Páginas individuales
│  ├─ contacto.php
│  ├─ empresas.php
│  ├─ estructura-organizativa.php
│  ├─ mensaje-director.php
│  ├─ noticias.php
│  ├─ nuestra-historia.php
│  ├─ particulares.php
│  ├─ quienes-somos.php
│  ├─ seguro-automovil.php
│  ├─ single.php
│  ├─ solicitar-presupuesto.php
│  ├─ trabaja-con-nosotros.php
│  └─ videos.php
│
├─ partials/                   ✅ Componentes reutilizables
│  ├─ head.php
│  ├─ header.php
│  ├─ footer.php
│  ├─ topbar.php
│  ├─ slider.php
│  └─ scripts.php
│
└─ assets/                     ✅ Recursos (CSS, JS, IMG)
   ├─ css/
   ├─ js/
   ├─ img/
   └─ fonts/
```

---

## 🎯 OBJETIVO DE LA MIGRACIÓN v2.1

### Metas Principales:
1. ✅ **Integrar contenido de `templateHtml`** en el tema WordPress v2.0
2. ✅ **Crear componentes reutilizables** (template-parts)
3. ✅ **Actualizar versión a 2.1** en `style.css`
4. ✅ **Mantener compatibilidad** con Redux Framework
5. ✅ **Optimizar estructura** para mejor mantenibilidad
6. ✅ **Asegurar SEO** y accesibilidad
7. ✅ **Modernizar assets** (CSS/JS)

---

## 📊 MATRIZ DE TRANSFORMACIÓN

### Páginas a Integrar (TemplateHtml → WordPress):

| Página TemplateHtml | → | Template WordPress v2.1 | Tipo |
|-------------------|---|------------------------|------|
| `pages/contacto.php` | → | `page-template/tpl-contacto.php` (existente) | Page Template |
| `pages/empresas.php` | → | `page-template/tpl-seguros-empresas.php` (existente) | Page Template |
| `pages/particulares.php` | → | `page-template/tpl-seguros-particulares.php` (existente) | Page Template |
| `pages/quienes-somos.php` | → | `page-template/tpl-quienes-somos.php` (existente) | Page Template |
| `pages/nuestra-historia.php` | → | `page-template/tpl-historia.php` (existente) | Page Template |
| `pages/noticias.php` | → | `page-template/tpl-noticias.php` (NEW) | Archive Page |
| `pages/seguro-automovil.php` | → | `page-template/tpl-seguro-automovil.php` (NEW) | Page Template |
| `pages/estructura-organizativa.php` | → | `page-template/tpl-estructura-organizativa.php` (NEW) | Page Template |
| `pages/mensaje-director.php` | → | `page-template/tpl-mensaje-director.php` (NEW) | Page Template |
| `pages/single.php` | → | `single.php` (HOME) | WordPress Single |
| `pages/solicitar-presupuesto.php` | → | `page-template/tpl-solicitar-presupuesto.php` (NEW) | Page Template |
| `pages/trabaja-con-nosotros.php` | → | `page-template/tpl-trabaja-con-nosotros.php` (NEW) | Page Template |
| `pages/videos.php` | → | `page-template/tpl-videos.php` (NEW) | Page Template |

### Componentes a Crear (Partials):

| TemplateHtml Partial | → | Template-Parts v2.1 | Descripción |
|--------------------|---|-------------------|-------------|
| `partials/head.php` | → | `template-parts/head/seo.php` | SEO meta tags |
| `partials/header.php` | → | `template-parts/header/navigation.php` | Navegación principal |
| `partials/topbar.php` | → | `template-parts/header/topbar.php` | Barra superior |
| `partials/slider.php` | → | `template-parts/slider/hero.php` | Hero slider |
| `partials/footer.php` | → | `template-parts/footer/main.php` | Pie de página |
| `partials/scripts.php` | → | `enqueues.php` (actualizar) | Scripts finales |

---

## 🔧 CAMBIOS NECESARIOS EN ARCHIVOS CLAVE

### 1. **style.css** (Actualizar Versión)
```css
Version: 2.0  →  Version: 2.1
```

### 2. **header.php** (WordPress)
- Integrar topbar de templateHtml
- Mejorar SEO meta tags (desde `head.php` de templateHtml)
- Mantener funcionalidad Redux

### 3. **footer.php** (WordPress)
- Actualizar estructura con componentes de `partials/footer.php`
- Añadir enlaces y widgets según templateHtml

### 4. **functions.php** (WordPress)
- Revisar enqueues.php para compatibilidad con assets de templateHtml
- Añadir nuevos hooks/filtros para componentes

### 5. **inc/enqueues.php**
- Actualizar rutas de CSS/JS si cambian
- Verificar versiones de librerías (Bootstrap, jQuery, etc.)
- Añadir nuevos assets de templateHtml si es necesario

### 6. **Crear nuevas carpetas en template-parts/**
```
template-parts/
├─ header/
│  ├─ topbar.php (from templateHtml/partials/topbar.php)
│  ├─ navigation.php (from templateHtml/partials/header.php)
│  └─ seo.php (from templateHtml/partials/head.php)
├─ footer/
│  └─ main.php (from templateHtml/partials/footer.php)
├─ slider/
│  └─ hero.php (from templateHtml/partials/slider.php)
└─ (expandir según componentes necesarios)
```

---

## 📝 PLAN DE ACCIÓN PASO A PASO

### FASE 1: Preparación (Sin cambios destructivos)
- [ ] Crear rama de desarrollo para v2.1
- [ ] Hacer backup de archivos actuales
- [ ] Documentar cambios (este archivo)

### FASE 2: Análisis Detallado
- [ ] Extraer lógica específica de `templateHtml/pages/*.php`
- [ ] Mapear contenido dinámico vs estático
- [ ] Identificar campos Redux a usar en templates

### FASE 3: Actualización Base
- [ ] Actualizar `style.css` a v2.1
- [ ] Refactorizar `header.php` con nuevos componentes
- [ ] Actualizar `footer.php`
- [ ] Revisar `functions.php`

### FASE 4: Crear Componentes (template-parts/)
- [ ] `template-parts/header/topbar.php`
- [ ] `template-parts/header/navigation.php`
- [ ] `template-parts/footer/main.php`
- [ ] `template-parts/slider/hero.php`
- [ ] Otros componentes según necesidad

### FASE 5: Crear/Actualizar Page Templates
- [ ] Revisar templates existentes en `/page-template/`
- [ ] Crear nuevos templates para páginas faltantes
- [ ] Integrar campos dinámicos (Redux)

### FASE 6: Assets (CSS/JS)
- [ ] Consolidar CSS de templateHtml en `gepetrolseguros.css`
- [ ] Consolidar JS de templateHtml en `gepetrolseguros.js`
- [ ] Actualizar referencias en `enqueues.php`

### FASE 7: Testing & QA
- [ ] Verificar funcionalidad de cada página
- [ ] Testing responsive
- [ ] SEO checks
- [ ] Performance checks

---

## 🎨 RECOMENDACIONES ADICIONALES

### Para v2.1:
1. **Sistema de Componentes:** Crear base reutilizable en template-parts/
2. **CSS Modular:** Organizar CSS por componentes (BEM + SMACSS)
3. **Variables CSS:** Expandir `:root {}` en style.css para tema customizable
4. **Accesibilidad:** Revisar WCAG 2.1 (especialmente contraste de colores)
5. **Performance:**
   - Lazy loading de imágenes
   - Minificación de CSS/JS
   - Optimizar web fonts (Nunito, Poppins)
6. **PWA:** Considerar manifest.json y service worker
7. **Internacionalización:** Mantener textdomain 'gepetrol' actualizado

---

## 📚 REFERENCIAS

- **Tema Actual:** `/gepseguros/`
- **Template Antiguo:** `/gepseguros/templateHtml/`
- **Redux Framework:** `/gepseguros/ReduxFramework/`
- **Documentación WordPress:** https://developer.wordpress.org/themes/
- **Bootstrap 5:** https://getbootstrap.com/docs/5.3/

---

**Estado:** ✅ Análisis completado  
**Próximo paso:** Ejecutar FASE 1 (Preparación)
