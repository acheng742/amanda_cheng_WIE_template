<?php get_header(); ?>

    <section class="row">

        <div class="twelve colums">

            <?php

                if ( have_posts() ) {

                    while ( have_posts() ){

                        the_post(); ?>

                        <h3><?php the_title(); ?></h3>

                        <p><?php the_excerpt(); ?></P>
                    <?php    
                    }
                }

            ?>

        </div>

    </section>

<?php get_footer(); ?>
