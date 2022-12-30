
  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title><?php bloginfo('name'); ?></title>

      <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
      <!-- Header WordPress -->
      <?php wp_head(); ?>
      <!-- Fechamento Header WordPress -->
    </head>

    <body>
      <header>
        <nav>
          <ul>
            <li class="current_page_item"><a href="/sitesRC/wordpress/">Menu</a></li>
            <li><a href="/sitesRC/wordpress/sobre/">Sobre</a></li>
            <li><a href="/sitesRC/wordpress/contato/">Contato</a></li>
          </ul>
        </nav>

        <h1><img src="<?php echo get_stylesheet_directory_uri() ?>/img/rest.png" alt="Rest"></h1>

        <p>Rua Marechal 29 – Copacabana – Rj</p>
        <p class="telefone">2422-9201</p>
      </header>
