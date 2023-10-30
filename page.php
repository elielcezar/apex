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
      <?php the_content(); ?>  
    </div>

    <div class="sidebar">

        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>  

    </div>

  </div>



</div>





<?php get_footer(); ?>