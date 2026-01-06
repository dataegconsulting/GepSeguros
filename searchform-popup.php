<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Data_EG_SL
 * @since dataeg 5.1
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
 
$dataeg_unique_id = wp_unique_id( 'search-form-' );
$dataeg_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">


        
        <form role="search" <?php echo $dataeg_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
          
            <input 
                type="search" id="<?php echo esc_attr( $dataeg_unique_id ); ?>" 
                placeholder="<?php echo esc_attr_x( 'Buscar …', 'placeholder' ) ?>" 
                value="<?php echo get_search_query(); ?>" 
                name="s" 
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
            />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
            
        </form>

    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
