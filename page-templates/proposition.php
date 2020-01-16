
<?php
/*
Template Name: Propositions
*/

?>

<?php get_header(); ?>

<main>

    <section class="propositions">
        <div class="tags">
            <a class="ecologie" href="">écologie</a>
            <a class="transports" href="">transports</a>
            <a class="securite" href="">sécurité</a>
            <!-- <a href="">logement</a>
            <a href="">services publics</a>
            <a href="">gestions des finances</a> -->
        </div>
    <?php
// The Query
$the_query = new WP_Query( array( 'category_name' ) );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts()){
        $the_query->the_post();
?>
<?php $category = get_the_category();
$mycat = $category[0]->cat_name;
$mycat2 = get_cat_id($mycat); 
echo $mycat2;?>
        <section class="news">
        <article class="news-article">
            <img class="news-thumbnail" src="<?php echo IMAGES_URL.'/sources/images/placeholder.png'; ?>" alt="image de l'actualité">
            <div>
                <h3 class="news-title"> <?php the_title(); ?> </h3>
                <p class="news-content"> <?php the_content(); ?></p>
                <a class="learn-more" href="<?php the_permalink();?>"> Lire Plus </a>
            </div>
        </article>
        </section>

<?php
        }
    /* Restore original Post Data */
    wp_reset_postdata();
    }
 else {
    // no posts found
};

?>

</section>

<?php get_footer(); ?>