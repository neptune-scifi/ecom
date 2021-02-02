<?php /* Template Name: Template: Página Inicial */ ?>

<!-- wordpress header -->
<?php get_header(); ?>

<!-- custom css -->
<style>

</style>

<!-- código do metaslider -->
<?php echo do_shortcode('[metaslider id="36"]'); ?>

<!-- listar produtos recentes do woocommerce -->
<?php 
$the_query = new WP_Query( array(
    'posts_per_page' => 30,
    'post_type' => 'product',
    'orderby'   => 'rand',
)); 
?>
<section class="section">
    <div class="has-text-centered">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/design/icon-news.png' ); ?>" />
        <p>Coleção em Destaque</p>
        <h1 class="title is-1 fine">Novidades</h1>
    </div>

    <?php if ( $the_query->have_posts() ) : ?>
    <ul class="ecom-paginainicial-listaprodutos">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
            <div class="ecom-paginainicial-produto">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
                <div class="ecom-paginainicial-produto-clear"></div>

                <div class="ecom-paginainicial-produto-titulo">
                    <?php the_title(); ?>
                </div>

                <div class="ecom-paginainicial-produto-clear"></div>

                <div class="ecom-paginainicial-produto-preco">
                    <?php woocommerce_template_single_price(); ?>
                </div>

                <div class="ecom-paginainicial-produto-clear"></div>
                <a href="<?php the_permalink(); ?>" class="button is-color is-rounded">quero ver!</a>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>Não encontrado</p>
    <?php endif; ?>
</section>

<!-- wordpress footer -->
<?php get_footer(); ?>