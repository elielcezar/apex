<?php
/*
Template Name: Blog
*/
//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <?php
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
  endif; ?>
</section>

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
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'blog',
          'posts_per_page' => 15,
          'orderby' => 'DESC'
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <div class="item">

          <div class="thumb">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumb-noticia'); ?>
            </a>
          </div>
          <div class="content">
            <span class="data">
              <?php
                  $post_date = get_the_date('j \d\e F \d\e Y');
                  echo $post_date;
                  ?>
            </span>
            <h4>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <p><?php the_excerpt(); ?></p>
          </div>

        </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>

    </div>

    <div class="sidebar">

      <?php if (is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>

    </div>

  </div>



</div>





<?php get_footer(); ?>