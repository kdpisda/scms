<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Gallery</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-red.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/gallery.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php echo $title; ?></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
          <?php if(isset($user) && $user != false){ ?>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>dashboard"><i class="material-icons">&#xE871;</i> Dashbooard</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>gallery/upload"><i class="material-icons">&#xE2C6;</i> Upload</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE8AF;</i> FAQ</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>dashboard/logout"><i class="material-icons">&#xE154;</i> Logout</a>
            <?php }else {?>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>login"><i class="material-icons">&#xE88A;</i> Login</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE8AF;</i> FAQ</a>
          <?php } ?>
          
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><?php echo $title; ?></span>
    <nav class="mdl-navigation">
      <?php if(isset($user) && $user != false){ ?>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>dashboard"><i class="material-icons">&#xE871;</i> Dashbooard</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>gallery/upload"><i class="material-icons">&#xE2C6;</i> Upload</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE8AF;</i> FAQ</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>dashboard/logout"><i class="material-icons">&#xE154;</i> Logout</a>
            <?php }else {?>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>login"><i class="material-icons">&#xE88A;</i> Login</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">&#xE8AF;</i> FAQ</a>
          <?php } ?>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
        <div class="mdl-grid">
        <?php if(isset($images) && $images != null){
            $count = 0;
            foreach($images as $img_cards):
            if($count == 0){ ?>
                <div class="mdl-cell mdl-cell--2-offset-desktop mdl-cell--3-col-desktop">
                    <div class="demo-card-image mdl-card mdl-shadow--2dp" style="background: url('<?php echo base_url().'assets/uploads/'.$img_cards['img']; ?>') center / cover;">
                        <div class="mdl-card__title mdl-card--expand"></div>
                        <div class="mdl-card__actions">
                            <span class="demo-card-image__filename"><?php echo $img_cards['img']; ?></span>
                        </div>
                    </div>
                </div>
        <?php 
            }
            elseif($count %3 == 0){ ?>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-offset-desktop mdl-cell--3-col-desktop">
                <div class="demo-card-image mdl-card mdl-shadow--2dp" style="background: url('<?php echo base_url().'assets/uploads/'.$img_cards['img']; ?>') center / cover;">
                    <div class="mdl-card__title mdl-card--expand"></div>
                    <div class="mdl-card__actions">
                        <span class="demo-card-image__filename"><?php echo $img_cards['img']; ?></span>
                    </div>
                </div>
            </div>
        <?php
            } else{ ?>
            <div class="mdl-cell mdl-cell--3-col-desktop">
                <div class="demo-card-image mdl-card mdl-shadow--2dp" style="background: url('<?php echo base_url().'assets/uploads/'.$img_cards['img']; ?>') center / cover;">
                <div class="mdl-card__title mdl-card--expand"></div>
                    <div class="mdl-card__actions">
                        <span class="demo-card-image__filename"><?php echo $img_cards['img']; ?></span>
                    </div>
                </div>
            </div>
        <?php    
            } $count++;
            endforeach;
        } 
        else{ ?>
            <h5>Sorry No images in this album!!!</h5>
        <?php }
            ?>
      </div>
    <footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Features</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">About</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">Updates</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Details</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Specs</a></li>
        <li><a href="#">Tools</a></li>
        <li><a href="#">Resources</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Technology</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">How it works</a></li>
        <li><a href="#">Patterns</a></li>
        <li><a href="#">Usage</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contracts</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">FAQ</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Questions</a></li>
        <li><a href="#">Answers</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>

  </div>

  <div class="mdl-mega-footer__bottom-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mega-footer__link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>

</footer>
  </main>
</div>
    <a href="" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"><i class="material-icons">&#xE8A3;</i> Contact Us</a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
