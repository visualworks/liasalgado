<?php get_header(); ?>

<div class="grid_8 posts-wrap">
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <div class="post">
        <h1 class="titulo-post"><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <div class="clear"></div>
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>