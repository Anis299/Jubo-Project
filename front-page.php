<?php

global $redux_demo;

?>

<?php get_header();?>

    <!-- Header Image Start Here -->

    <section class="banner">
      <img src="<?php echo $redux_demo['changeHeaderImage']['url'];?>"/>
    </section>

    <!--Header Image End Here -->

    <!--Service Section Start Here -->

    <div class="service-section">
      <div class="service-title">
        <h2>Our Services</h2>
      </div>

      <div class="wrapper">

        <?php 
        
        $Service = new WP_Query([

          'post_type'       => 'service',

        ]);
        
        while( $Service -> have_posts()): $Service -> the_post();?>

        <div class="box">
          <div class="front-face">
            <div class="icon">
              <i class="<?php echo get_post_meta(get_the_ID(), 'codeLink' ,true);?>"></i>
            </div>
            <span><?php the_title();?></span>
          </div>
          <div class="back-face">
            <span><?php the_title();?></span>
            <p><?php the_content();?></p>
          </div>
        </div>
        
        <?php endwhile;?>
        
      </div>
    </div>

    <!-- Service Section End Here -->

    <!-- Body Area Start Here -->

    <div class="body-area">
      <!-- 	Post Section Start Here -->

      <div class="post-section">
        <h1 class="post-title">Latest Posts</h1>

         <?php 
         
         $latestPost = new WP_Query([

          'post_type'       => 'post',
          'order'           => 'DSC',

         ]);
         
         while( $latestPost -> have_posts()): $latestPost -> the_post();?> 

        <div class="single-post">
          <?php the_post_thumbnail();?>
          <h2><?php the_title();?></h2>
          <p><?php echo wp_trim_words(get_the_content(), 50, true);?></p>
          <a href="<?php the_permalink();?>" target="_blank">Read More</a>
        </div>
        
        <?php endwhile;?>
        
        
      </div>

      <!-- Post Section End Here -->

      <?php get_sidebar();?>
    </div>

    <!-- Body Area End Here -->

    <?php get_footer();?>
