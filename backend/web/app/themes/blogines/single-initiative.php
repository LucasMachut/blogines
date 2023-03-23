<?php
get_header();
the_terms( get_the_ID() , 'initiatives' ); ?>

<body>
    <?php get_template_part('template_parts/header_menu') ?>
    <main>
        <?php if(have_posts()) : ?>
            <?php while ( have_posts() ): ?>
                <?php the_post() ?>
                <div class="single-post-img">
                    <img src="<?= the_post_thumbnail_url(); ?>" alt="">
                </div>                
                <h2 class="section-title"><?= the_title() ?></h2>

                <div class="single-post-content">
                    <?php the_content() ?>
                </div>
                <div class="single-post-place">
                    <?php the_field('place'); ?>
                </div>


                <div class="single-post__meta">Par <a href="javascript:void(0)"><?php the_author() ?></a>, <?php the_time('d F Y') ?></div>

            <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_template_part('template_parts/insta-banner') ?>
    
<?php
get_footer();
?>