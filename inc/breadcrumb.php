<?php
/**
 * Sección de título de página con imagen de fondo.
 *
 * - Usa la imagen destacada de la página/entrada como background.
 * - Ajusta la posición para que el rostro no se corte tanto.
 * - Fallback a una imagen por defecto del tema si no hay thumbnail.
 */

// ID del objeto actual (página, entrada, etc.)
$current_id = get_queried_object_id();

// Imagen destacada (tamaño full)
$background_img_url = '';
if ( has_post_thumbnail( $current_id ) ) {
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $current_id ), 'full' );
    if ( ! empty( $thumb[0] ) ) {
        $background_img_url = $thumb[0];
    }
}

// Fallback: imagen genérica del tema si no hay miniatura
if ( empty( $background_img_url ) ) {
    $background_img_url = get_template_directory_uri() . '/assets/images/background/default-page-title.jpg';
}

// Estilo inline con posición ajustada para que se vea mejor la cara
// Puedes ajustar el 20% a 30% o 40% según tus fotos.
$page_title_bg_style = sprintf(
    //'background-image:url(%1$s);background-size:cover;background-position:50% 20%;',
    'background-image:url(%1$s);background-size:cover;background-position:50%% 20%%;',
    esc_url( $background_img_url )
);
?>

<!-- start page-title -->
<section
    class="page-title centred page-title--has-bg"
    style="<?php echo esc_attr( $page_title_bg_style ); ?>"
>
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1><?php the_title(); ?></h1>
            </div>

            <?php
            // Migas de pan del tema
            if ( function_exists( 'gepetrol_breadcrumbs' ) ) {
                gepetrol_breadcrumbs();
            }
            ?>
        </div>
    </div>
</section>
<!-- end page-title -->