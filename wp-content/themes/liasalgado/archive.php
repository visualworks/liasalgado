<?php get_header(); ?>

    <div class="grid_8 posts-wrap">
        <?php if ( have_posts() ): ?>
        <?php if ( is_month() ) { query_posts( 'year=' . get_the_time( 'Y' ) . '&monthnum=' . get_the_time( 'm' ) . '&posts_per_page=15' ); ?>
        <?php } ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <div class="grid_7 alpha">
                <h1 class="titulo-post"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                <p><?php the_content( 'Leia mais' ); ?></p>
            </div>
            <div class="grid_1 alpha omega data">
                <span class="dia-semana"><?php the_time('D'); ?></span>
                <span class="dia-mes"><?php the_time('d'); ?></span>
                <span class="mes-ano"><?php the_time('M/Y'); ?></span>
            </div>

            <div class="clear"></div>
        </div>
        <?php endwhile; else: ?>
        <?php endif; ?>

        <div class="paginacao">
            <?php paginacao(); ?>
            <div class="clear"></div>
        </div>
    </div>

    <div class="clear"></div>

<?php get_footer(); ?>