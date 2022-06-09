<?php /* Template Name: Inicio */

get_header(); ?>

    <section class="container portada">
        <div class="row">
        <div class="col-sm-6">
            <div class="img1">
                <img src="<?php the_field('imagen_principal'); ?>" alt="" width="570px">
            </div>
        </div>
        <div class="col-sm-6">
            <h2 class="titulo"><a href="#"><?php the_field('titulo_principal'); ?></a></h2>
            <p><?php the_field('contenido'); ?></p>
            <button>VER OTRO</button>
            <a href="<?php the_field('boton'); ?>">VER OTRO</a>
        </div>
        </div>
    </section>
    <section class="container videos">
        <div class="row">
            <div class="col-sm-4 text-center"><?php the_field('video_1'); ?></div>
            <div class="col-sm-4 text-center"><?php the_field('video_2'); ?></div>
            <div class="col-sm-4 text-center"><?php the_field('video_3'); ?></div> 
        </div>
        <br>
        <button>VER MÁS</button>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
        </div>
    </section>
    
    <?php get_footer(); ?>