<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?> | <?php wp_title(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/apexcrew.css'; ?>">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="<?php echo get_home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri().'/img/logo-apex-crew-apxcrw.png'; ?>" class="img-fluid" alt=""></a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="menu">     
  
          <?php
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['menu-categorias-header'];
        $primaryNav = wp_get_nav_menu_items($menuID);
        foreach ( $primaryNav as $navItem ) {
          //echo $navItem->ID;

          $ids = array(2479,2484,2950,3803,3818,3819,4260,4261,4265,4267);

          if (in_array($navItem->ID, $ids, true)) {
        ?>    
            
        <div class="categoriaButton">
          <a href="<?=$navItem->url?>" title="<?=$navItem->title?>">
            <span class="icon"><img src="<?php echo get_stylesheet_directory_uri().'/img/'.$navItem->ID.'.png'; ?>" alt="<?=$navItem->title?>" class="h-auto w-100"></span>
            <span class="title"><?=$navItem->title?></span>
          </a>
        </div>        
        <?php } else{
          ?>
          <div class="categoriaButton">
          <a href="<?=$navItem->url?>" title="<?=$navItem->title?>">
            <span class="icon"><img src="<?php echo get_stylesheet_directory_uri().'/img/icon-generic.png'; ?>" alt="<?=$navItem->title?>" class="h-auto w-100"></span>
            <span class="title"><?=$navItem->title?></span>
          </a>
        </div> 
          <?php
        }
       } ?>
 
        </div>
      </div>
    </div>
  </div>
</header>
    <?php 
    if ( is_front_page() || is_home() ) {
    ?>
    <?php } ?>