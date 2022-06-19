<?php /* Template Name: Listado */

get_header(); ?>
    
    <section class="container">
        <div class="row fondo espacio">
            <div class="col-sm-4">
                <img src="<?php the_field('imagen_1'); ?>" alt="" width="100%" height="230px">
            </div>
            <div class="col-sm-8 espacio">
                <a href=""><h3><?php the_field('titulo_1'); ?></h3></a>
                <p><?php the_field('contenido_1'); ?></p>
            </div>
        </div>
    </section>

    <section class="container">  
        <div class="row fondo">
                <div class="col-sm-4 espacio">
                <img src="<?php the_field('imagen_2'); ?>" alt="" width="100%" height="230px">
                </div>
                <div class="col-sm-8 espacio">
                    <a href="#"><h3><?php the_field('titulo_2'); ?></h3></a>
                    <p> <?php the_field('contenido_2'); ?></p>
                </div>
        </div>
    </section>  

    <section class="container">
        <div class="row fondo">
            <div class="col-sm-4 espacio">
            <?php the_field('video'); ?>
            </div>
            <div class="col-sm-8 espacio">
                <a href=""><h3><?php the_field('titulo_3'); ?></h3></a>
                <p><?php the_field('contenido_3'); ?></p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row fondo">
            <div class="col-sm-4 espacio">
                <img src="<?php the_field('imagen_4'); ?>" alt="" width="100%" height="230px">
            </div>
            <div class="col-sm-8 espacio">
                <a href="#"><h3><?php the_field('titulo_4'); ?></h3></a>
                <p><?php the_field('contenido_4'); ?></p>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>