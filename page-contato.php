<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="container contato">
      <h2 class="subtitulo"><?php the_title(); ?></h2>

      <div class="grid-16">
        <a href="<?php the_field('link_mapa'); ?>" target="_blank"><img src="<?php the_field('rest_mapa'); ?>" alt="Mapa para o rest"></a>
      </div>

      <div class="grid-1-3 contato-item">
        <h2><?php the_field('titulo_dados'); ?></h2>
        <p><?php the_field('numero_dados'); ?></p>
        <p><?php the_field('contato_dados'); ?></p>
        <p><?php the_field('facebook_dados'); ?></p>
      </div>
      <div class="grid-1-3 contato-item">
        <h2><?php the_field('titulo_horarios'); ?></h2>
        <p><?php the_field('horarios_paragrafo_1'); ?></p>
        <p><?php the_field('horarios_paragrafo_2'); ?></p>
        <p><?php the_field('horarios_paragrafo_3'); ?></p>
      </div>
      <div class="grid-1-3 contato-item">
        <h2><?php the_field('titulo_endereco'); ?></h2>
        <p><?php the_field('endereco_paragrafo_1'); ?></p>
        <p><?php the_field('endereco_paragrafo_2'); ?></p>
        <p><?php the_field('endereco_paragrafo_3'); ?></p>
      </div>
    </section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>