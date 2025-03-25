<?php get_header(); ?>

<?php
/*
Template Name: Contacto
*/
?>

<div class="container-fluid touch">
</div>

<div class="container-fluid contactooo">
    <div class="row">
        <button class="btn btn-danger" onclick="OpenHack();">No presiones este botón</button>
    </div>
</div>

<div class="container-fluid formulario">
    <div class="row justify-content-center">
        <h4>Formulario de Contacto</h4>
        <div class="col-md-5">
            <div class="mb-3">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid mapa">
    <h3>¿Dónde encontrarnos?</h3>

    <div class="information">
        <p>•Bella Vista 911, Valparaíso, Valparaíso, Chile.</p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.454537345471!2d-71.62547898481124!3d-33.04449828089199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e128f2b6aff9%3A0xc415e8881d353b6c!2sBellavista%20911%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1657795644220!5m2!1ses!2scl" width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>