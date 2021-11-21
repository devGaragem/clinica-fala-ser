<?php 

/*
  Template Name: Sobre
*/
get_header();
?>

<section id="front-page-header">
  <div class="apresentacao"   >
    <h1>
      <?php
        the_title();
      ?>
    </h1>
    <p>
      <?php
      echo get_the_content();
      ?>
    </p>
    <a href="#" class="button secondary-button rounded"> Clique aqui </a>
  </div>
  <img class="overflowing-bg" src="<?php the_post_thumbnail_url()?>" alt="">
</section>
<section id="colaboradores">
  <?php 
    $args = array(
      'post_type' => 'colaborador',
      'posts_per_page' => -1
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts(  )):
      while($the_query->have_posts()): $the_query->the_post();
  ?>  
    <article>
      <img src="<?php the_post_thumbnail_url();?>" alt="">
      <div class="content">
        <h1>Stephanie Barbosa</h1>
        <p>Lorem ipsum dolor sit amet</p>
      </div>
    </article>
    <hr>
  <?php
      endwhile;
    endif;
  ?>
</section>
<?php 
get_footer();
?>