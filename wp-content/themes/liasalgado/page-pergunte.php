<?php /* Template Name: Pergunte */ ?>
<?php get_header(); ?>

<div class="grid_8 posts-wrap">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
    <div class="post">
        <h1 class="titulo-post"><?php the_title(); ?></h1>

        <p>Gostaria de me fazer uma pergunta? Preencha o formulário abaixo que responderei o mais breve possível!</p>

        <form action="http://www.gtx.ag/forms/liasalgado/enviar-pergunta.php" id="pergunta-form" method="post">
            <p>
                <label for="Nome"><span>Nome</span></label>
                <input type="text" name="Nome" id="Nome">
            </p>

            <p>
                <label for="Email"><span>Email</span></label>
                <input type="text" name="Email" id="Email">
            </p>

            <p>
                <label for="Pergunta"><span>Pergunta</span></label>
                <textarea name="Pergunta" id="Pergunta"></textarea>
            </p>

            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>

        <div class="clear"></div>
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>