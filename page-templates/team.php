<?php
/*
Template Name: Equipe
*/
?>

<?php get_header(); ?>

<main class="team">
    <div class="hero" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>')">
        <h1>Adrien Demaegdt, <br> une nouvelle vision de Paris</h1>
    </div>
    <section class="team-container">
    <?php
        $args = array( 'post_type' => 'equipe' );
        $the_query = new WP_Query( $args );
        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                // if(has_post_thumbnail())
                // {
                //   the_post_thumbnail( 'single_thumbnail');
                // }
    ?>
                <article class="team-member">
                    <div class="team-member-content">
                        <?php the_post_thumbnail('single_thumbnail',array('class' => 'team-member-face')); ?>
                        <h2 class="team-member-name"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <a class="learn-more" href="<?php the_permalink();?>"> Lire Plus </a>
                    </div>
                </article>
            
                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
                ?>
    </section>
</main>

<?php get_footer()?>