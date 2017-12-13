<?php /* Template Name: Parceiros */ ?>
<?php get_header(); ?>

<div class="grid_8 posts-wrap">
<?php if ( have_posts() ) : the_post() ?>
    <div class="post">
        <h1 class="titulo-post">Parceiros</h1>

        <div class="parceiro">
            <div class="grid_2 alpha">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/avatar-alex-mendes.jpg" class="foto-colaborador">
            </div>

            <div class="grid_6 omega">
                <h5>Alex Mendes</h5>
                <p>Bacharel em Filosofia pela UFRJ e em Geografia; Pós Graduado em Geopolítica; Mestrando em Economia. Professor há 15 anos ministrando aulas em vários estados, tais como: Rio de Janeiro, Minas Gerais, Alagoas, São Paulo.</p>
                <p>É colaborador da Folha Dirigida, do Jornal dos Concursos, do site G1. Ministra aulas de Atualidades, Economia e Finanças Públicas, em cursos preparatórios para concursos em locais como Academia do Concurso Público, Maxx Concursos, Ícone Concursos, Pio Concursos, PLA Concursos, LFG, Cejuris.</p>
            </div>

            <div class="clear"></div>
        </div>

        <div class="parceiro">
            <div class="grid_2 alpha">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/avatar-claudio-cardoso.jpg" class="foto-colaborador">
            </div>

            <div class="grid_6 omega">
                <h5>Cláudio Cardoso</h5>
                <p>Cláudio Cardoso é Fiscal de Rendas do Município do Rio de Janeiro, concursado em 2003 e professor de contabilidade para concursos públicos desde este mesmo ano. Especializado nas áreas fiscal e contábil, mas atuando também em outros certames onde sua matéria esteja envolvida, já fez parte do corpo de professores das mais conceituadas instituições de ensino para concursos do país.</p>
                <p>Atualmente seus materiais podem ser encontrados no <a href="http://www.canaldosconcursos.com.br" target="_blank">Canal dos Concursos</a>.</p>
            </div>

            <div class="clear"></div>
        </div>

        <div class="parceiro">
            <div class="grid_2 alpha">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/avatar-sergio-camargo.jpg" class="foto-colaborador">
            </div>

            <div class="grid_6 omega">
                <h5>Sérgio Camargo</h5>
                <p>Sérgio Camargo é Advogado especialista em Concurso Público (<a href="mailto:sergiocamargo@sergiocamargo.com">sergiocamargo@sergiocamargo.com</a>).</p>
            </div>

            <div class="clear"></div>
        </div>

        <div class="parceiro">
            <div class="grid_2 alpha">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/avatar-elon-junior.jpg" class="foto-colaborador">
            </div>

            <div class="grid_6 omega">
                <h5>Elon Junior</h5>
                <p>Escritor, Palestrante, Coach Físico para Concursos, ex-Diretor da EFISICA, Subtenente do Corpo de Bombeiros, Árbitro de Atletismo, Professor em cursos preparatórios, ex-membro de bancas examinadoras (PF, PCERJ, CBMERJ, SEAP-RJ e GM de Nilópolis) em TESTE FÍSICO.</p>
                <p>Em 2000 foi transferido para o Centro de Educação Física e Desportos do Corpo de Bombeiros RJ, onde o subtenente Elon Junior começou a atuar diretamente como avaliador no TESTE DE APTIDÃO FÍSICA, em 2004 formado em Educação Física e com a percepção dos elevados índices de reprovação nesta fase do certame, passou a preparar candidatos que sonhavam em ingressar na carreira pública via área de segurança pública ou militar que exigem o TAF.</p>
                <p>Em 2011 publicou o livro Preparação Física para Concursos, pela editora Campus Elsevier e atualmente computa mais de 1000 aprovações no TESTE FÍSICO.</p>
                <ul>
                    <li><strong>Curta:</strong> <a href="http://www.facebook.com/elonjuniorprofessor/" target="_blank">www.facebook.com/elonjuniorprofessor</a></li>
                    <li><strong>E-mail:</strong> <a href="mailto:professorelonjunior@elonjunior.com.br">professorelonjunior@elonjunior.com.br</a></li>
                </ul>
            </div>

            <div class="clear"></div>
        </div>

        <div class="parceiro">
            <div class="grid_2 alpha">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/avatar-pedro-melo.jpg" class="foto-colaborador">
            </div>

            <div class="grid_6 omega">
                <h5>Pedro Melo</h5>
                <p>Pedro Melo é produtor e cinéfilo.</p>
            </div>

            <div class="clear"></div>
        </div>

        <div class="parceiro">
            <div class="grid_2 alpha">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/avatar-nanci-azevedo.jpg" class="foto-colaborador">
            </div>

            <div class="grid_6 omega">
                <h5>Nanci Azevedo Cavaco</h5>
                <p>Nanci Azevedo Cavaco é sócia fundadora da Academia do Cérebro, que tem como missão melhorar a performance do indivíduo de forma cognitiva e emocional para alcançar melhores resultados e vencer desafios. Neurocientista com especialização em memória, aprendizagem e TDAH (Neuroaprendizagem); Palestrante na área da Inteligência, aprendizagem cognitiva e emocional; Training e coach em Programação Neurolinguística (PNL); Escritora de diversos artigos e livros da Editora Ferreira (Aumente sua Inteligência e Consumismo é coisa de sua cabeça); e da Editora Método (Turbine seu Cérebro – 4a. edição); Psicopedagoga e Psicanalista.</p>
            </div>

            <div class="clear"></div>
        </div>
    </div>
<?php endif; ?>
</div>

<?php get_footer(); ?>