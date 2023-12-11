<?php
/*
Template Name: Cases
*/
//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


<section class="banners top mobile carrossel">
  <?php
  $images = acf_photo_gallery('banner_mobile', $post->ID);
  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
      <div class="item">
        <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
      </div>
  <?php endforeach;
  endif; ?>
</section>



<div id="principal">


  <div class="container">

    <div class="conteudo">

      <div class="itens">
        <div class="col-1">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 1,
            'orderby' => 'DESC'
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="item item-bg" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumb">
                    <?php the_post_thumbnail('thumb-portfolio-bg'); ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <h5><?php the_field('tema'); ?></h5>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- col-1 -->
        <div class="col-2">

          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 4,
            'orderby' => 'DESC',
            'offset' => 1
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="item item-sm">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumb">
                    <?php the_post_thumbnail('thumb-portfolio-sm'); ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <h5><?php the_field('tema'); ?></h5>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- col-2 -->
      </div><!-- itens -->

      <div class="itens">
        <div class="col-1">

          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 4,
            'orderby' => 'DESC',
            'offset' => 5
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="item item-sm" data-aos="fade-up" data-aos-delay="300">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumb">
                    <?php the_post_thumbnail('thumb-portfolio-sm'); ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <h5><?php the_field('tema'); ?></h5>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- col-1 -->
        <div class="col-2">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 1,
            'orderby' => 'DESC',
            'offset' => 9
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="item item-bg" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumb">
                    <?php the_post_thumbnail('thumb-portfolio-bg'); ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <h5><?php the_field('tema'); ?></h5>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- col-2 -->
      </div><!-- itens -->

      <div class="itens">
        <div class="col-1">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 1,
            'orderby' => 'DESC',
            'offset' => 10
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="item item-bg" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumb">
                    <?php the_post_thumbnail('thumb-portfolio-bg'); ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <h5><?php the_field('tema'); ?></h5>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- col-1 -->
        <div class="col-2">

          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 4,
            'orderby' => 'DESC',
            'offset' => 11
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="item item-sm" data-aos="fade-up" data-aos-delay="300">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumb">
                    <?php the_post_thumbnail('thumb-portfolio-sm'); ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <h5><?php the_field('tema'); ?></h5>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- col-2 -->
      </div><!-- itens -->

    </div>

    <div class="sidebar">

      <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>

    </div>

  </div>



</div>

<section class="banners top desktop">
  <video id="homevideo" loop="" autoplay="" muted="" playsinline="" webkit-playsinline="" poster="#" preload="none">
    <source src="https://drive.google.com/uc?export=download&amp;id=17JC0CYKLoMvb1y47-too86jMtgCZj278" type="video/mp4">
    <source src="https://drive.google.com/uc?export=download&amp;id=17JC0CYKLoMvb1y47-too86jMtgCZj278" type="video/webm">
  </video>

  <?php
  /*
  $images = acf_photo_gallery('banner_desktop', $post->ID);

  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
  <div class="item">
    <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
  </div>
  <?php endforeach;
  endif; */
  ?>
</section>






<?php get_footer(); ?>