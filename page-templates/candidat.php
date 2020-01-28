<?php
/*
Template Name: Candidat
*/
?>
<?php get_header(); ?>

<main role="main" class="probootstrap-main js-probootstrap-main">
    <div class="hero" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>')">
        <h1>Adrien Demaegdt, <br> une nouvelle vision de Paris</h1>
    </div>
      <!-- <h2>Un scientifique ouvert et passioné</h2>
          <p>
              Jeune étudiant passionné de Mathématiques, il arrive à Paris en 1990,
              dans le 5ème arrondissement, pour suivre une classe préparatoire au lycée Louis-le-Grand.
              Il intègre ensuite l’École normale supérieure (ENS) où il poursuit ses études supérieures.
              Ses années estudiantines marquent sa vie : découverte des autres, ouverture sur les arts et
              la culture.
              Après une thèse soutenue en 1998 et une Habilitation à diriger des recherches obtenue en 2000,
              il devient, à 27 ans, Professeur à l’École normale supérieure de Lyon. Il y enseigne jusqu’en
              2009 avant de rejoindre l’Université Lyon 1.
              Sa carrière d’enseignant-chercheur l’amène à enseigner à Atlanta, Berkeley et Princeton.
              Persuadé que c’est en France qu’il aura le plus d’opportunités pour agir au service de la société, il fait le choix de réaliser sa carrière au sein des institutions françaises.
          </p> -->
    
    <?php
    // boucle WordPress
        if (have_posts()){
            while (have_posts()){
                the_post();
    ?>
            <section class="candidate-info">
              <h2><?php the_title(); ?></h2>
              <p class="content">
                <?php the_content(); ?>
              </p>
            </section>
            <?php
            }
        }
    ?>

</main>

<?php get_footer(); ?>