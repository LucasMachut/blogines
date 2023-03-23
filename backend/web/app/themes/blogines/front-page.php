<div class="presentation">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            </div>
            </div>
        </div>
    </div>


    <?php
get_header();
// Création d'une custom query pour recuperer les trois derniers posts
// publiés
$the_query = new WP_Query([
  "posts_per_page" => 3,
  "post_type" => 'post',
  "post_status" => 'publish',
  "orderby" => 'date',
  "order" => 'ASC'
]);
?>

<body>
<?php get_template_part('template_parts/header_menu') ?>
  <div class="header-container" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?= the_post_thumbnail_url(); ?>) fixed 50% 50%;">
    <div class="header-infos">
      <h1>Voir Ailleurs</h1>
      <div id="line"></div>
      </div>
    </div>
  </div>

  <main>
    <div class="present-container">
      <div class="present-container-text">
        <h2>En quête d'aventures</h2>
        <p><?php the_field('paragraphe_presentation'); ?></p>
      </div>
      <div class="present-container-img">
        <img src="<?= get_template_directory_uri() . '/assets/img/photoProfile.jpeg' ?>" alt="photo de profile Lucas Machut">
      </div>
    </div>

    <div class="last-articles-container">
      <h2 id="title-last-article">Derniers articles</h2>
      <div class="post-gallery">
      <?php if($the_query->have_posts()) : ?>
        <?php while($the_query->have_posts()) : ?>
          <?php $the_query->the_post() ?>
          <a href="<?php the_permalink() ?>" class="post_link">
            <article class="post">
              <img class="post-image" src="<?= has_post_thumbnail() ? the_post_thumbnail_url() : "https://picsum.photos/1000/900?random=1" ?>">
              <h3 class="post-title"><?php the_title() ?></h3>
            </article>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <a href="#" id="all-articles-button">
          <h4>Voir tous les articles</h4>
      </a>
    </div>
  </main>

<footer>
  <?php get_template_part('template_parts/insta-banner') ?>
</footer>

<?php
get_footer();
?>