<?php

global $redux_demo;

?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta <?php bloginfo('charset');?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php bloginfo('name');?></title>

<?php wp_head();?>    

  </head>
  <body <?php body_class();?>>
    <!-- 	Header Section Start Here -->

    <header>
      <div class="top-header" style="background-color: <?php echo $redux_demo['changeColor'];?>">
        <div class="contact">
          <ul>
            <li><i class="fas fa-phone-alt text-white"></i></li>
            <li class="text-white"><?php echo $redux_demo['phoneNumber'];?></li>
            <li><i class="fas fa-envelope text-white"></i></li>
            <li class="text-white"><?php echo $redux_demo['email'];?></li>
          </ul>
        </div>

        <div class="social">
          <ul>
            <li>
              <a href="<?php echo $redux_demo['fbLink'];?>"><i class="fab fa-facebook-square text-white"></i></a>
            </li>
            <li>
              <a href="<?php echo $redux_demo['twLink'];?>"><i class="fab fa-twitter-square text-white"></i></a>
            </li>
            <li>
              <a href="<?php echo $redux_demo['inLink'];?>"><i class="fab fa-instagram-square text-white"></i></a>
            </li>
            <li>
              <a href="<?php echo $redux_demo['lnLink'];?>"><i class="fab fa-linkedin text-white"></i></a>
            </li>
            <li>
              <a href="<?php echo $redux_demo['pnLink'];?>"><i class="fab fa-pinterest-square text-white"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Navigation Start Here -->

      <div class="navigation-menu" style="background-color: <?php echo $redux_demo['changeNavColor'];?>">
        <div class="logo clear">
          <a href="index.html"><img src="<?php echo $redux_demo['siteLogo']['url'];?>"/></a>
        </div>

        <div class="menu">
          <?php 
          
          wp_nav_menu([

            'theme_location'    => 'primaryMenu',

          ]);
          
          ?>
        </div>
      </div>

      <!-- 	Navigation End Here -->
    </header>

    <!-- Header Section End Here -->