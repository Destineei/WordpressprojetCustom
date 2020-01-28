
<?php
/*
Template Name: Propositions
*/

?>

<?php get_header(); ?>

<main class="propositions">
    <div class="hero" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>')">
        <h1>Adrien Demaegdt, <br> une nouvelle vision de Paris</h1>
    </div>

<?php 
    $terms = get_terms( 'genre', 'orderby=count&hide_empty=0' );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    echo '<ul>';
    foreach ( $terms as $term ) {
      /*if(isset($_GET['genre']) && genre!='')
      {
        if($term->slug == $_GET['genre'])
        {
          $current="en_cours";
        }
        else {
          $current='';
        }
      }
      echo '<li><a href="'.get_permalink(73).'?genre='.$term->slug.'" class="'.$current.'">' . $term->name . '</a></li>';
      */
        echo '<li><a href="'.get_permalink(73).'?genre='.$term->slug.'" >' . $term->name . '</a></li>';
    }
    echo '</ul>';
   }
?>
<?php
$the_query = new WP_Query( array( 'post_type'=>'propositions') );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts()){
        $the_query->the_post();
?>

<div class="tags">
<?php

    $terms = get_the_terms(get_the_id(), 'thematique');
    $count = count( $terms );
    if ( $count > 0 ) {
        foreach ( $terms as $term ) {
            $cat = $term->slug;

            ?>
            <a href="#"> <?php echo $cat; ?> </a>
            <?php
        }

    }
    ?>
</div>
 <?php   }} ?>

            





            
<!-- faire le menu tags a cliquer  -->
    <?php
// The Query
$the_query = new WP_Query( array( 'post_type'=>'propositions') );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts()){
        $the_query->the_post();
?>

<?php
// recuperation des thématiques, ajout dans un 
$catList = array();
// $catall = "";
    // a utiliser dans la boucle WordPress ou ds la WP_QUERY
    $terms = get_the_terms(get_the_id(), 'thematique');
    $count = count( $terms );
    if ( $count > 0 ) {
        foreach ( $terms as $term ) {
            echo '<li>' . $term->slug . '</li>';
            $cat = $term->slug;
            // print_r($cat);
            
            array_push($catList,$cat);
            // $catall = $catList[0] . $catList[1];
            
        }
        print_r($catList);

        // print_r($catList);
        // print_r($cat);
        // print_r($catall);

    }
    ?>

            <article class="news-article <?php foreach($catList as $cat){ echo $cat . ' '; } ?>" >
                <img class="news-thumbnail" src="<?php echo IMAGES_URL.'/sources/images/placeholder.png'; ?>" alt="image de l'actualité">
                <div>
                    <h3 class="news-title"> <?php the_title(); ?> </h3>
                    <p class="news-content"> <?php the_content(); ?></p>
                    <a class="learn-more" href="<?php the_permalink();?>"> Lire Plus </a>
                </div>
            </article>

<?php
        }
    /* Restore original Post Data */
    wp_reset_postdata();
    }
 else {
    // no posts found
};

?>


</main>
<script>let identificateur = <?php echo json_encode($catList); ?>;</script>


<?php get_footer(); ?>