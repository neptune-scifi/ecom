<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>

<div class="nav-cliente">
    <ul>
        <li class="nav-cliente-hello">
            <?php global $current_user; wp_get_current_user(); ?>
            <?php if ( is_user_logged_in() ) { echo 'Olá, tudo bem? ' . $current_user->display_name . "\n"; } 
            else {  } ?>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>minha-conta">Sua conta</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>carrinho">Carrinho</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contato">Contato</a></li>
    </ul>
</div>

<section class="nav">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nav-logo.png' ); ?>" />
    </a>
    <div style="height: 5px"></div>
    <?php wp_list_categories( array('taxonomy' => 'product_cat', 'title_li'  => '') ); ?>
    <div style="height: 5px"></div>
</section>
<div style="height:180px;"></div>
