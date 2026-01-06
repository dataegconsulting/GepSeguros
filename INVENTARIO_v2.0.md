# INVENTARIO DETALLADO: GEPSEGUROS THEME v2.0

**Fecha de análisis:** 6 de enero de 2026  
**Versión tema:** 2.0  
**Framework:** Redux Framework  
**Última actualización:** (pendiente de verificar git log)

---

## 📂 ESTRUCTURA COMPLETA DEL TEMA

### 🏠 RAÍZ DEL TEMA (/gepseguros/)

#### Archivos PHP Principales:

| Archivo | Líneas | Descripción | Estado |
|---------|--------|-------------|--------|
| **style.css** | 295 | Metadatos del tema + CSS inline (variables root) | ✅ Activo |
| **functions.php** | 448 | Carga de módulos, Redux, Google Fonts, hooks | ✅ Activo |
| **header.php** | 281 | HTML head + navegación principal | ✅ Activo |
| **footer.php** | ~150 | Pie de página (no especificado líneas) | ✅ Activo |
| **index.php** | ~50 | Home con template-parts (get_header/footer) | ✅ Activo |
| **page.php** | ~50 | Página estándar de WordPress | ✅ Activo |
| **single.php** | ~50 | Vista de post individual | ✅ Activo |
| **tag.php** | ~50 | Página de etiquetas | ✅ Activo |
| **404.php** | ~50 | Página de error 404 | ✅ Activo |
| **searchform-popup.php** | ~50 | Formulario de búsqueda popup | ✅ Activo |
| **sidebar.php** | ~50 | Barra lateral / widgets | ✅ Activo |
| **sitemap.xml** | variable | Sitemap XML estático | ✅ Presente |
| **error_log** | variable | Log de errores PHP | ⚠️ Revisar |

#### Total Raíz: **13 archivos principales**

---

### 🔧 CARPETA: /inc/ (Configuración & Funciones)

#### Estructura:
```
inc/
├─ setup.php                              (191 líneas) ✅
├─ enqueues.php                           (232+ líneas) ✅
├─ functions-frontend.php                 (~líneas) ✅
├─ breadcrumb.php                         (~líneas) ✅
└─ redux-framework/
   ├─ options-init.php                    (~líneas) ✅
   ├─ css/                                (directorio)
   ├─ js/                                 (directorio)
   └─ extensions/                         (directorio)
```

#### Detalles de inc/:

**setup.php** (191 líneas):
- `gepetrolseguros_setup()`: Carga textdomain, soportes tema (thumbnails, title-tag, etc.)
- `set_post_thumbnail_size(1200, 675, true)`
- Registro de menús
- Soporte para logo personalizado (custom-logo)
- Tamaños de imagen adicionales

**enqueues.php** (232+ líneas):
- Carga CSS: Bootstrap, FontAwesome, Flaticon, Owl, FancyBox, WOW, Nice-select, etc.
- Carga JS: jQuery 3.6.4, Bootstrap, Owl, Isotope, WOW, FancyBox, Custom scripts
- Cache busting basado en versión del tema
- `gepetrolseguros_enqueue_assets()`: Función principal

**functions-frontend.php**:
- Helpers y funciones para frontend
- Shortcodes personalizados (si los hay)
- Filtros para output dinámico

**breadcrumb.php**:
- Función para generar migas de pan
- Integración con WordPress

**redux-framework/options-init.php**:
- Configuración del panel de opciones Redux
- Campos personalizados para el tema
- Paleta de colores, opciones de header/footer, etc.

#### Total inc/: **4 archivos + subdirectorios Redux**

---

### 📄 CARPETA: /page-template/ (Plantillas de Página)

```
page-template/
├─ _tpl-quienes-somos.php                 Plantilla "Quiénes somos"
├─ tpl-contacto-pages.php                 Plantilla "Contacto" (versión páginas)
├─ tpl-contacto-servicios.php             Plantilla "Contacto" (versión servicios)
├─ tpl-gobierno-corporativo.php           Plantilla "Gobierno corporativo"
├─ tpl-historia.php                       Plantilla "Historia"
├─ tpl-noticias.php                       Plantilla "Noticias"
├─ tpl-seguros-empresas.php               Plantilla "Seguros para empresas"
└─ tpl-seguros-particulares.php           Plantilla "Seguros para particulares"
```

**Total page-template/: 8 archivos existentes**

**Plantillas faltantes** (según TemplateHtml):
- [ ] tpl-seguro-automovil.php
- [ ] tpl-mensaje-director.php
- [ ] tpl-estructura-organizativa.php
- [ ] tpl-solicitar-presupuesto.php
- [ ] tpl-trabaja-con-nosotros.php
- [ ] tpl-videos.php

**Total esperado en v2.1: 14 templates**

---

### 🎨 CARPETA: /assets/ (Recursos estáticos)

#### /assets/css/ (Estilos)

```
assets/css/
├─ bootstrap.css                          (3.7KB aprox)
├─ bootstrap.min.css                      (versión minificada)
├─ bootstrap - copia.css                  (backup, eliminar en v2.1)
│
├─ animate.css                            (Animate.js - animaciones)
├─ owl.css                                (Owl Carousel 2)
├─ nice-select.css                        (Nice Select - custom select)
├─ jquery.fancybox.min.css                (FancyBox - lightbox)
│
├─ font-awesome-all.css                   (Font Awesome icons)
├─ flaticon.css                           (Custom icon font)
├─ fonts.css                              (Definición de fuentes)
│
├─ gepetrolseguros.css                    ✅ CSS PRINCIPAL (personalizado)
├─ global.css                             ✅ CSS GLOBAL
├─ responsive.css                         ✅ Media queries
│
├─ jquery.mCustomScrollbar.min.css        (Custom scrollbar)
├─ switcher-style.css                     (Color switcher)
├─ rtl.css                                (Soporte RTL)
│
└─ color/                                 (Variantes de color)
   ├─ (múltiples variantes)
   └─ (color-switching functionality)
```

**Total CSS: ~20 archivos**

#### /assets/js/ (Scripts)

```
assets/js/
├─ LIBRERÍAS CORE:
│  ├─ jquery-3.6.4.min.js                (jQuery versión 3.6.4)
│  ├─ jquery.min.js                      (jQuery alternativo)
│  ├─ jquery.js                          (jQuery versión normal)
│  └─ bootstrap.min.js                   (Bootstrap 5)
│
├─ PLUGINS & LIBRERÍAS:
│  ├─ owl.js / owl.min.js                (Owl Carousel 2)
│  ├─ isotope.js                         (Isotope - filtrado)
│  ├─ wow.js / wow.min.js                (WOW.js - scroll animations)
│  ├─ appear.js                          (Appear.js - elemento visible)
│  ├─ paroller.js                        (Parallax effects)
│  ├─ jquery.paroller.min.js             (Parallax - minificado)
│  ├─ jquery.fancybox.js                 (FancyBox - lightbox)
│  ├─ jquery.nice-select.min.js          (Nice Select)
│  ├─ jquery.mCustomScrollbar.min.js     (Custom scrollbar)
│  ├─ jquery.mousewheel.min.js           (Mousewheel support)
│  └─ popper.min.js                      (Popper.js - posicionamiento)
│
├─ CSS THEMES/COLOR SWITCHING:
│  ├─ jQuery.style.switcher.min.js       (Color scheme switcher)
│
├─ CUSTOM SCRIPTS:
│  ├─ gepetrolseguros.js                 ✅ SCRIPT PRINCIPAL
│  ├─ script.js                          ✅ SCRIPTS GLOBALES
│  ├─ nav-tool.js                        ✅ Herramientas navegación
│  ├─ validation.js                      ✅ Validación formularios
│  ├─ gmaps.js                           ✅ Google Maps integration
│  ├─ map-helper.js                      ✅ Helper para maps
│  ├─ scrollbar.js                       ✅ Custom scrollbar setup
│  ├─ pagenav.js                         ✅ Paginación
│  └─ (posiblemente más scripts sin documentar)
```

**Total JS: ~25 archivos**

#### /assets/fonts/ (Fuentes)

```
assets/fonts/
├─ (fuentes custom del tema)
├─ (posiblemente iconos en formato fuente)
```

#### /assets/fonts-web/ (Fuentes web descargadas)

```
assets/fonts-web/
├─ nunito/
│  ├─ nunito-regular.ttf/otf/woff
│  ├─ nunito-bold.ttf/otf/woff
│  └─ (múltiples variantes)
│
└─ poppins/
   ├─ poppins-regular.ttf/otf/woff
   ├─ poppins-semibold.ttf/otf/woff
   └─ (múltiples variantes)
```

#### /assets/images/ (Imágenes)

```
assets/images/
├─ background/                           (imágenes de fondo)
├─ banner/                               (banners principales)
├─ icons/                                (iconografía)
├─ resource/                             (recursos generales)
└─ shape/                                (formas SVG/PNG)

assets/img/
├─ (directorio separado de images/)
├─ favicon.png
├─ apple-touch-icon.png
├─ (otras imágenes generales)
```

**Total assets/: CSS + JS + Fonts + Images**

---

### 🎯 CARPETA: /template-parts/ (Componentes reutilizables)

```
template-parts/
├─ header/                               (componentes de encabezado)
│
├─ home/                                 (componentes específicos de home)
│  ├─ seguro-coche.php
│  ├─ site-services.php
│  ├─ site-plan.php
│  ├─ youtube.php
│  └─ site-contact.php
│
├─ services/                             (componentes de servicios)
│
└─ slider/                               (componentes slider)
   └─ (componentes slider)
```

**Estado actual:** Carpeta utilizada pero no completamente documentada.  
**En v2.1:** Se expandirá significativamente.

---

### 📦 CARPETA: /ReduxFramework/ (Plugin Redux)

```
ReduxFramework/
├─ redux-framework.php                   (archivo principal del plugin)
├─ class-redux-framework-plugin.php
├─ composer.json / package.json          (dependencias)
├─ gulpfile.js / webpack.mix.js          (build tools)
├─ CHANGELOG.md, README.md, license.txt
│
├─ redux-core/                           (núcleo de Redux)
├─ redux-templates/                      (plantillas Redux)
├─ ReduxCore/                            (directorio de core)
│
├─ extendify-sdk/                        (SDK de Extendify)
│  ├─ bootstrap.php
│  ├─ app/
│  ├─ webpack.mix.js
│  └─ (múltiples subdirectorios)
│
├─ sample/                               (ejemplos de uso)
├─ wpml-config.xml                       (soporte WPML)
└─ (múltiples archivos de configuración)
```

**Estado:** Plugin Redux Framework instalado como subDirectorio.  
**Nota:** Revisar si debe ser un plugin independiente en /wp-content/plugins/.

---

### 🌐 CARPETA: /templateHtml/ (Template Antiguo - A CONVERTIR)

#### Estructura Completa:

```
templateHtml/
│
├─ 📄 config.php                         (~50 líneas)
│  └─ Configuración de rutas y URL base
│
├─ 📄 index.php                          (857 líneas)
│  └─ Página principal HTML renderizada con PHP
│
├─ 📄 _index.html                        (1511 líneas)
│  └─ Versión HTML pura (sin PHP dinámico)
│
├─ 📁 pages/                             (13 archivos)
│  ├─ contacto.php                       Página de contacto
│  ├─ empresas.php                       Seguros para empresas
│  ├─ estructura-organizativa.php        Estructura organizativa
│  ├─ mensaje-director.php               Mensaje del director
│  ├─ noticias.php                       Noticias / blog
│  ├─ nuestra-historia.php               Historia de la empresa
│  ├─ particulares.php                   Seguros para particulares
│  ├─ quienes-somos.php                  Quiénes somos
│  ├─ seguro-automovil.php               Seguro de automóvil
│  ├─ single.php                         Página de detalle única
│  ├─ solicitar-presupuesto.php          Solicitar presupuesto
│  ├─ trabaja-con-nosotros.php           Trabaja con nosotros
│  └─ videos.php                         Videos
│
├─ 📁 partials/                          (6 archivos)
│  ├─ head.php                           (~50 líneas) Meta tags, SEO
│  ├─ header.php                         (~líneas) Navegación principal
│  ├─ footer.php                         (~líneas) Pie de página
│  ├─ topbar.php                         (~líneas) Barra superior
│  ├─ slider.php                         (~líneas) Slider/Carousel
│  └─ scripts.php                        (~líneas) Scripts finales
│
├─ 📁 assets/
│  ├─ css/                               (estilos)
│  ├─ js/                                (scripts)
│  ├─ img/                               (imágenes)
│  └─ fonts/                             (fuentes)
│
├─ 📁 .vscode/                           (configuración VS Code)
│
└─ 📁 pages/                             (directorio adicional, revisar)
```

#### Análisis de páginas TemplateHtml:

**13 páginas identificadas en /pages/:**
1. ✅ **contacto.php** - Formulario de contacto
2. ✅ **empresas.php** - Soluciones empresariales
3. ✅ **estructura-organizativa.php** - Organigrama/estructura
4. ✅ **mensaje-director.php** - Mensaje director general
5. ✅ **noticias.php** - Listado de noticias/blog
6. ✅ **nuestra-historia.php** - Historia de la empresa
7. ✅ **particulares.php** - Soluciones para particulares
8. ✅ **quienes-somos.php** - About us
9. ✅ **seguro-automovil.php** - Detalle seguro automóvil
10. ✅ **single.php** - Página detalle genérica
11. ✅ **solicitar-presupuesto.php** - Formulario presupuesto
12. ✅ **trabaja-con-nosotros.php** - Careers / Trabaja con nosotros
13. ✅ **videos.php** - Galería de videos

#### Análisis de componentes TemplateHtml:

**6 partials identificados en /partials/:**
1. ✅ **head.php** (~50 líneas)
   - Meta charset, viewport
   - Title, meta description
   - Open Graph tags
   - CSS links (Bootstrap, custom)
   - Favicon

2. ✅ **header.php**
   - Logo/Branding
   - Navegación principal (navbar)
   - Menú responsive
   - Integración topbar

3. ✅ **footer.php**
   - Links útiles
   - Social links
   - Newsletter
   - Copyright

4. ✅ **topbar.php**
   - Información de contacto (teléfono, email)
   - Redes sociales
   - Breadcrumbs
   - CTA rápido

5. ✅ **slider.php**
   - Owl Carousel hero
   - Slide content
   - Navigation controls
   - Text overlays

6. ✅ **scripts.php**
   - Scripts finales
   - jQuery plugins
   - Custom initialization

---

## 📊 ESTADÍSTICAS GENERALES

### Conteo de Archivos:

```
Raíz del tema:          13 archivos PHP
inc/:                   4 archivos + subdirs Redux
page-template/:         8 templates (esperado 14 en v2.1)
template-parts/:        ?archivos (no completamente documentado)
assets/css/:            ~20 archivos CSS
assets/js/:             ~25 archivos JS
assets/fonts/:          múltiples fuentes
assets/images/:         múltiples imágenes
ReduxFramework/:        plugin completo (múltiples archivos)
templateHtml/:          13 páginas + 6 partials + assets

TOTAL APROXIMADO: 150+ archivos
```

### Líneas de Código (LOC):

```
style.css:              295 líneas
functions.php:          448 líneas
header.php:             281 líneas
footer.php:             ~150 líneas
inc/setup.php:          191 líneas
inc/enqueues.php:       232+ líneas
templateHtml/index.php: 857 líneas
templateHtml/_index.html: 1511 líneas

TOTAL APROX: 3.965+ líneas (solo PHP/HTML principal)
```

### Dependencias Externas:

```
✅ WordPress 5.x+
✅ Bootstrap 5.3.3
✅ jQuery 3.6.4
✅ Owl Carousel 2
✅ Font Awesome (complete)
✅ Flaticon (custom)
✅ WOW.js (scroll animations)
✅ Animate.css
✅ FancyBox.js (lightbox)
✅ Nice Select (custom dropdown)
✅ Isotope (filtering)
✅ Redux Framework 4.x
✅ Google Fonts (Nunito, Poppins)
✅ Paroller.js (parallax)
✅ Custom Scrollbar
```

---

## 🔍 ANÁLISIS DE CALIDAD

### Puntos Fuertes:
- ✅ Estructura modular (carpetas bien organizadas)
- ✅ CSS separado en componentes (global, responsive, color)
- ✅ JS modular (scripts separados por funcionalidad)
- ✅ Uso de Redux Framework para opciones personalizables
- ✅ Template parts para reutilización
- ✅ Fuentes web incluidas localmente
- ✅ SEO básico implementado

### Áreas a Mejorar:
- ⚠️ jQuery 3.6.4 (considerar actualizar a 3.7+)
- ⚠️ Bootstrap 5.3.3 (verificar si es última)
- ⚠️ Duplicación de código en CSS (bootstrap - copia.css)
- ⚠️ Múltiples archivos JS no documentados
- ⚠️ error_log presente (revisar y limpiar)
- ⚠️ TemplateHtml duplicado (consolidar)
- ⚠️ RTL.css presente (¿necesario?)
- ⚠️ Color switcher complejo (revisar uso)
- ⚠️ Documentación en código insuficiente

### Seguridad:
- ⚠️ Revisar sanitización de inputs en formularios
- ⚠️ Revisar nonces en formularios
- ⚠️ Revisar permisos de archivos (CHMOD)
- ⚠️ Actualizar Redux Framework a última versión

### Performance:
- ⚠️ Múltiples jQuery includes (consolidar)
- ⚠️ CSS múltiples (consolidar/minificar)
- ⚠️ JS múltiples (consolidar/minificar)
- ⚠️ Google Fonts usar preload/prefetch
- ⚠️ Imágenes optimizadas/lazy-loading

---

## 📋 CHECKLIST PARA v2.1

### Actualización Requerida:
- [ ] jQuery 3.7.1 (de 3.6.4)
- [ ] Bootstrap 5.3.5 (verificar última)
- [ ] Redux Framework (última versión)
- [ ] Google Fonts (optimizar carga)
- [ ] Font Awesome (verificar versión)

### Eliminación:
- [ ] bootstrap - copia.css (archivo duplicado)
- [ ] error_log (si está vacío o viejo)
- [ ] rtl.css (si no es necesario)
- [ ] Code duplication en archivos

### Optimización:
- [ ] Consolidar CSS en 1-2 archivos
- [ ] Consolidar JS en 1-2 archivos
- [ ] Minificar CSS/JS en producción
- [ ] Lazy loading de imágenes
- [ ] Preload de recursos críticos

### Documentación:
- [ ] Crear README.md detallado
- [ ] Crear CHANGELOG.md
- [ ] Documentar hooks y filtros
- [ ] Documentar Redux options
- [ ] Crear INSTALL.md

---

## 🎯 PRÓXIMOS PASOS

1. **Inmediato:** Revisar git log para historial de cambios
2. **Inmediato:** Hacer backup completo (ZIP/Git)
3. **FASE 1:** Crear rama develop/v2.1
4. **FASE 2:** Iniciar migraciones según ARQUITECTURA_v2.1.md
5. **FASE 3:** Testing integral
6. **FASE 4:** Release v2.1.0

---

**Análisis completado:** 6 de enero de 2026  
**Versión inventario:** 1.0  
**Estado:** ✅ Listo para implementación de v2.1
