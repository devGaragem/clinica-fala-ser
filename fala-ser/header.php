<?php 
  function assets_url() {
    echo get_bloginfo('template_url').'/assets';
  }
?>
<html>
  <head>
    <?php 
      wp_head();
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Mulish:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php assets_url();?>/glider.min.css">
    <script src="<?php assets_url();?>/glider.min.js"></script>
  </head>
  <body>
    <header>
      <nav class="mobile-nav">
        <a href="<?php echo home_url();?>">
          <img class="site-logo" src="<?php assets_url();?>/img/fala-ser.svg" alt="Logo da clínica">
        </a>
        <a class="mobile-toggler" href="javascript:document.querySelector('.nav-list').classList.toggle('hidden');">☰</a>
        <ul class="nav-list hidden">
          <li>
            <a href="<?php echo home_url();?>/a-clinica">A Clínica</a>
          </li>
          <li>
            <a href="<?php echo home_url();?>#servicos">Serviços</a>
          </li>
          <li>
            <a href="<?php echo home_url();?>/blog">Blog</a>
          </li>
          <li>
            <a href="#contato">Contato</a>
          </li>
        </ul>
      </nav>
      <nav class="navigation-bar">
        <ul>
          <li>
            <a href="<?php echo home_url();?>/a-clinica">A Clínica</a>
          </li>
          <li>
            <a href="<?php echo home_url();?>#servicos">Serviços</a>
          </li>
          <li>
            <a href="<?php echo home_url();?>">
              <img class="site-logo" src="<?php assets_url();?>/img/fala-ser.svg" alt="Logo da clínica">
            </a>
          </li>
          <li>
            <a href="<?php echo home_url();?>/blog">Blog</a>
          </li>
          <li>
            <a href="#contato">Contato</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
    <img class="shape shape-esquerda <?php echo is_home() ? 'home' : '' ?>" src="<?php assets_url();?>/img/shape-esquerda.svg" alt="">
    <img class="shape shape-direita  <?php echo is_home() ? 'home' : ''?>" src="<?php assets_url();?>/img/shape-direita.svg" alt="">
