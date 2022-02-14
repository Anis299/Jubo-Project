<?php

global $redux_demo;

?>

<!-- Sidebar Section Start Here -->

<aside>
        <h2 class="inspire">Our Inspiration</h2>

          <?php 
          
          $honorary = new WP_Query([

            'post_type'       => 'honorary',
            'order'           => 'ASC',

          ]);
          
          while($honorary -> have_posts()):$honorary -> the_post();?>

        <div class="main-image">
          <?php the_post_thumbnail();?>
          <h2><?php the_title();?></h2>
          <p><?php the_content();?></p>

          <div class="sidebar-social">
            <li>
              <a href="<?php echo get_post_meta(get_the_ID(), 'fblink' ,true);?>"><i class="fab fa-facebook icon"></i></a>
            </li>
            <li>
              <a href="<?php echo get_post_meta(get_the_ID(), 'inlink' ,true);?>"><i class="fab fa-instagram-square icon"></i></a>
            </li>
            <li>
              <a href="<?php echo get_post_meta(get_the_ID(), 'lnlink' ,true);?>"><i class="fab fa-linkedin icon"></i></a>
            </li>
          </div>
        </div>
        
          <?php endwhile;?>
        
      </aside>

      <!-- Sidebar Section End Here -->