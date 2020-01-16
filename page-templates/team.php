<?php
/*
Template Name: Equipe
*/
?>

<?php get_header(); ?>

<main>
    <section class="team">
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
                <img class="team-member-face" <?php echo the_post_thumbnail('single_thumbnail'); ?> >
                <h2 class="team-member-name"><?php the_title(); ?></h2>
                <p class="team-member-info"><?php the_content(); ?></p>
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