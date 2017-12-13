<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<div class="grid_8 posts-wrap">
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <div class="post">
        <h1 class="titulo-post"><?php the_title(); ?></h1>

        <p>Preencha o formulário abaixo ou envie um e-mail para <a href="mailto:contato@liasalgado.com.br">contato@liasalgado.com.br</a>.</p>

        <form action="http://www.gtx.ag/forms/liasalgado/enviar-contato.php" id="contato-form" method="post">
            <p>
                <label for="Nome"><span>Nome</span></label>
                <input type="text" name="Nome" id="Nome">
            </p>

            <p>
                <label for="Email"><span>Email</span></label>
                <input type="text" name="Email" id="Email">
            </p>

            <p>
                <label for="Assunto"><span>Assunto</span></label>
                <input type="text" name="Assunto" id="Assunto">
            </p>

            <p>
                <label for="Mensagem"><span>Mensagem</span></label>
                <textarea name="Mensagem" id="Mensagem"></textarea>
            </p>

            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>