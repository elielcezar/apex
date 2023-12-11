<?php
/*
Template Name: Homepage Custom
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


<div id="parceiros">
  <div class="container">
    <div class="row">
      <div class="col-1" data-aos="fade-right">
        <h3>
          Somos uma agência disruptiva que <strong>posiciona marcas</strong>
        </h3>
      </div>

      <div class="col-2" data-aos="fade-left">
        <div class="vetores">
          <ul>
            <li class="planejamento">Planejamento</li>
            <li class="producao">Produção</li>
            <li class="relacionamento">Relacionamento</li>
            <li class="performance">Performance</li>
          </ul>
        </div>
        <p>
          Por meio da <strong>Comunicação</strong> e do <strong>Marketing</strong>, criamos histórias de sucesso e
          geramos resultados únicos.
        </p>
      </div>
    </div><!-- row -->

  </div>
</div>


<div id="video">
  <video width="100%" autoplay loop muted>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/video.mp4" type="video/mp4">
  </video>
</div>


<div id="video-1" data-aos="flip-down">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/video-1.jpg" alt="">
</div>


<div id="cases">
  <h3>Projetos que geram<br /><strong>resultados</strong></h3>
  <div class="container">
    <div class="itens">
      <?php
      $loop = new WP_Query(array(
        'post_type' => 'case',
        'posts_per_page' => 6,
        'orderby' => 'DESC'
      ));

      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="item">
            <a href="<?php the_permalink(); ?>">
              <div class="thumb">
                <?php the_post_thumbnail('thumb-noticia'); ?>
              </div>

              <h4><?php the_title(); ?></h4>
              <h5><?php the_field('tema'); ?></h5>
            </a>
          </div>
      <?php endwhile;
      endif;

      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<div id="depoimentos">
  <div class="container">
    <h3>A gente tem<br /><strong>performado</strong> </h3>
    <div class="lista">
      <?php
      $loop = new WP_Query(array(
        'post_type' => 'depoimento',
        'posts_per_page' => -1,
        'orderby' => 'RAND'
      ));

      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="item">
            <?php the_content(); ?>
          </div>
      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<div id="clientes">
  <h3>Quem já <strong>performou</strong><br /> com a gente</h3>
  <div class="carrossel-clientes ltr">
    <div class="lista">
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-1.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-2.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-3.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-4.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-5.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-6.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-7.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-8.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-9.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-10.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-10.png" alt=""></div>      
    </div>
  </div>
  <div class="carrossel-clientes rtl" dir="rtl">
    <div class="lista">      
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-11.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-12.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-13.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-14.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-15.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-16.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-17.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-18.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-19.png" alt=""></div>
      <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cliente-20.png" alt=""></div>
    </div>
  </div>
</div>


<div id="blog">
  <div class="container">
    <div class="row">
      <div class="col-1 main">
        <h3>Destaques <strong>na mídia</strong></h3>
        <p>Uma fonte valiosa de recursos para canais e veículos de comunicação. Conheça os destaques das últimas notícias de nossos clientes.</p>
        <a href="#" class="btn">Saiba mais <i class="fa-solid fa-angle-right"></i></a>
      </div>
      <div class="col-2 blog">
        <div class="row">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'orderby' => 'DESC',
            'category_name' => 'release'
          ));

          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
              <div class="item">
                <?php the_post_thumbnail('destaque-noticia'); ?>
                <div class="content">
                  <p><?php $post_date = get_the_date('j \d\e F \d\e Y');
                      echo $post_date; ?></p>
                  <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h4>
                </div>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>