<?php get_header(); ?>

<div class="content">

            <div class="main">

            <?php
            
            the_post_thumbnail();
            
            ?>

            <?php

            if( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                }
            }
            
            ?>

            

            </div>


</div>

<?php get_footer(); ?>