<!doctype html>
<!-- <html lang="pt-br" itemscope <?php //if ( is_single() ) { ?>itemtype="http://schema.org/Article"<?php //} else { ?>itemtype="http://schema.org/Blog"<?php //} ?>> -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo( 'name' ); ?></title>

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-39610198-1', 'liasalgado.com.br');
    ga('send', 'pageview');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
    {lang: 'pt-BR'}
</script>-->

<!-- <div class="top-ad-wrap">
    <a href="http://www.novaconcursos.com.br/apostila-concurso/inss-instituto-nacional-do-seguro-social?utm_source=lia+salgado&amp;utm_medium=midiaonline&amp;utm_content=banner728+90&amp;=banner&amp;utm_campaign=INSS" target="_blank">
        <img src="http://www.liasalgado.com.br/wp-content/uploads/2014/06/banner_seap_728_90.jpg" />
    </a>
</div> -->

<div class="top-foto">
    <div class="container_12">
        <div class="grid_7 prefix_5">
            <span class="header-text-blog">Blog da</span>
            <span class="header-text-title">Lia Salgado</span>

            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="menu">
    <div class="container_12">
        <div class="grid_9">
            <?php wp_nav_menu( array( 'theme_location' => 'topo' ) ); ?>
        </div>

        <div class="grid_3">
            <form role="search" method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
                <input name="s" id="s" type="text" placeholder="Buscar">
            </form>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="main-content">
    <div class="container_12">
        <?php get_sidebar(); ?>