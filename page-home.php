<?php
// Template Name: Menu da Semana
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="container">
      <h2 class="subtitulo"><?php the_title(); ?></h2>

      <div class="menu-prato grid-8">
        <h2><?php the_field('menu_peixes'); ?></h2>
        <ul>
          <li>
            <span><sup><?php the_field('cifrao_preco'); ?></sup>
              <?php the_field('preco_produto_1'); ?>
            </span>
            <div>
              <h3><?php the_field('nome_produto_1'); ?></h3>
              <p><?php the_field('descricao_produto_1'); ?></p>
            </div>
          </li>
          <li>
            <span><sup><?php the_field('cifrao_preco'); ?></sup>
              <?php the_field('preco_produto_2'); ?>
            </span>
            <div>
              <h3><?php the_field('nome_produto_2'); ?></h3>
              <p><?php the_field('descricao_produto_2'); ?></p>
            </div>
          </li>
          <li>
            <span><sup>R$</sup>159</span>
            <div>
              <h3>Camarão com Catupiry</h3>
              <p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="menu-prato grid-8">
        <h2>Carnes</h2>
        <ul>
          <li>
            <span><sup>R$</sup>129</span>
            <div>
              <h3>Picanha Nobre no Alho</h3>
              <p>Pequenas tiras de salmão feitas no alho e óleo</p>
            </div>
          </li>
          <li>
            <span><sup>R$</sup>89</span>
            <div>
              <h3>Cupim no Bafo</h3>
              <p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
            </div>
          </li>
          <li>
            <span><sup>R$</sup>159</span>
            <div>
              <h3>Hamburger Artesanal Rest</h3>
              <p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
            </div>
          </li>
        </ul>
      </div>

    </section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>