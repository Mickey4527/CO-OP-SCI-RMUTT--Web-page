<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Graphene
 * @since Graphene 1.0
 */
get_header(); ?>

 <!--body-->

 <div class="container">
        <div class="row">
            <section class="main a">
            <article>
                <h2 class="section-title">กิจกรรมและข่าวสาร</h2>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card-box is-left" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <figure class="imagestyle">
                        <img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2022/06/20220622-coopsci-01.jpg">
                    </figure>
                    <div class="container">
                        <span>24 มีนาคม 2565</span>
                        <div class="title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></div>
                        <div class="content"><p><?php the_content(); ?></p>
                        </div>
                    </div>   
                    <footer class="entry-footer">
                         <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                    </footer>                          
                </div>
            <?php endwhile; endif; ?>
            </article>
            </section>
        </div>
    </div>

<?php get_footer(); ?>