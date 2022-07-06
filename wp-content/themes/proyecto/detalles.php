<?php /* Template Name: Detalles */

get_header(); ?>
    
    <section class="container">
        <div class="row">
            <div class="col-sm-12">   
                <h1 class="noti1"><?php the_field('titulo'); ?></h1>
                    <p class="come1"><?php the_field('contenido_a'); ?></p>
            </div>         
                <div class="col text-center video">
                    <img src="<?php the_field('imagen'); ?>" width="100%" height="620">
                </div>
            <div class="col-sm-12">    
                    <p class="come1"><?php the_field('contenido_a'); ?></p>
            </div>        
        </div>        
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <h5>
                    COMENTARIOS
                </h5>
                <input type="<?php the_field('comentario'); ?>">
            </div>
            <div class="col-sm-6 text-center">
                <button>COMENTAR</button>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
    