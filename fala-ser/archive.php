<?php
/* 
  Template name: Blog
*/
get_header();

?>
<section id="blog">
<div class="header-title">
    <h1>
      Blog
    </h1>
  </div>
  <main>
<?php
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $sticky = get_option( 'sticky_posts' );
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      'paged' => $paged
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
    wp_reset_postdata();
    endif;
    ?>
    </main>
    <nav>
    <?php 
      echo paginate_links( array(
          'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
          'total'        => $the_query->max_num_pages,
          'current'      => max( 1, get_query_var( 'paged' ) ),
          'format'       => '?page=%#%',
          'show_all'     => false,
          'type'         => 'plain',
          'end_size'     => 2,
          'mid_size'     => 1,
          'add_args'     => false,
          'add_fragment' => '',
    ));?>
    </nav>
  </section>
  <style>
    #blog nav {
      max-width:70%;
      margin:50px auto;
      display: flex;
    }
    .prev, .next {
      background-color: var(--primary-color);
      padding: 0.4rem 0.8rem;
      color: white;
      text-decoration: none;
      border-radius:1.8em;
    }
    .prev:hover, .next:hover {
      background-color: var(--primary-color-dark);
    }
    .prev:focus, .next:focus {
      background-color: var(--primary-color-darker);
    }
    .page-numbers:not(.prev):not(.next) {
      display: none;
    }
  </style>
<?php
get_footer();
?>