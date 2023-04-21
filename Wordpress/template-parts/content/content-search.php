<?php

            while (have_posts()) :
                the_post(); ?>
                <div class="col">
                    <div class="card-box is-left" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <figure class="imagestyle">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </figure>
                        <div class="container">
                            <span><?php the_date()?></span>
                            <div class="title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></div>
                        </div>   
                        <footer class="entry-footer">
                            <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                        </footer>                          
                    </div>
                </div>
<?php endwhile; ?>