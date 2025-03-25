<?php get_header(); ?>

<?php
/*
Template Name: Otros juegos
*/
?>

<div class="container-fluid rojito">
    <div class="container-fluid fondo-10">

    </div>
    <div class="container-fluid rojo">
        <h3 class="text-center">Nintendo</h3>
    </div>

    <div class="container-fluid control bg-dark">
        <div class="row">
            <div class="col-md-8">
                <h3>Consolas de Nintendo</h3>
            </div>
            <div class="row centrar">
                <!--loop consolas -->
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=consolas"); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="col-md-4 oled text-center">
                    <?php 
                    $image = get_field('imagen_de_la_consola');
                    $image_url = $image['sizes']['medium'];
                    if( !empty($image) ): ?>

                    <a class="fancybox" data-caption="<?php the_field('nombre_de_la_consola'); ?>"
                        data-fancybox="consolas" href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image_url; ?>" />
                    </a>

                    <?php endif; ?>
                </div>

                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>

    <div class="container-fluid juegos">
        <div class="mascara-juegos">
            <h3 class="top10">Top 10 Juegos Más Populares</h3>

            <!-- loop de juegos -->
            <div class="row justify-content-center">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=juegos"); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="col-md-5 azul">
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                        $image = get_field('imagen_de_juego');
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?></a>
                    <h3><?php the_field('titulo_de_juego'); ?></h3>
                </div>


                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div class="container-fluid canela" id="canela">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Canela está conversando con sus amigos.</h2>
                <p>Presiona el botón para saber en qué piensa Canela</p>
                <a id="botonn" class="btn btn-primary">Echemos un vistazo</a>
            </div>
            <div class="col-md-4">
                <h6 id="Dinamico">

                </h6>
            </div>
        </div>
    </div>




</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>