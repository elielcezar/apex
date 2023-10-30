<?php get_header(); ?>

<div id="principal">

  <!--div class="container">
    <div class="capa">
      <?php the_post_thumbnail(); ?>
    </div>
  </div-->

  <div class="container">
    <div class="conteudo">
      <?php the_content(); ?>
    </div>
    <div class="sidebar">
      <div class="block">
        <h3>Mais no Blog</h3>
        <div class="itens">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'blog',
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'order'    => 'ASC'
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
                  <h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h5>
                </div>

              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>


      <div class="block blog">
        <h3>Nossos Cases</h3>
        <div class="itens">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'case',
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'order'    => 'ASC'
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
                  <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h4>
                  <p><?php the_field('tema'); ?></p>
                </div>

              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>

    </div><!-- sidebar -->
  </div>


</div>


<?php get_footer(); ?>