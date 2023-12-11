<?php
/*
Template Name: Sobre
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

<div id="block-1">
  <div class="container">
    <div class="row">
      <div class="col-1" data-aos="fade-right">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/corporativo.png" alt="">        
      </div>

      <div class="col-2" data-aos="fade-left">
        <h3>Evoluindo<br/>com o mercado</h3>
        <p>
        Comprometidos com soluções de comunicação modernas e inteligentes, estamos sempre à frente, moldando o futuro da comunicação corporativa.
        </p>
      </div>
    </div><!-- row -->
  </div>
</div>

<div id="block-2">
  <div class="container">
    <div class="row">
      <div class="col-1" data-aos="fade-right">
        <h3>Foco em<br/>Resultados</h3>
        <p>
        Com expertise reconhecida, atuamos de forma eficiente e orientada para resultados tangíveis, em mercados variados como Curitiba, São Paulo, Rio de Janeiro, Salvador e Brasília.
        </p>
      </div>

      <div class="col-2" data-aos="fade-left">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mapa-rascunho.png" alt="">
      </div>
    </div><!-- row -->
  </div>
</div>


<div id="block-3">
  <div class="container">
    <div class="row">
      <h3>A gente <strong>diversifica</strong></h3>
    </div>
    <div class="row">
      <p>
        Não somos apenas uma agência de conteúdo. Unimos Assessoria de Imprensa e Marketing Digital, atuando como parceiros estratégicos para a valorização de marcas, gerando experiências e crescimento exponencial.
      </p>
      <p>Desenvolvemos projetos 360º em comunicação, aliando experiência na produção de conteúdo multiplataforma com ferramentas de análise e monitoramento de resultados.</p>
    </div><!-- row -->
    <div class="row itens" data-aos="flip-left">
      <div class="col planejamento">
        <h4>Planejamento</h4>
        <ul>
          <li>Estratégias de Comunicação</li>
          <li>PR Marketing</li>
          <li>Inbound Marketing</li>
        </ul>
      </div>
      <div class="col producao" data-aos="flip-right" data-aos-delay="200">
        <h4>Produção</h4>
        <ul>
          <li>Conteúdo em Texto (copywriting, SEO, Storytelling)</li>
          <li>Áudio (podcast e audiorelease) e Vídeo;</li>
          <li>Marketing de Conteúdo</li>
          <li>Design</li>
        </ul>
      </div>
      <div class="col relacionamento" data-aos="flip-left" data-aos-delay="400">
        <h4>Relacionamento</h4>
        <ul>
          <li>Assessoria de Imprensa</li>
          <li>Marketing de influência</li>
          <li>Relações Institucionais</li>
        </ul>
      </div>
      <div class="col performance" data-aos="flip-right" data-aos-delay="600">
        <h4>Performance</h4>
        <ul>
          <li>Mídia Digital</li>
          <li>Branded Content</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div id="block-4">
  <div class="container">
    <div class="row">
      <h3>A gente se <br /><strong>envolve</strong></h3>
    </div>
    <div class="row">
      <p>
        Somos mais de 30 profissionais espalhados pelo Brasil diretamente comprometidos com nossos clientes.
      </p>
    </div><!-- row -->
    <div class="row">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/envolve.jpg" alt="" data-aos="flip-left">
    </div>
  </div>
</div>

<div id="block-5">
  <div class="container">
    <div class="row">
      <h3>Nossos <strong>valores</strong></h3>
    </div>
    <div class="row itens">
      <div class="col">
        <h4>Inovação:</h4>
        <p>Antecipando tendências e nos adaptando às mudanças, oferecemos soluções inovadoras, sempre à frente no mercado.</p>
      </div>
      <div class="col">
        <h4>Confiança:</h4>
        <p>Construímos confiança através de resultados consistentes e confiáveis, desenvolvendo projetos 360° em comunicação.</p>
      </div>
      <div class="col">
        <h4>Performance:</h4>
        <p>Nosso foco está em gerar impacto significativo e crescimento, impulsionados por uma comunicação específica, nichada e voltada para performance.</p>
      </div>
    </div><!-- row -->
  </div>
</div>

<div id="block-6">
  <div class="container">
    <div class="row">
      <h3>Sócios</h3>
    </div>
    <div class="row">
      <div class="col">

        <!-- Flip Card -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <!-- Front -->
            <div class="flip-card-front">
              <img src="https://eliel.dev/apex/wp-content/uploads/2023/10/leonardo.jpg" alt="">
              <div class="flip-text">LEONARDO FAGUNDES</div>
            </div>
            <!-- Back -->
            <div class="flip-card-back">
              <div class="content-container">
                <h3>LEONARDO FAGUNDES</h3>
                <h4>Diretor Executivo e Negócios</h4>
                <p>Mais de 20 anos no mercado, com atuação em comunicação corporativa, digital, marketing institucional e promocional. Pós-graduado em Economia, Marketing e Mídias Digitais. Experiência no atendimento de contas como Oi, Sicredi, GVT, entre outras.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col">

        <!-- Flip Card -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <!-- Front -->
            <div class="flip-card-front">
              <img src="https://eliel.dev/apex/wp-content/uploads/2023/10/thiago.jpg" alt="">
              <div class="flip-text">THIAGO ALMADA</div>
            </div>
            <!-- Back -->
            <div class="flip-card-back">
              <div class="content-container">
                <h3>THIAGO ALMADA</h3>
                <h4>Diretor de Criação</h4>
                <p>20 anos de experiência em produção de conteúdo publicitário e jornalístico. Extensão em marketing pela Griffith University, Austrália. Trabalhos como diretor de criação para clientes como Cyrela, GRPCOM, Grupo Positivo, Farmácias Nissei, entre outros.</p>
              </div>
            </div>
          </div>
        </div>

      </div><!-- col -->

    </div><!-- row -->

    <div class="row">
      <h3>Gerentes</h3>
    </div>
    <div class="row">
      <div class="col">

        <!-- Flip Card -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <!-- Front -->
            <div class="flip-card-front">
              <img src="https://eliel.dev/apex/wp-content/uploads/2023/10/carol-veiga.jpg" alt="">
              <div class="flip-text">CAROL VEIGA</div>
            </div>
            <!-- Back -->
            <div class="flip-card-back">
              <div class="content-container">
                <h3>CAROL VEIGA</h3>
                <h4>Gerente</h4>
                <p>Gerente de Assessoria de Imprensa e PR Institucional. Especialista em planejamento, atendimento e produção de conteúdo estratégico para os meios off e online.</p>
              </div>
            </div>
          </div>
        </div>

      </div><!-- col -->

      <div class="col">

        <!-- Flip Card -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <!-- Front -->
            <div class="flip-card-front">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lia2.jpg">
              <div class="flip-text">LIA FLAUZINO</div>
            </div>
            <!-- Back -->
            <div class="flip-card-back">
              <div class="content-container">
                <h3>LIA FLAUZINO</h3>
                <h4>Gerente</h4>
                <p>Gerente de Comunicação Corporativa. Bacharel em Relações Públicas e mestranda em estratégias organizacionais, possui experiência em PR, Marketing Digital e Branding, tendo um histórico de sucesso com grandes players do mercado como Volvo, O Boticário, Positivo Tecnologia, entre outros.</p>
              </div>
            </div>
          </div>
        </div>

      </div><!-- col -->

      <div class="col">

        <!-- Flip Card -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <!-- Front -->
            <div class="flip-card-front">
              <img src="https://eliel.dev/apex/wp-content/uploads/2023/10/pedro.jpg" alt="">
              <div class="flip-text">PEDRO ANTONIO GUIMARÃES</div>
            </div>
            <!-- Back -->
            <div class="flip-card-back">
              <div class="content-container">
                <h3>PEDRO ANTONIO GUIMARÃES</h3>
                <h4>Gerente</h4>
                <p>Head da Apex Rio: Jornalista com mais de 6 anos de atuação em veículos nacionais como produtor, apresentador e repórter, além de podcaster e locutor. Supervisor das ativações dos clientes no estado do RJ.</p>
              </div>
            </div>
          </div>
        </div>

      </div><!-- col -->

    </div><!-- row -->
  </div>
</div>

<div id="block-7">
  <div class="container">
    <div class="row">
      <div class="col-1" data-aos="fade-right">
        <h3>A gente se <strong>posiciona</strong></h3>
      </div>
      <div class="col-2" data-aos="fade-left">
        <p>
          Quando a comunicação ainda era somente analógica, nossos profissionais já estavam desbravando o cenário das redações e agências. Do início como uma produtora de revistas e assessoria de imprensa, fomos nos transformando para o que se tornaria a Apex – uma agência de conteúdo que performa, que é estratégica , criativa e destemida.
          Na busca de resultados efetivos, criamos nossa filosofia e metodologia de atendimento inteligente – o PR Marketing – que une jornalismo, marketing, publicidade, relações públicas, performance e design.
          Acreditamos que para transformar conteúdo em ferramenta de negócios precisamos nos tornar parceiros estratégicos das marcas, gerando resultados e relacionamentos, fazendo parte do seu crescimento exponencial.
        </p>
      </div>
    </div><!-- row -->
  </div>
</div>

<div id="block-8">
  <div class="row">
    <h3>A gente tem<br /><strong>performado</strong></h3>
  </div>
  <div class="row">
    <p>Desde 2006 oferecemos um atendimento personalizado para clientes do setor público e privado em todo o Brasil:</p>
  </div><!-- row -->


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
</div>


<?php get_footer(); ?>