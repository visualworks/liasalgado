<?php get_header(); ?>

    <div class="grid_8 posts-wrap">
        <h1 class="resultado-busca" style="padding-top:18px">Categoria: <span class="termo-busca"><?php single_cat_title(); ?></span></h1>
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post();?>
        <div class="post">
            <div class="grid_7 alpha">
                <h1 class="titulo-post"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            
                <p><?php the_content('Leia mais'); ?></p>
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
    </div>

    <div class="clear"></div>

<?php get_footer(); ?>