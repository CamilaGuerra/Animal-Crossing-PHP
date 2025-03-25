<?php get_header(); ?>

<div class="mascara-1">
    <div class="container-fluid fondo-1">
    </div>
</div>

<div class="container-fluid fondo-2 ">
    <div class="container uno">
        <div class="row">
            <!-- loop somos -->
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=resumen-somos&showposts=1"); ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="col-md-6">
                <h2> <?php the_title(); ?> </h2>
                <p> <?php the_excerpt(); ?> </p>
                <a class="btn btn-success conocemas" href="<?php bloginfo('template_url');?> /sobre-nosotros">Conoce más
                    aquí</a>
            </div>
            <div class="col-md-6 imagen">
                <div class="img-recortada">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>

<div class="container-fluid fondo-3">
    <h2 class="text-center conoce">Conoce a los personajes</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- pluggin de la profe paola (owl) -->
                <div class="owl-carousel  owl-theme carrusel">
                    <div class="square">
                        <h3>KK Slider</h3>
                        <h6>Perro</h6>
                        <a data-fancybox="personajes" data-caption="KK Slider"
                            data-src="https://images.wikidexcdn.net/mwuploads/esssbwiki/thumb/2/2c/latest/20130814171742/Totakeke_ACNL.png/250px-Totakeke_ACNL.png">
                            <img
                                src="https://images.wikidexcdn.net/mwuploads/esssbwiki/thumb/2/2c/latest/20130814171742/Totakeke_ACNL.png/250px-Totakeke_ACNL.png">
                        </a>

                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="KK Slider" data-bs-tipo="Perro"
                            data-bs-url="https://i1.sndcdn.com/artworks-tL1zbR0m0UprrIln-sOzGMg-t500x500.jpg"
                            data-bs-descripcion="Es un perro cuyo papel principal es tocar y cantar canciones para el jugador cada sábado en la noche."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Tom Nook</h3>
                        <h6>Mapache</h6>
                        <a data-fancybox="personajes" data-caption="Tom Nook"
                            data-src="https://images.wikidexcdn.net/mwuploads/esssbwiki/thumb/5/59/latest/20140523224500/Tom_Nook_en_Animal_Crossing_New_Leaf.png/200px-Tom_Nook_en_Animal_Crossing_New_Leaf.png">
                            <img
                                src="https://images.wikidexcdn.net/mwuploads/esssbwiki/thumb/5/59/latest/20140523224500/Tom_Nook_en_Animal_Crossing_New_Leaf.png/200px-Tom_Nook_en_Animal_Crossing_New_Leaf.png">
                        </a>
                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Tom Nook"
                            data-bs-url="https://www.playcentral.de/wp-content/uploads/2019/06/newspic-78792.jpg"
                            data-bs-descripcion="Es el gerente de la tienda del pueblo, Almacenes Nook. Después de la expansión final, Nook's, empleará a sus sobrinos Tendo y Nendo, que trabajan en el segundo piso en todos los juegos de Animal Crossing."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Rese T. Ado</h3>
                        <h6>Topo</h6>
                        <a data-fancybox="personajes" data-caption="Rese T. Ado"
                            data-src="https://1.bp.blogspot.com/-fECyLKreiO4/XrOlRPk98UI/AAAAAAAANtI/DGswNSH6IVo4cBX3PgTnJ3m8vWRVNDgLACLcBGAsYHQ/s1600/%25EB%258F%2584%25EB%25A3%25A8%25EB%25AC%25B5%25EC%2594%25A8%2B%2528%25E3%2583%25AA%25E3%2582%25BB%25E3%2583%2583%25E3%2583%2588%25E3%2581%2595%25E3%2582%2593%2BMr.%2BResetti%2529.png">
                            <img class="reset"
                                src="https://1.bp.blogspot.com/-fECyLKreiO4/XrOlRPk98UI/AAAAAAAANtI/DGswNSH6IVo4cBX3PgTnJ3m8vWRVNDgLACLcBGAsYHQ/s1600/%25EB%258F%2584%25EB%25A3%25A8%25EB%25AC%25B5%25EC%2594%25A8%2B%2528%25E3%2583%25AA%25E3%2582%25BB%25E3%2583%2583%25E3%2583%2588%25E3%2581%2595%25E3%2582%2593%2BMr.%2BResetti%2529.png">
                        </a>


                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Rese T. Ado"
                            data-bs-url="https://www.nintenderos.com/wp-content/uploads/2022/02/reset-animal-crossing.jpg?width=1200&enable=upscale"
                            data-bs-descripcion="Es un personaje que trabaja en el Centro de Vigilancia de Reseteos con su hermano menor, Rese T., como su hermano, le dará al jugador una pequeña advertencia sobre la importancia de guardar el juego después de cada partida."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Canela</h3>
                        <h6>Perro</h6>
                        <a data-fancybox="personajes" data-caption="Canela"
                            data-src="https://images.wikidexcdn.net/mwuploads/esssbwiki/2/25/latest/20180914014029/Canela_amiibo_Festival.png">
                            <img
                                src="https://images.wikidexcdn.net/mwuploads/esssbwiki/2/25/latest/20180914014029/Canela_amiibo_Festival.png">
                        </a>


                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Canela"
                            data-bs-url="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_940x529/public/media/image/2021/10/animal-crossing-new-horizons-canela-2496817.jpg?itok=C4AId-J8"
                            data-bs-descripcion="Ella ayuda al jugador con su papel como alcalde del pueblo como su secretaria y asistente."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Tortimer</h3>
                        <h6>Tortuga</h6>
                        <a data-fancybox="personajes" data-caption="Tortimer"
                            data-src="https://www.pngkit.com/png/full/637-6379492_tortimernl-animal-crossing-new-leaf-characters.png">
                            <img
                                src="https://www.pngkit.com/png/full/637-6379492_tortimernl-animal-crossing-new-leaf-characters.png">
                        </a>


                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Tortimer"
                            data-bs-url="https://www.nintenderos.com/wp-content/uploads/2021/10/tortimer-animal-crossing-Cropped.jpg"
                            data-bs-descripcion="Es el alcalde de tu pueblo. Raramente aparece en público, si aparece es solo en Días Festivos."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Blathers</h3>
                        <h6>Búho</h6>
                        <a data-fancybox="personajes" data-caption="Blathers"
                            data-src="https://i.pinimg.com/originals/6c/94/f1/6c94f1f071cd9c070d19b052988cb378.png">
                            <img src="https://i.pinimg.com/originals/6c/94/f1/6c94f1f071cd9c070d19b052988cb378.png">
                        </a>


                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Blathers"
                            data-bs-url="https://preview.redd.it/23tuxt9bkev41.jpg?auto=webp&s=bd6e32482c7c24913117ca3433e06b4f4888bbde"
                            data-bs-descripcion="Es un personaje que sirve al director del Museo. Los jugadores pueden patrocinar el Museo trayéndole donaciones de peces, insectos, fósiles y pinturas."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Capitán</h3>
                        <h6>Rana</h6>
                        <a data-fancybox="personajes" data-caption="Capitán"
                            data-src="https://animalcrossing.soopoolleaf.com/es/ac/NPC/Kappn/Kappn.png">
                            <img src="https://animalcrossing.soopoolleaf.com/es/ac/NPC/Kappn/Kappn.png">
                        </a>


                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Capitán"
                            data-bs-url="https://d1lss44hh2trtw.cloudfront.net/assets/article/2021/11/05/how-to-go-on-boat-tours-animal-crossing-new-horizons_feature.jpg"
                            data-bs-descripcion="Es una tortuga verde que aparece como un conductor de varias formas de transporte. Es conocido por remar botes y por conducir taxis y autobuses."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Redd</h3>
                        <h6>Zorro</h6>
                        <a data-fancybox="personajes" data-caption="Redd"
                            data-src="https://www.giantbomb.com/a/uploads/original/15/151939/2296141-redd.png">
                            <img src="https://www.giantbomb.com/a/uploads/original/15/151939/2296141-redd.png">
                        </a>

                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Redd"
                            data-bs-url="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2020/04/acnh-unlock-redd-art-gallery-treasure-trawler.jpg"
                            data-bs-descripcion="Es un zorro que dirige las tiendas de muebles ilícitas, en donde se sabe que vende pinturas y esculturas auténticas y falsificadas junto con muebles a precios excesivos."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                    <div class="square">
                        <h3>Pascal</h3>
                        <h6>Nutria</h6>
                        <a data-fancybox="personajes" data-caption="Pascal" data-src="https://dodo.ac/np/images/0/03/Pascal_NH.png">
                            <img src="https://dodo.ac/np/images/0/03/Pascal_NH.png">
                        </a>


                        <a class="btn btn-info btn-danger masinfo" data-bs-titulo="Pascal"
                            data-bs-url="https://d1fs8ljxwyzba6.cloudfront.net/assets/article/2020/07/03/animal-crossing-new-horizons-pascal-location_feature.jpg"
                            data-bs-descripcion="Es conocido por sus tendencias filosóficas, es un nómada que pasa sus días viajando por los siete mares, hablando con extraños y comiendo vieiras."
                            data-bs-toggle="modal" data-bs-target="#modalPersonaje">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="modalPersonaje" tabindex="-1" aria-labelledby="modalProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitulo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="imgModal" src="https://www.grupoavanzar.edu.pe/wp-content/uploads/2022/04/somos-gravity-3.jpg"
                    class="w-100">
                <p id="descripcionModal"></p>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid co">
    <div class="row justify-content-center">

        <!-- loop comentario -->
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=comentarios&showposts=1"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-8">
            <div class="row align-items-center blanco">
                <div class="col-md-4">
                    <?php 
                            $image = get_field('imagen_del_usuario');
                            if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <h4><?php the_field('nombre_apellido'); ?></h4>
                    <p><?php the_field('comentario'); ?></p>
                </div>
            </div>

        </div>
        <div class="botonn text-center">
            <a class="btn btn-success" href="<?php bloginfo('template_url'); ?>/resenas">Presiona aquí para ir a
                escribir tu reseña</a>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<div class="container-fluid others">
    <h3>Top de juegos más populares de Nintendo</h3>

    <div class="row justify-content-center text-center">
        
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=juegos&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="col-md-4 azul">
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            $image = get_field('imagen_de_juego');
                            if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?></a>
                    <h2><?php the_field('titulo_de_juego'); ?></h2>
                </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        <div class="otro-boton">
            <a class="btn btn-success" href="<?php bloginfo('template_url'); ?>/otros-juegos">Revisa el resto de juegos aquí</a>
        </div>
    </div>
</div>

<div class="container-fluid subs">
    <div class="col-md-12 mascara-2">
        <div class="row finale">
            <div class="col-md-2"></div>
            <div class="col-md-4 dudas text-center">
                <h2>¿Dudas o Consultas?</h2>
                <a class="btn btn-warning" href="<?php bloginfo('template_url'); ?>/contacto">Contáctanos</a>
            </div>
            <div class="col-md-3 medio">
                <h3>¡Suscríbete!</h3>
                <p>Recibe noticias y ofertas sobre Animal Crossing a tu correo.</p>
            </div>
            <div class="col-md-3">
                <form>
                    <div class="mb-3">
                        <label for="Subscripcion" class="form-label">Ingresa tu email</label>
                        <input placeholder="ejemplo@gmail.com" type="email" class="form-control" id="Subscripcion"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn"
                        onClick="return confirm('¿Está seguro de querer suscribirse?')">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>