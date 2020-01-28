<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
<?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
?>
        <section class="candidate">
            <img class="candidate-face" <?php echo the_post_thumbnail('single_thumbnail','860','575',true); ?> alt="imaAGEWORDPRESS">

            <div>
                <h2>HERECandidat<?php the_title(); ?></h2>
                <p> <?php the_content(); ?></p>
                <a class="learn-more" href="<?php the_permalink(); ?>">En lire plus</a>
            </div>
        </section>

        <section class="propositions">
            <h2>HEREPropositions<?php the_title(); ?></h2>
            <div class="tags">
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <img src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                        <h3><?php the_title(); ?> </h3>
                    </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <img src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                        <h3><?php the_title(); ?> </h3>
                    </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <img src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                        <h3><?php the_title(); ?> </h3>
                    </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <img src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                        <h3><?php the_title(); ?> </h3>
                    </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <img src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                        <h3><?php the_title(); ?> </h3>
                    </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <img src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                        <h3><?php the_title(); ?> </h3>
                    </div>
                </a>
            </div>
        </section>

        <section class="team">
            <a href="<?php the_permalink(); ?>#"><h2>HERETeam<?php the_title(); ?></h2></a>
            <p><?php the_content(); ?> </p>
            <article class="team-member">
                <img class="team-member-face" src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                <div>
                    <h3 class="team-member-name"><?php the_title(); ?></h3>
                </div>
            </article>
            <article class="team-member">
                <img class="team-member-face" src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                <div>
                    <h3 class="team-member-name"><?php the_title(); ?></h3>
                </div>
            </article>
            <article class="team-member">
                <img class="team-member-face" src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                <div>
                    <h3 class="team-member-name"><?php the_title(); ?></h3>
                </div>
            </article>
            <article class="team-member">
                <img class="team-member-face" src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                <div>
                    <h3 class="team-member-name"><?php the_title(); ?></h3>
                </div>
            </article>
        </section>

        <section class="news">
            <a href="<?php the_permalink(); ?>"><h2>HERENews<?php the_title(); ?>Les dernières nouvelles...</h2></a>
            <article class="news-article">
                <img class="news-thumbnail" src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                <div>
                    <h3 class="news-title"> <?php the_title(); ?> </h3>
                    <p class="news-content"> <?php the_content(); ?> </p>
                    <a class="learn-more" href="<?php the_permalink(); ?>"> Lire Plus </a>
                </div>
            </article>
            <article class="news-article">
                <img class="news-thumbnail" src="<?php echo IMAGES_URL.'/sources/images';?>" alt="image">
                <div>
                    <h3 class="news-title"><?php the_title(); ?></h3>
                    <p class="news-content"> <?php the_content(); ?> </p>
                    <a class="learn-more" href="<?php the_permalink(); ?>"> Lire Plus </a>
                </div>
            </article>
        </section>
        <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>

</main>
<?php get_footer(); ?>