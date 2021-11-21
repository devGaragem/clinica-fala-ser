<?php
get_header();
?>

<article>
  <h1>
    <?php the_title();?>
  </h1>
  <sub>Publicado por <?php echo get_the_author();?> | <?php echo get_the_date();?></sub>
  <img src="<?php the_post_thumbnail_url();?>" alt="">
  <p>
    <?php the_content(); ?>
  </p>
  <hr>

  <nav class="social-media">
    <a href="https://facebook.com"><img src="<?php assets_url();?>/img/social-facebook.png" width="30px" class="" alt=""></a>
    <a href="https://linkedin.com"><img src="<?php assets_url();?>/img/social-linkedin.png" width="30px" class="" alt=""></a>
    <a href="https://web.whatsapp.com"><img src="<?php assets_url();?>/img/social-whatsapp.png" width="30px" class="" alt=""></a>
    <a href="https://mail.mail.mail"><img src="<?php assets_url();?>/img/social-mail.png" width="30px" class="" alt=""></a>
    <a href="javascript:window.print();"><img src="<?php assets_url();?>/img/social-print.png" width="30px" class="" alt=""></a>
  </nav>
  <hr>

</article>

<style>
  article {
    max-width: 900px;
    margin: 70px auto;
  }
  article > h1 {
    font-size:2.25rem;
    color: var(--primary-color);
    margin: 0;
  }
  article > sub {
    margin: 10px 0;
    display: block;
  }
  article > img {
    width: 100%;
  }
  article p {
    font-family: 'Mulish';
  }
  .social-media {
    display: flex;
    justify-content: center;
  }
  .social-media a:not(:first-child) {
    margin-left: 5px;
  }
  @media screen and (max-width: 996px) {
    article {
      max-width: 700px;
    }
  }
  @media screen and (max-width: 665px) {
    article {
      max-width: 80%;
    }
  }
</style>
<?php
get_footer();
?>