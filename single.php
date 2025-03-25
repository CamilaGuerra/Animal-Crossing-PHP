<?php get_header(); ?>

<div class="container-fluid single">
    <div class="container">
        <div class="row oscuridad">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="col-md-6 text-center">
                <?php 
                    $image = get_field('imagen_de_juego');
                    $image_url = $image['sizes']['medium'];
                    if( !empty($image) ): ?>

                    <a data-caption="<?php the_field('titulo_de_juego'); ?>"
                        data-fancybox="juegos" href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image_url; ?>" />
                    </a>

                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <h3 class="text-center"><?php the_field('titulo_de_juego'); ?></h3>
                <p><?php the_field('descripcion_del_juego'); ?></p>
                <div class="botonzote text-center">
                    <a class="btn btn-danger" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver Atrás</a>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>