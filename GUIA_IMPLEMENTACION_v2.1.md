# GUÍA DE IMPLEMENTACIÓN: TEMA GEPSEGUROS v2.1

**Fecha inicio:** 6 de enero de 2026  
**Versión guía:** 1.0  
**Objetivo:** Transformar Tema v2.0 → v2.1 integrando TemplateHtml

---

## 📋 TABLA DE CONTENIDOS

1. [Preparación Inicial](#preparación-inicial)
2. [FASE 1: Setup y Backup](#fase-1-setup-y-backup)
3. [FASE 2: Actualizar Archivos Base](#fase-2-actualizar-archivos-base)
4. [FASE 3: Crear Template-Parts](#fase-3-crear-template-parts)
5. [FASE 4: Refactorizar Header/Footer](#fase-4-refactorizar-headerfooter)
6. [FASE 5: Crear Page Templates](#fase-5-crear-page-templates)
7. [FASE 6: Consolidar Assets](#fase-6-consolidar-assets)
8. [FASE 7: Testing](#fase-7-testing)
9. [FASE 8: Release](#fase-8-release)

---

## PREPARACIÓN INICIAL

### Prerequisitos:
- [ ] Acceso SSH/FTP a servidor MAMP
- [ ] Git instalado y configurado
- [ ] Editor de código (VS Code, PhpStorm, etc.)
- [ ] Navegadores para testing (Chrome, Firefox, Safari)
- [ ] Client de base de datos (phpMyAdmin, MySQL Workbench)

### Herramientas recomendadas:
```bash
# Testing
- WP-CLI para WordPress desde terminal
- PhpCodeSniffer para estándares WordPress
- Lighthouse para performance
- WAVE para accesibilidad

# Desarrollo
- Git hooks para pre-commit validation
- Webpack/Vite para bundling CSS/JS
- Prettier para code formatting
- ESLint para JS linting
```

---

## FASE 1: SETUP Y BACKUP

### Paso 1.1: Crear rama de desarrollo

```bash
# En terminal, ubicarse en raíz del tema
cd /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros

# Verificar rama actual
git status

# Crear rama develop/v2.1
git checkout -b develop/v2.1

# Configurar upstream (si trabajas en equipo)
git push -u origin develop/v2.1
```

### Paso 1.2: Backup local completo

```bash
# Opción 1: ZIP (Recomendado)
cd /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/
zip -r gepseguros_v2.0_backup_$(date +%Y%m%d).zip gepseguros/

# Opción 2: TAR
tar -czf gepseguros_v2.0_backup_$(date +%Y%m%d).tar.gz gepseguros/

# Opción 3: Git tag (Recomendado si usas Git)
cd gepseguros/
git tag -a v2.0.0 -m "Backup before v2.1 migration"
git push origin v2.0.0
```

### Paso 1.3: Revisar estructura actual

```bash
# Contar archivos
find . -type f -not -path '*/\.*' | wc -l

# Ver árbol estructura
tree -L 3 -I 'node_modules|ReduxFramework' 

# Verificar permisos
ls -la | head -20
```

### Paso 1.4: Documentar estado actual

```bash
# Crear archivo de estado
touch MIGRACION_LOG.md

# Agregar contenido inicial:
# # Migración v2.0 → v2.1
# Fecha inicio: 6 de enero de 2026
# Rama: develop/v2.1
# Estado: INICIADO
```

---

## FASE 2: ACTUALIZAR ARCHIVOS BASE

### Paso 2.1: Actualizar style.css

**Archivo:** `/Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/style.css`

**Cambio:**
```css
/*
Theme Name: GepetrolSeguros
Theme URI: https://gepetrolseguros.gq
Author: Filiberto Mba Obama - DATA EG 
Author URI: https://dataeg.com
Description: Seguros de coches, vidas sald...
Version: 2.0           ← ACTUALIZAR A:
License:
- GNU General Public License v2 or later
License URI:
- http://www.gnu.org/licenses/gpl-2.0.html

Text Domain: gepetrol
*/
```

Cambiar a:
```css
/*
Theme Name: GepetrolSeguros
Theme URI: https://gepetrolseguros.gq
Author: Filiberto Mba Obama - DATA EG 
Author URI: https://dataeg.com
Description: Tema WordPress moderno y responsivo para seguros con componentes reutilizables y Redux Framework integration.
Version: 2.1           ← VERSIÓN NUEVA
Requires at least: 5.9
Requires PHP: 8.0
License:
- GNU General Public License v2 or later
License URI:
- http://www.gnu.org/licenses/gpl-2.0.html

Text Domain: gepetrol
Domain Path: /languages/
*/
```

**Commit:**
```bash
git add style.css
git commit -m "chore: actualizar versión a v2.1 en style.css"
```

### Paso 2.2: Revisar functions.php

**Ubicación:** `/Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/functions.php`

**Acciones:**
- Revisar que todos los includes estén presentes
- Verificar que la versión se lee correctamente de style.css
- No hacer cambios aún, solo revisar

```php
// En functions.php, verificar:
$theme   = wp_get_theme();
$version = $theme->get( 'Version' ); // Debe ser 2.1 ahora
```

### Paso 2.3: Revisar inc/enqueues.php

**Ubicación:** `/Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/inc/enqueues.php`

**Revisar:**
- [ ] Bootstrap versión (actualizar si es necesario)
- [ ] jQuery versión (actualizar si es necesario)
- [ ] Rutas de archivos CSS/JS
- [ ] Orden de dependencias

**Próximamente:** Actualizar versiones de librerías (FASE 6)

### Paso 2.4: Commit cambios FASE 2

```bash
git add .
git commit -m "chore(v2.1): actualización archivo base style.css"
git status  # Verificar que todo está limpio
```

---

## FASE 3: CREAR TEMPLATE-PARTS

### Paso 3.1: Crear estructura de directorios

```bash
# Ubicarse en raíz del tema
cd /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros

# Crear directorios necesarios
mkdir -p template-parts/header
mkdir -p template-parts/footer
mkdir -p template-parts/slider
mkdir -p template-parts/content

# Verificar estructura
tree template-parts/
```

### Paso 3.2: Crear template-parts/header/seo.php

Este archivo contendrá meta tags y SEO.

**Origen:** `templateHtml/partials/head.php`

**Crear archivo:**
```bash
touch template-parts/header/seo.php
```

**Contenido:**
```php
<?php
/**
 * Template Part: Header SEO Meta Tags
 * 
 * Incluye: meta tags, Open Graph, structured data
 * 
 * @package GepetrolSeguros
 * @subpackage Template Parts
 * @since 2.1
 */

// Evitar acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Datos para meta tags (pueden venir del contexto)
global $post;
$page_title       = get_the_title() ?: bloginfo( 'name' );
$page_description = get_the_excerpt() ?: get_bloginfo( 'description' );
$page_image       = get_the_post_thumbnail_url() ?: '';

?>

<!-- Meta tags SEO -->
<meta name="description" content="<?php echo esc_attr( $page_description ); ?>" />

<?php if ( ! empty( $page_image ) ) : ?>
    <meta property="og:image" content="<?php echo esc_url( $page_image ); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
<?php endif; ?>

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php bloginfo( 'name' ); ?>",
    "url": "<?php echo esc_url( home_url() ); ?>",
    "logo": "<?php echo esc_url( get_theme_mod( 'custom_logo_url' ) ?: get_template_directory_uri() . '/assets/images/logo.png' ); ?>",
    "description": "<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>"
}
</script>
```

**Commit:**
```bash
git add template-parts/header/seo.php
git commit -m "feat(template-parts): crear header/seo.php para meta tags y SEO"
```

### Paso 3.3: Crear template-parts/header/topbar.php

Barra superior con info de contacto.

**Crear archivo:**
```bash
touch template-parts/header/topbar.php
```

**Contenido:**
```php
<?php
/**
 * Template Part: Header Topbar
 * 
 * Barra superior con información de contacto y redes sociales
 * 
 * @package GepetrolSeguros
 * @subpackage Template Parts
 * @since 2.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Obtener opciones del panel Redux (si existen)
$phone   = get_option( 'gepetrol_phone', '+240 XXX XXX XXX' );
$email   = get_option( 'gepetrol_email', 'info@gepetrol-seguros.com' );
$address = get_option( 'gepetrol_address', 'Malabo, Guinea Ecuatorial' );

?>

<div class="topbar bg-dark text-light py-2">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Info contacto -->
            <div class="col-md-6 small">
                <?php if ( ! empty( $phone ) ) : ?>
                    <i class="fas fa-phone"></i> 
                    <a href="tel:<?php echo esc_attr( str_replace( ' ', '', $phone ) ); ?>" class="text-light">
                        <?php echo esc_html( $phone ); ?>
                    </a>
                <?php endif; ?>
                
                <?php if ( ! empty( $email ) ) : ?>
                    <span class="mx-2">|</span>
                    <i class="fas fa-envelope"></i> 
                    <a href="mailto:<?php echo esc_attr( $email ); ?>" class="text-light">
                        <?php echo esc_html( $email ); ?>
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Redes sociales -->
            <div class="col-md-6 text-md-end">
                <a href="https://facebook.com" class="text-light me-3" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://twitter.com" class="text-light me-3" target="_blank" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com" class="text-light me-3" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://linkedin.com" class="text-light" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</div>
```

**Commit:**
```bash
git add template-parts/header/topbar.php
git commit -m "feat(template-parts): crear header/topbar.php con info contacto y redes"
```

### Paso 3.4: Crear template-parts/header/navigation.php

Navegación principal.

**Crear archivo:**
```bash
touch template-parts/header/navigation.php
```

**Contenido:**
```php
<?php
/**
 * Template Part: Header Navigation
 * 
 * Barra de navegación principal con menú de WordPress
 * 
 * @package GepetrolSeguros
 * @subpackage Template Parts
 * @since 2.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container-fluid">
        <!-- Logo / Brand -->
        <a class="navbar-brand fw-bold" href="<?php echo esc_url( home_url() ); ?>">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo esc_html( get_bloginfo( 'name' ) );
            }
            ?>
        </a>
        
        <!-- Toggle button (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'navbar-nav ms-auto',
                'container'      => false,
                'fallback_cb'    => 'wp_page_menu',
                'depth'          => 3,
                'walker'         => new Bootstrap_Walker_Nav_Menu(),
            ) );
            ?>
        </div>
    </div>
</nav>
```

**Nota:** Necesitaremos crear `Bootstrap_Walker_Nav_Menu` en una clase separada o usar un walker existente.

**Commit:**
```bash
git add template-parts/header/navigation.php
git commit -m "feat(template-parts): crear header/navigation.php con menú WordPress"
```

### Paso 3.5: Crear template-parts/footer/main.php

Pie de página.

**Crear archivo:**
```bash
touch template-parts/footer/main.php
```

**Contenido (básico):**
```php
<?php
/**
 * Template Part: Footer Main
 * 
 * Pie de página con widgets, links y copyright
 * 
 * @package GepetrolSeguros
 * @subpackage Template Parts
 * @since 2.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<footer class="footer bg-dark text-light py-5">
    <div class="container">
        <div class="row mb-5">
            <!-- Column 1: Acerca de -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3">Acerca de Gepetrol</h5>
                <p class="small">
                    <?php echo esc_html( get_bloginfo( 'description' ) ); ?>
                </p>
            </div>
            
            <!-- Column 2: Links útiles -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3">Enlaces Útiles</h5>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'list-unstyled small',
                    'container'      => false,
                    'fallback_cb'    => 'footer_menu_fallback',
                ) );
                ?>
            </div>
            
            <!-- Column 3: Seguros -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3">Nuestros Seguros</h5>
                <ul class="list-unstyled small">
                    <li><a href="<?php echo esc_url( home_url( '/seguros-automovil' ) ); ?>" class="text-light text-decoration-none">Seguros Automóvil</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/seguros-salud' ) ); ?>" class="text-light text-decoration-none">Seguros de Salud</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/seguros-hogar' ) ); ?>" class="text-light text-decoration-none">Seguros de Hogar</a></li>
                </ul>
            </div>
            
            <!-- Column 4: Contacto -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3">Contacto</h5>
                <p class="small mb-0">
                    <?php echo esc_html( get_option( 'gepetrol_address', 'Malabo, Guinea Ecuatorial' ) ); ?>
                </p>
                <p class="small">
                    <a href="tel:<?php echo esc_attr( str_replace( ' ', '', get_option( 'gepetrol_phone', '+240 000 000 000' ) ) ); ?>" class="text-light">
                        <?php echo esc_html( get_option( 'gepetrol_phone', '+240 000 000 000' ) ); ?>
                    </a>
                </p>
            </div>
        </div>
        
        <!-- Copyright -->
        <hr class="bg-light">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="small mb-0">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?> 
                    <strong><?php bloginfo( 'name' ); ?></strong>. 
                    Todos los derechos reservados.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" class="text-light small text-decoration-none me-3">
                    Privacidad
                </a>
                <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>" class="text-light small text-decoration-none">
                    Términos
                </a>
            </div>
        </div>
    </div>
</footer>
```

**Commit:**
```bash
git add template-parts/footer/main.php
git commit -m "feat(template-parts): crear footer/main.php con footer completo"
```

### Paso 3.6: Testing de componentes

```bash
# Verificar sintaxis PHP
php -l template-parts/header/seo.php
php -l template-parts/header/topbar.php
php -l template-parts/header/navigation.php
php -l template-parts/footer/main.php

# Ver estructura creada
tree template-parts/
```

---

## FASE 4: REFACTORIZAR HEADER/FOOTER

### Paso 4.1: Actualizar header.php

**Ubicación:** `/Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/header.php`

**Cambio:** Agregar llamadas a template-parts después de `</head>` y antes de `</header>`

**Antes (línea ~270):**
```php
<?php
// ... (contenido existente del head)
?>
</head>

<body <?php body_class(); ?>>
```

**Después:**
```php
<?php
// ... (contenido existente del head)
?>
</head>

<body <?php body_class(); ?>>
    
    <!-- Topbar con info contacto y redes sociales -->
    <?php get_template_part( 'template-parts/header/topbar' ); ?>
    
    <!-- Navegación principal -->
    <?php get_template_part( 'template-parts/header/navigation' ); ?>
```

**Commit:**
```bash
git add header.php
git commit -m "refactor(header): integrar template-parts (topbar, navigation)"
```

### Paso 4.2: Actualizar footer.php

**Ubicación:** `/Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/footer.php`

**Cambio:** Reemplazar contenido del footer con template-part

**Antes (contenido actual footer):**
```php
<?php
// contenido actual del footer
?>
</body>
</html>
```

**Después:**
```php
<?php
/**
 * Footer template
 * 
 * @package GepetrolSeguros
 */

// Evitar acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Template part: footer principal
get_template_part( 'template-parts/footer/main' );

// Widgets y scripts (si es necesario)
wp_footer();
?>
</body>
</html>
```

**Commit:**
```bash
git add footer.php
git commit -m "refactor(footer): integrar template-parts/footer/main"
```

### Paso 4.3: Verificar en Frontend

```bash
# Acceder a WordPress desde navegador
# http://localhost:8888 (o tu URL local)

# Verificar:
- [ ] Header carga correctamente
- [ ] Topbar visible
- [ ] Navegación funciona
- [ ] Footer carga correctamente
- [ ] No hay errores en console (F12)
- [ ] No hay errores en error_log
```

**Importante:** Si hay errores, revisar error_log:
```bash
tail -f /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/error_log
```

---

## FASE 5: CREAR PAGE TEMPLATES

### Paso 5.1: Crear template para Seguro Automóvil

**Crear archivo:**
```bash
touch page-template/tpl-seguro-automovil.php
```

**Contenido (plantilla base):**
```php
<?php
/**
 * Template Name: Seguro Automóvil
 * Template Post Type: page
 *
 * Plantilla para página de seguro automóvil
 * 
 * @package GepetrolSeguros
 * @subpackage Page Templates
 * @since 2.1
 */

get_header();
?>

<main id="main" role="main" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <!-- Hero / Título -->
                    <div class="mb-4">
                        <h1 class="display-4"><?php the_title(); ?></h1>
                        <p class="lead"><?php the_excerpt(); ?></p>
                    </div>
                    
                    <!-- Contenido -->
                    <div class="entry-content">
                        <?php
                        the_content();
                        
                        wp_link_pages( array(
                            'before' => '<div class="page-links">',
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>
                    
                </article>
                
                <!-- CTA formulario -->
                <div class="mt-5 p-4 bg-light rounded">
                    <h3>¿Listo para cotizar tu póliza?</h3>
                    <p>Ingresa tus datos y obtén una cotización en minutos.</p>
                    <a href="<?php echo esc_url( home_url( '/solicitar-presupuesto' ) ); ?>" class="btn btn-primary btn-lg">
                        Solicitar Presupuesto
                    </a>
                </div>
                
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <?php
                if ( is_active_sidebar( 'primary-sidebar' ) ) {
                    dynamic_sidebar( 'primary-sidebar' );
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
```

**Commit:**
```bash
git add page-template/tpl-seguro-automovil.php
git commit -m "feat(page-template): crear plantilla Seguro Automóvil"
```

### Paso 5.2-5.7: Crear otros page templates

Repetir el proceso para:
- [ ] tpl-mensaje-director.php
- [ ] tpl-estructura-organizativa.php
- [ ] tpl-solicitar-presupuesto.php
- [ ] tpl-trabaja-con-nosotros.php
- [ ] tpl-videos.php

**Comando para crear todos:**
```bash
touch page-template/tpl-mensaje-director.php
touch page-template/tpl-estructura-organizativa.php
touch page-template/tpl-solicitar-presupuesto.php
touch page-template/tpl-trabaja-con-nosotros.php
touch page-template/tpl-videos.php
```

**Cada plantilla debe tener:**
```php
<?php
/**
 * Template Name: [Nombre Plantilla]
 * Template Post Type: page
 * Description: [Descripción]
 */

get_header();
?>

<!-- contenido específico -->

<?php get_footer(); ?>
```

---

## FASE 6: CONSOLIDAR ASSETS

### Paso 6.1: Revisar CSS

```bash
# Listar archivos CSS
ls -la assets/css/ | grep ".css$"

# Verificar tamaño
du -sh assets/css/
```

### Paso 6.2: Revisar JS

```bash
# Listar archivos JS
ls -la assets/js/ | grep ".js$"

# Verificar tamaño
du -sh assets/js/
```

### Paso 6.3: Actualizar inc/enqueues.php

**Agregar comentarios y validaciones:**
```php
/**
 * Enqueues CSS/JS v2.1
 * 
 * Cambios en v2.1:
 * - Consolidación de librerías
 * - Actualización de versiones
 * - Mejora de dependencias
 */
```

### Paso 6.4: Testing assets

```bash
# En navegador, abrir inspector (F12)
# Networks tab:
- [ ] Verificar que CSS/JS cargan
- [ ] Revisar tamaño de archivos
- [ ] Revisar tiempo de carga

# Console tab:
- [ ] No debe haber errores 404
- [ ] No debe haber advertencias de compatibilidad
```

---

## FASE 7: TESTING

### Paso 7.1: Testing Funcional

**Páginas a verificar:**
- [ ] Home (/)
- [ ] Quiénes somos
- [ ] Seguros particulares
- [ ] Seguros empresas
- [ ] Contacto
- [ ] Blog / Noticias
- [ ] Página de error (404)

**En cada página:**
- [ ] Contenido carga correctamente
- [ ] Header/footer completo
- [ ] Navegación funciona
- [ ] Formularios envían
- [ ] No hay errores JavaScript

### Paso 7.2: Testing Responsive

```bash
# Usar Chrome DevTools
# Ctrl+Shift+I → Toggle device toolbar

# Revisar en:
- [ ] Mobile (320px)
- [ ] Tablet (768px)
- [ ] Desktop (1024px+)
- [ ] Landscape/Portrait

# Verificar:
- [ ] Menú mobile funciona
- [ ] Imágenes responsive
- [ ] Texto legible
- [ ] Botones clickeables
```

### Paso 7.3: Testing SEO

```bash
# Lighthouse (Chrome DevTools)
1. Ctrl+Shift+I
2. Lighthouse tab
3. Run audit (SEO)

# Verificar:
- [ ] Meta descriptions
- [ ] Open Graph tags
- [ ] Structured data (JSON-LD)
- [ ] Mobile friendly
- [ ] Score > 90
```

### Paso 7.4: Testing Performance

```bash
# PageSpeed Insights
https://pagespeed.web.dev/

# Core Web Vitals:
- [ ] LCP (Largest Contentful Paint) < 2.5s
- [ ] FID (First Input Delay) < 100ms
- [ ] CLS (Cumulative Layout Shift) < 0.1

# Recomendaciones:
- Lazy load images
- Minify CSS/JS
- Optimize fonts
```

### Paso 7.5: Testing Compatibilidad

**Navegadores:**
- [ ] Chrome (última versión)
- [ ] Firefox (última versión)
- [ ] Safari (última versión)
- [ ] Edge (última versión)
- [ ] Mobile Chrome
- [ ] Mobile Safari

---

## FASE 8: RELEASE

### Paso 8.1: Actualizar documentación

```bash
# Crear README.md
touch README.md

# Crear CHANGELOG.md
cat > CHANGELOG.md << 'EOF'
# Changelog

## [2.1.0] - 2026-01-06

### Added
- New template-parts system (header, footer, slider)
- Integration of templateHtml pages
- 6 new page templates
- Improved SEO meta tags
- Topbar component with contact info

### Changed
- Refactored header.php to use template-parts
- Refactored footer.php to use template-parts
- Updated style.css metadata

### Fixed
- [list any bugs fixed]

### Deprecated
- [list deprecated features]

### Security
- [list security updates]

---

## [2.0.0] - 2025-XX-XX
[Previous release notes]
EOF

git add README.md CHANGELOG.md
git commit -m "docs: crear README.md y CHANGELOG.md para v2.1"
```

### Paso 8.2: Crear Git tag

```bash
# Crear tag
git tag -a v2.1.0 -m "Release version 2.1.0 - Template integration"

# Push tag
git push origin v2.1.0

# Verificar
git tag -l
```

### Paso 8.3: Hacer merge a main

```bash
# Cambiar a rama main
git checkout main

# Merge desde develop/v2.1
git merge develop/v2.1 -m "Merge v2.1 release into main"

# Push a main
git push origin main
```

### Paso 8.4: Backup Final

```bash
# Crear backup de v2.1 completada
cd /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/
zip -r gepseguros_v2.1.0_release_$(date +%Y%m%d_%H%M%S).zip gepseguros/

# Verificar backup
ls -lh *.zip
```

### Paso 8.5: Actualizar en Producción

```bash
# EN PRODUCCIÓN (cuando esté lista):

# 1. Backup de producción
# 2. Clonar rama v2.1 en servidor
# 3. Ejecutar migraciones si hay (sin cambios BD en v2.1)
# 4. Clear caches (si hay)
# 5. Test en producción
# 6. Monitor error logs
```

---

## 🎯 CHECKLIST DE CUMPLIMIENTO

### FASE 1: Setup y Backup
- [ ] Rama develop/v2.1 creada
- [ ] Backup local completo
- [ ] Git tag v2.0.0 (backup)
- [ ] MIGRACION_LOG.md creado

### FASE 2: Archivos Base
- [ ] style.css actualizado a v2.1
- [ ] functions.php verificado
- [ ] inc/enqueues.php verificado
- [ ] Git commits hechos

### FASE 3: Template-Parts
- [ ] template-parts/header/seo.php creado
- [ ] template-parts/header/topbar.php creado
- [ ] template-parts/header/navigation.php creado
- [ ] template-parts/footer/main.php creado
- [ ] Sintaxis PHP verificada
- [ ] Git commits hechos

### FASE 4: Header/Footer
- [ ] header.php refactorizado
- [ ] footer.php refactorizado
- [ ] Frontend testing (sin errores)
- [ ] Git commits hechos

### FASE 5: Page Templates
- [ ] Todos 6 page templates creados
- [ ] Templates editables en WP admin
- [ ] WordPress asigna templates a páginas
- [ ] Git commits hechos

### FASE 6: Assets
- [ ] CSS revisado y consolidado
- [ ] JS revisado y consolidado
- [ ] enqueues.php actualizado
- [ ] No hay archivos duplicados
- [ ] Git commits hechos

### FASE 7: Testing
- [ ] Testing funcional completado
- [ ] Testing responsive OK
- [ ] Testing SEO OK
- [ ] Testing performance OK
- [ ] Testing compatibilidad OK
- [ ] No hay errores en console

### FASE 8: Release
- [ ] README.md y CHANGELOG.md creados
- [ ] Git tag v2.1.0 creado
- [ ] Main branch mergeado
- [ ] Backup final hecho
- [ ] Documentación actualizada

---

## 📞 SOPORTE

Si encuentras problemas durante la migración:

1. **Revisar error_log:**
   ```bash
   tail -100 /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/themes/gepseguros/error_log
   ```

2. **Revisar logs de WordPress:**
   ```bash
   tail -100 /Applications/MAMP/htdocs/WordPressSites/Gepetrol_Seguros/wp-content/debug.log
   ```

3. **Testing PHP:**
   ```bash
   php -l archivo.php
   ```

4. **Limpiar cache:**
   ```bash
   # Si tienes WP Super Cache, etc.
   # Desde admin → Tools → Cache → Clear
   ```

---

## 📚 REFERENCIAS

- [Documentación WordPress Themes](https://developer.wordpress.org/themes/)
- [Bootstrap 5 Docs](https://getbootstrap.com/docs/5.3/)
- [Redux Framework Docs](https://www.redux.io/)
- [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [WPCS Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards)

---

**Guía creada:** 6 de enero de 2026  
**Versión:** 1.0  
**Estado:** ✅ Listo para implementación

**Próximo paso:** Comenzar FASE 1 (Setup y Backup)
