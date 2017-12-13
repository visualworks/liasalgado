<?php get_header(); ?>

<div class="grid_8 posts-wrap">
<?php if (have_posts()) : the_post() ?>
    <div class="post single">
        <div class="grid_7 alpha">
            <h1 class="titulo-post"><?php the_title(); ?></h1>

            <?php the_content(); ?>
        </div>

        <div class="grid_1 alpha omega data">
            <span class="dia-semana"><?php the_time( 'D' ); ?></span>
            <span class="dia-mes"><?php the_time( 'd' ); ?></span>
            <span class="mes-ano"><?php the_time( 'M/Y' ); ?></span>
        </div>

        <div class="clear"></div>

        <div class="meta">
            <p>Categoria: <?php the_category( ', ' ); ?> &bull; <?php the_tags(); ?></p>
        </div>

        <div class="clear"></div>
    </div>
<?php endif; ?>

    <div class="comentarios">
        <?php comments_template( '', true ); ?>
    </div>
</div>

<div class="clear"></div>

<?php get_footer(); ?>