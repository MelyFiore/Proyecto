<?php /* Template Name: Listado */

get_header(); ?>
    
    <?php $articulos = new WP_Query([
			'showposts' => 5,
			'post_type' => 'noticias',
            "paged"=>get_query_var("paged")
			]);	
	while ($articulos->have_posts()) {
		$articulos->the_post(); ?>
        <section class="container">
            <div class="row fondo espacio">
                <div class="col-sm-4">
                    <img src="<?php the_post_thumbnail_url("large"); ?>" width="100%" height="230px">
                </div>
                <div class="col-sm-8 espacio">
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </section>
        <?php }
        wp_pagenavi(["query"=>$articulos]) ?>

    <?php get_footer(); ?>