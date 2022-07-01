<?php /* Template Name: Detalles */

get_header(); ?>
    
    <section class="container">
        <div class="row">
            <div class="col-sm-12">   
                <h1 class="noti1"><?php the_title(); ?></h1>
                    <p class="come1"><?php the_content(); ?></p>
            </div>         
                <div class="col text-center video">
                    <img src="<?php the_post_thumbnail_url("large"); ?>">
                </div>
            <div class="col-sm-12">    
                    <p class="come1"><?php the_field('contenido_a'); ?></p>
            </div>        
        </div>        
    </section>
    <section class="container">
       <?php comments_template(); ?> 
    </section>

    <?php get_footer(); ?>
    