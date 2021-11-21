<?php
get_header();
?>

<section id="front-page-header">
  <div class="apresentacao"   >
    <h1>
      <?php
        echo get_theme_mod('sobre_section_title');
      ?>
    </h1>
    <p>
      <?php
        echo get_theme_mod('sobre_section_content');
      ?>
    </p>
    <a href="#" class="button secondary-button rounded"> Clique aqui </a>
  </div>
  <img class="overflowing-bg" src="<?php echo get_theme_mod('image_setting');?>" alt="">
</section>
<section id="servicos">
  <h1>
    Serviços
  </h1>
  <main>
    <a href="#" class="prev">
      <img src="<?php assets_url();?>/img/Icon_Seta_Esquerda.svg" width="60px" alt="">
    </a>
    <div>
    <?php
    $args = array(
      'post_type' => 'servicos',
      'posts_per_page' => -1
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
      while($the_query->have_posts()): $the_query->the_post();
    ?>
    <article id="<?php echo the_ID();?>">
      <img src="<?php the_post_thumbnail_url(  );?>" alt="">
      <h2 class="text-secondary">
        <?php
          the_title();
        ?>
      </h2>
      <?php the_content() ?>
    </article>
    <?php  
    endwhile;
    wp_reset_postdata(  );
    endif;
    ?>
    </div>
    <a href="#" class="next">
      <img src="<?php assets_url();?>/img/Icon_Seta_Direita.svg" width="60px" alt="">
    </a>
  </main>
</section>
<section id="blog">
  <div class="header-title">
    <h1>
      Blog
    </h1>
  </div>
  <main>
    <?php
     $args = array(
      'post_type' => 'post',
      'posts_per_page' => 4
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
      while($the_query->have_posts()): $the_query->the_post();
    ?>
    <article>
      <img src="<?php the_post_thumbnail_url(  );?>" alt="">
      <div class="content">
        <h3 class="text-secondary">
          <?php
            the_title();
          ?>
        </h3>
        <?php the_excerpt(  ); ?>
        <a href="<?php the_permalink( );?>" class="button primary-button rounded small-button">Continuar</a>
        <hr>
        <sub>Publicado por <b><?php echo get_the_author()?></b> | <time><?php echo get_the_date( );?></time></sub>
      </div>
    </article>
    <?php  
    endwhile;
    wp_reset_postdata(  );
    endif;
    ?>
  </main>
  <div class="visit-blog">
    <a href="/blog" class="button primary-button rounded"> Visitar o blog</a>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    new Glider(document.querySelector('#servicos main > div'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        arrows: {
          prev: '.prev',
          next: '.next'
        },
        responsive: [
          {
            breakpoint: 700,
            settings: {
              slidesToShow: '2',
              slidesToScroll: '2',
              itemWidth: 150,
              duration: 0.25
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: '3',
              slidesToScroll: '3',
              itemWidth: 150,
              duration: 0.25
            }
          }
        ]
      });
  })
</script>
<?php
get_footer();
?>