<?php get_header();?>

    <!-- Body Area Start Here -->

    <div class="body-area">
      <!-- 	Post Section Start Here -->

      <div class="post-section">
        <h1 class="post-title">ALL Posts</h1>

          <?php while(have_posts()):the_post();?>

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
