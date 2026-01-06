# DIAGRAMA DE ARQUITECTURA: TEMA GEPETROL v2.1

## 1. ESTRUCTURA ACTUAL vs NUEVA

```
TEMA v2.0 (ACTUAL)                  TEMA v2.1 (PROPUESTO)
├── header.php                      ├── header.php (REFACTORIZADO)
├── footer.php                      │   ├── get_template_part('header/topbar')
├── index.php                       │   ├── get_template_part('header/navigation')
├── page.php                        │   └── get_template_part('head/seo')
├── single.php                      │
├── functions.php                   ├── footer.php (REFACTORIZADO)
├── style.css (v2.0)                │   └── get_template_part('footer/main')
│                                   │
├── inc/                            ├── index.php (SIN CAMBIOS)
│   ├── setup.php                   ├── page.php (SIN CAMBIOS)
│   ├── enqueues.php                ├── single.php (SIN CAMBIOS)
│   ├── functions-frontend.php      │
│   └── breadcrumb.php              ├── functions.php (MEJORADO)
│                                   ├── style.css (v2.1) ⭐ ACTUALIZAR
├── page-template/                  │
│   ├── _tpl-quienes-somos.php      ├── inc/
│   ├── tpl-contacto-pages.php      │   ├── setup.php
│   ├── tpl-seguros-empresas.php    │   ├── enqueues.php (ACTUALIZAR)
│   ├── tpl-seguros-particulares.php│   ├── functions-frontend.php
│   └── ... (7 archivos)            │   └── breadcrumb.php
│                                   │
├── template-parts/                 ├── page-template/
│   ├── slider/                     │   ├── _tpl-quienes-somos.php
│   ├── home/                       │   ├── tpl-contacto-pages.php
│   └── ... (3 carpetas)            │   ├── tpl-seguro-automovil.php ⭐ NEW
│                                   │   ├── tpl-mensaje-director.php ⭐ NEW
├── assets/                         │   ├── tpl-solicitar-presupuesto.php ⭐ NEW
│   ├── css/                        │   └── ... (total 13 templates)
│   ├── js/                         │
│   ├── fonts/                      ├── template-parts/ (EXPANDIDO)
│   └── images/                     │   ├── header/
│                                   │   │   ├── topbar.php ⭐ NEW
│                                   │   │   ├── navigation.php ⭐ NEW
│                                   │   │   └── seo.php ⭐ NEW
│                                   │   ├── footer/
│                                   │   │   └── main.php ⭐ NEW
│                                   │   ├── slider/
│                                   │   │   └── hero.php ⭐ NEW
│                                   │   └── ... (expandible)
│                                   │
└── templateHtml/ (PARA CONVERTIR) └── assets/ (SIN CAMBIOS)
    ├── config.php                      ├── css/
    ├── index.php                       ├── js/
    ├── pages/                          ├── fonts/
    ├── partials/                       └── images/
    └── assets/
```

---

## 2. FLUJO DE INTEGRACIÓN TemplateHtml → WordPress

```
┌─────────────────────────────────────────────────────┐
│       TEMPLATE HTML ANTIGUO                         │
│  /gepseguros/templateHtml/                          │
├─────────────────────────────────────────────────────┤
│                                                     │
│  pages/                          partials/          │
│  ├─ contacto.php        ─────→   ├─ head.php       │
│  ├─ empresas.php        ─────→   ├─ header.php     │
│  ├─ particulares.php    ─────→   ├─ footer.php     │
│  ├─ quienes-somos.php   ─────→   ├─ topbar.php     │
│  ├─ noticias.php        ─────→   ├─ slider.php     │
│  ├─ seguro-automovil.php─────→   └─ scripts.php    │
│  ├─ mensaje-director.php─────→                     │
│  ├─ estructura-organizativa.php                    │
│  └─ ... (13 páginas)                               │
│                                                     │
└────────────┬────────────────────────────────────────┘
             │ EXTRACCIÓN & REFACTORING
             ▼
┌─────────────────────────────────────────────────────┐
│    TEMA WORDPRESS v2.1 (MEJORADO)                   │
│  /gepseguros/                                       │
├─────────────────────────────────────────────────────┤
│                                                     │
│  COMPONENTES REUTILIZABLES                         │
│  template-parts/                                    │
│  ├─ header/          ◄─── (from templateHtml)      │
│  │  ├─ topbar.php                                  │
│  │  ├─ navigation.php                              │
│  │  └─ seo.php                                     │
│  ├─ footer/          ◄─── (from templateHtml)      │
│  │  └─ main.php                                    │
│  ├─ slider/          ◄─── (from templateHtml)      │
│  │  └─ hero.php                                    │
│  └─ content/ (expandible)                          │
│                                                     │
│  PLANTILLAS DE PÁGINA                              │
│  page-template/      ◄─── (from templateHtml)      │
│  ├─ tpl-contacto.php                               │
│  ├─ tpl-empresas.php                               │
│  ├─ tpl-seguro-automovil.php                       │
│  ├─ tpl-mensaje-director.php                       │
│  └─ ... (13 templates total)                       │
│                                                     │
│  ARCHIVOS CLAVE ACTUALIZADOS                       │
│  ├─ header.php       (integración de partials)     │
│  ├─ footer.php       (integración de partials)     │
│  ├─ style.css v2.1   ⭐ VERSIÓN NUEVA              │
│  ├─ functions.php    (hooks mejorados)             │
│  └─ inc/enqueues.php (assets consolidados)         │
│                                                     │
│  ASSETS CONSOLIDADOS                               │
│  assets/                                            │
│  ├─ css/             (CSS unificado de ambos)      │
│  ├─ js/              (JS unificado de ambos)       │
│  ├─ fonts/           (Nunito, Poppins)             │
│  └─ images/          (todas las imágenes)          │
│                                                     │
└─────────────────────────────────────────────────────┘
         ▲
         │ WordPress hooks & filters
         │ Redux Framework integration
         │ WP Core functionality
```

---

## 3. MAPEO DETALLADO DE COMPONENTES

### A. PARTIALS/HEADER.PHP → TEMPLATE-PARTS/HEADER/

```
templateHtml/partials/header.php
├─ HTML estructura básica
├─ Logo/Branding
├─ Navegación principal (navbar)
├─ Menú responsive
└─ Integración con Redux (opciones de header)

                    ⬇️ REFACTORING

template-parts/header/navigation.php
├─ Menú dinámico de WordPress
├─ Soporte para submúes
├─ Bootstrap navbar integration
└─ Redux options (logo, color scheme)

UBICACIÓN EN WORDPRESS:
<?php get_template_part( 'template-parts/header/navigation' ); ?>
```

### B. PARTIALS/TOPBAR.PHP → TEMPLATE-PARTS/HEADER/TOPBAR.PHP

```
templateHtml/partials/topbar.php
├─ Información de contacto
├─ Redes sociales
├─ Breadcrumbs
└─ CTA rápido

                    ⬇️ REFACTORING

template-parts/header/topbar.php
├─ Info dinámica desde Redux
├─ Widgets WordPress
├─ Breadcrumbs (using inc/breadcrumb.php)
└─ Customizable via WordPress admin
```

### C. PARTIALS/HEAD.PHP → TEMPLATE-PARTS/HEAD/SEO.PHP

```
templateHtml/partials/head.php
├─ Meta charset
├─ Meta viewport
├─ Title & meta description
├─ Open Graph tags
├─ JSON-LD schema
└─ Favicon

                    ⬇️ REFACTORING

template-parts/head/seo.php
├─ WP native title-tag support
├─ SEO plugin compatibility (Yoast/RankMath)
├─ Structured data (JSON-LD)
└─ Manifest & PWA ready
```

### D. PARTIALS/FOOTER.PHP → TEMPLATE-PARTS/FOOTER/MAIN.PHP

```
templateHtml/partials/footer.php
├─ Footer content
├─ Links útiles
├─ Newsletter signup
├─ Social links
└─ Copyright

                    ⬇️ REFACTORING

template-parts/footer/main.php
├─ WordPress widgets
├─ Custom footer menus
├─ Newsletter (Mailchimp integration)
├─ Social links from Redux
└─ Dynamic copyright year
```

### E. PARTIALS/SLIDER.PHP → TEMPLATE-PARTS/SLIDER/HERO.PHP

```
templateHtml/partials/slider.php
├─ Owl Carousel setup
├─ Slide content
├─ Navigation controls
├─ Text overlays
└─ CTA buttons

                    ⬇️ REFACTORING

template-parts/slider/hero.php
├─ Dinámico desde posts/custom post type
├─ Bootstrap carousel / Owl
├─ Redux customization
└─ Lazy loading images
```

---

## 4. FLUJO DE PLANTILLAS (TEMPLATE HIERARCHY)

```
WORDPRESS TEMPLATE HIERARCHY en v2.1:

Usuario accede a → /quienes-somos/
                    ⬇️
Busca plantilla en este orden:
  1. page-{slug}.php (page-quienes-somos.php)
  2. page-{id}.php
  3. page.php
  4. singular.php
  5. index.php

GEPETROL v2.1:
  1. page-template/_tpl-quienes-somos.php ⭐ ENCONTRADO
     ├─ Usa: header.php
     │       ├─ template-parts/header/topbar.php
     │       ├─ template-parts/header/navigation.php
     │       └─ template-parts/head/seo.php
     │
     ├─ Contenido personalizado (quiénes somos)
     │   └─ Campos dinámicos via Redux / ACF
     │
     └─ Usa: footer.php
             └─ template-parts/footer/main.php

FLUJO VISUAL:
┌─ header.php ─────────────────────────┐
│  │                                   │
│  ├─ template-parts/head/seo.php     │
│  ├─ template-parts/header/topbar.php│
│  └─ template-parts/header/navigation.php
├─ page-template/_tpl-quienes-somos.php
├─ footer.php ─────────────────────────┐
│  │                                   │
│  └─ template-parts/footer/main.php  │
└───────────────────────────────────────┘
```

---

## 5. MAPA DE ARCHIVOS A CREAR/MODIFICAR

```
CREAR (⭐ NEW):
├─ ANALISIS_MIGRACION_v2.1.md          ✅ CREADO
├─ ARQUITECTURA_v2.1.md                ✅ CREADO (este archivo)
├─ template-parts/header/topbar.php
├─ template-parts/header/navigation.php
├─ template-parts/header/seo.php
├─ template-parts/footer/main.php
├─ template-parts/slider/hero.php
├─ page-template/tpl-seguro-automovil.php
├─ page-template/tpl-mensaje-director.php
├─ page-template/tpl-solicitar-presupuesto.php
├─ page-template/tpl-estructura-organizativa.php
├─ page-template/tpl-trabaja-con-nosotros.php
└─ page-template/tpl-videos.php

MODIFICAR (📝 UPDATE):
├─ style.css                    (v2.0 → v2.1)
├─ header.php                   (integración partials)
├─ footer.php                   (integración partials)
├─ functions.php                (documentación mejorada)
├─ inc/enqueues.php             (revisar dependencies)
├─ page-template/_tpl-quienes-somos.php
├─ page-template/tpl-contacto-pages.php
├─ page-template/tpl-contacto-servicios.php
├─ page-template/tpl-gobierno-corporativo.php
├─ page-template/tpl-historia.php
├─ page-template/tpl-noticias.php
├─ page-template/tpl-seguros-empresas.php
└─ page-template/tpl-seguros-particulares.php

REFERENCIA (📖 REFERENCE):
└─ templateHtml/               (mantener como backup)
   ├─ pages/*.php
   ├─ partials/*.php
   └─ assets/
```

---

## 6. SECUENCIA DE INTEGRACIÓN RECOMENDADA

```
FASE 1: PREPARACIÓN
│
├─ 1.1: Crear rama 'develop/v2.1'
├─ 1.2: Backup de /gepseguros/
├─ 1.3: Documentar cambios (este documento)
└─ 1.4: Verificar integridad del código actual

FASE 2: ACTUALIZAR ARCHIVOS BASE
│
├─ 2.1: Actualizar style.css (v2.0 → v2.1)
├─ 2.2: Revisar functions.php
├─ 2.3: Revisar inc/enqueues.php
└─ 2.4: Testing: Verificar que nada rompa

FASE 3: CREAR COMPONENTES (TEMPLATE-PARTS)
│
├─ 3.1: Crear template-parts/header/
│       ├─ topbar.php
│       ├─ navigation.php
│       └─ seo.php
│
├─ 3.2: Crear template-parts/footer/
│       └─ main.php
│
├─ 3.3: Crear template-parts/slider/
│       └─ hero.php
│
└─ 3.4: Testing: Verificar componentes individuales

FASE 4: REFACTORIZAR ARCHIVOS PRINCIPALES
│
├─ 4.1: header.php
│       └─ Integrar get_template_part() calls
│
├─ 4.2: footer.php
│       └─ Integrar get_template_part() calls
│
└─ 4.3: Testing: Verificar header/footer en frontend

FASE 5: ACTUALIZAR/CREAR PAGE TEMPLATES
│
├─ 5.1: Revisar plantillas existentes
├─ 5.2: Crear nuevas plantillas (6 faltantes)
├─ 5.3: Integrar campos dinámicos (Redux)
└─ 5.4: Testing: Verificar cada página

FASE 6: CONSOLIDAR ASSETS
│
├─ 6.1: Revisar CSS (templateHtml vs /gepseguros/)
├─ 6.2: Revisar JS (templateHtml vs /gepseguros/)
├─ 6.3: Consolidar en enqueues.php
└─ 6.4: Testing: Verificar estilos y funcionalidad

FASE 7: TESTING INTEGRAL
│
├─ 7.1: Testing funcional (todas las páginas)
├─ 7.2: Testing responsive (mobile, tablet, desktop)
├─ 7.3: Testing SEO (meta tags, structured data)
├─ 7.4: Testing performance (speed, core web vitals)
├─ 7.5: Testing compatibilidad (navegadores)
└─ 7.6: Testing accesibilidad (WCAG 2.1)

FASE 8: DOCUMENTACIÓN & RELEASE
│
├─ 8.1: Actualizar README.md
├─ 8.2: Crear CHANGELOG.md
├─ 8.3: Versionar en Git
└─ 8.4: Release v2.1.0
```

---

## 7. CONSIDERACIONES TÉCNICAS

### Dependencias Actuales (v2.0):
- ✅ WordPress 5.x+ (verificar versión mínima)
- ✅ Bootstrap 5.3.3
- ✅ jQuery 3.6.4
- ✅ Owl Carousel 2
- ✅ Font Awesome (all.css)
- ✅ Redux Framework 4.x
- ✅ WOW.js (animaciones)
- ✅ FancyBox.js (galería)

### Librerías a Revisar en v2.1:
- ⚠️ Modernizar versiones (Bootstrap 5.3+, jQuery 3.7+)
- ⚠️ Considerar alternativas (Swiper en lugar de Owl Carousel)
- ⚠️ Eliminar jQuery si es posible (usar vanilla JS)
- ⚠️ Optimizar Google Fonts carga

### Compatibilidad:
- ✅ WordPress 6.x+
- ✅ PHP 8.0+
- ✅ Navegadores modernos (últimas 2 versiones)
- ✅ Mobile first approach
- ✅ WCAG 2.1 AA

---

## 8. CHECKLIST FINAL

```
PRE-DESARROLLO:
☐ Backup completo de /gepseguros/
☐ Crear rama develop/v2.1
☐ Revisar permisos de archivos (755 dirs, 644 files)
☐ Verificar espacio en servidor

DURANTE DESARROLLO:
☐ Crear archivos en orden (base → componentes → templates)
☐ Hacer commits atomicos al Git
☐ Verificar cada cambio en frontend
☐ Testear con Redux Framework

POST DESARROLLO:
☐ Verificar todas las páginas funcionan
☐ Validar HTML (W3C validator)
☐ Validar CSS (CSS validator)
☐ Testear formularios
☐ Verificar breadcrumbs
☐ Verificar navegación móvil
☐ Verificar SEO (Search Console)
☐ Verificar Core Web Vitals
☐ Testear en múltiples navegadores

RELEASE:
☐ Crear tag v2.1.0 en Git
☐ Actualizar CHANGELOG.md
☐ Hacer backup antes de actualizar producción
☐ Migrar a producción (staging → live)
☐ Monitorear errores en logs
```

---

**Documento creado:** 6 de enero de 2026  
**Versión:** 1.0  
**Estado:** 📋 Listo para implementación
