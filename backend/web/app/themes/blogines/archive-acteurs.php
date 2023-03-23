<?php
/* Template Name: days */ 

get_header();
the_terms( get_the_ID() , 'acteurs' ); ?>


<body>
    <?php get_template_part('template_parts/header_menu'); ?>
    <main>
        <h2 class="home-title"><?= single_cat_title() ?></h2>
        <div class="articles-exerpt-list">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>

                    <a href="<?php the_permalink() ?>">
                        <article class="article-exerpt-item">
                            <div class="article-exerpt-img">
                                <img src="<?= the_post_thumbnail_url(); ?>" alt="image du post">
                            </div>
                            <div class="article-exerpt-infos">
                                <h3 class="article-exerpt-title"><?= the_title() ?></h3>
                                <p class="article-exerpt-text"><?= get_the_excerpt() ?></p>
                            </div>
                        </article>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer();
?>
