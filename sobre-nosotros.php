<?php get_header(); ?> 

<?php
/*
Template Name: Sobre Nosotros
*/
?>

<div class="container-fluid sobreee">
    <div class="container-fluid fondo-4">
    </div>

    <!-- loop video  -->
    <div class="container-fluid fondo-5">    
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=somos"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="row justify-content-center">
                <div class="video text-center">        
                    <?php the_field('video'); ?>
                </div>
            </div>
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>

    <div class="container-fluid fondo-6">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=somos"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <h3><?php the_title(); ?></h3>
            <div class="row one">
                <div class="col-md-5 text-center">
                    <p><?php the_field('primer_parrafo'); ?></p>
                </div>
                <div class="col-md-5 text-center">
                    <?php 
                        $image = get_field('primera_imagen');
                        $image_url = $image['sizes']['medium'];
                        if( !empty($image) ): ?>

                        <a data-fancybox="nosotros" href="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image_url; ?>" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row two">
                <div class="col-md-5 text-center">
                    <?php 
                        $image = get_field('segunda_imagen');
                        $image_url = $image['sizes']['medium'];
                        if( !empty($image) ): ?>

                        <a data-fancybox="nosotros" href="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image_url; ?>" />
                        </a>
                    <?php endif; ?>
                    
                </div>
                <div class="col-md-5 text-center">
                    <p><?php the_field('segundo_parrafo'); ?></p>
                </div>
            </div>

            <div class="row three">
                <div class="col-md-5 text-center">
                    <p><?php the_field('tercer_parrafo'); ?></p>
                </div>
                <div class="col-md-5 text-center">
                    <?php 
                        $image = get_field('tercera_imagen');
                        $image_url = $image['sizes']['medium'];
                        if( !empty($image) ): ?>

                        <a data-fancybox="nosotros" href="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image_url; ?>" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row four">
                <div class="col-md-5 text-center">
                    <?php 
                        $image = get_field('cuarta_imagen');
                        $image_url = $image['sizes']['medium'];
                        if( !empty($image) ): ?>

                        <a data-fancybox="nosotros" href="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image_url; ?>" />
                        </a>
                    <?php endif; ?>
                    
                </div>
                <div class="col-md-5 text-center">
                    <p><?php the_field('cuarto_parrafo'); ?></p>
                </div>
                
            </div>

        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
            <div class="row five">
                <div class="col-md-3 text-center">
                    <a class=" btn btn-danger" onclick="NintendoAbrir()">Abrir website oficial de Nintendo</a>
                </div>
            </div>
            
    </div>

    <div class="container-fluid hora">
        <h4>Recuerda que la hora de Animal Crossing es la misma que en la realidad</h4>
        <h2 id="hora"></h2>
    </div>

</div>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>