<?php get_header(); ?>

<?php
/*
Template Name: Reseñas
*/
?>

<div class="container-fluid comentarios">
    <h3>Reseñas</h3>
</div>

<!-- Formulario de comentario (el formulario se inserta desde la página "Reseñas")-->
<div class="container-fluid fondo-7">
    <div class="row justify-content-center">
        <h3 class="text-center">Escribe tu comentario aquí</h3>
        <div class="col-md-6">
            <div class="mb-3 nya">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>


<!-- loop comentarios  -->
<div class="container-fluid fondo-8" id="coments">
    <div class="row justify-content-center">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=comentarios&showposts=3&paged=$paged"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-3 text-center">
            <div class="card">
                
                <?php 
                    $image = get_field('imagen_del_usuario');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_field('nombre_apellido'); ?></h5>
                    <p class="card-text"><?php the_field('comentario'); ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <div class="paginacion">
            <?php wp_pagenavi(); ?>
        </div>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

    </div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>