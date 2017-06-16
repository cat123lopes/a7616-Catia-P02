
<?php get_header(); ?>
<!--<div id="primary" class="content-area">
<!--  <main id="main" class="site-main" role="main">-->
<div id="home">
  <div id="fullpage">
    <div class="section" id="section-a">
      <div class="section-a-bckg hidden-xs"></div>
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-md-offset-3 col-md-5 no-padding-xs">
            <div class="section-a-content">
              <div id="fadeslider">
                <div class="slide-fadeslider active" data-index="1">

                <div id="img_post_index">
                  <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                  }

                  ?>
                  </div>
                  <div class="section-desc">
                    <?php
                    if ( have_posts() ) :

                      if ( is_home() && ! is_front_page() ) : ?>
                      <?php
                    endif;


                    /* Start the Loop */
                    while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                      <main class="entry-header fadeslider">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                          <h2><?php wp_theme_posted_on(); ?><span class="visible-xs"><br></span></h2> </div> <a href="<?php echo esc_url( get_permalink() ) ?>" class="btn" rel="bookmark">Read More</a>
                          <!-- .entry-meta -->
                        </main>
                        <!-- .entry-header -->
                      </article>
                      <!-- #post-## -->
                    <?php endwhile;


                    else :

                      get_template_part( 'template-parts/content', 'none' );

                    endif; ?>
                  </div>
                </div>



              </div>



                              <div class="slidelist">
                                  <h3 id="trigger-image-1" class="active">&bull;</h3>
                                  <h3 id="trigger-image-2">&bull;</h3>
                                  <h3 id="trigger-image-3">&bull;</h3>
                                  <h3 id="trigger-image-4">&bull;</h3>
                                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--</main>-->
    <!-- PÓS BANNER -->
    <div id="section-b">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-offset-1 col-sm-6 col-md-offset-4 col-md-4">
            <h1 class="hidden-xs">we love what we do</h1>
            <h1 class="visible-xs">we love <br> what we do</h1>
            <h2>we are part time travelers</h2>
            <div class="row hidden-xs">
              <div class="col-xs-4">
                <p>You are welcome to another travel blog like many others… we know… but since we met, we share same interests. We have been thinking about starting a blog to share our experience, tips and photos from our adventures. We hope that this blog </p>
              </div>
              <div class="col-xs-4">
                <p> will encourage you to take your camera and book a trip. Michal from Poland and me, Claudia from Portugal. We both work full time, I am a scrub nurse and Michal is yacht designer. We try to travel as much as we can in our free time. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -->
    <div class="section" id="section-c">
      <div class="container ">
        <div class="row">
          <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="row">
              <div class="col-md-offset-2 col-sm-4 col-md-2"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Claudia-1.jpg" alt="" class="img-responsive claudia"> </div>
              <div class="col-sm-4 col-md-2"> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Michal-1.jpg" alt="" class="img-responsive michal"> </div>
            </div>
          </div>
          <div class="col-xs-8 col-sm-8 col-md-8">
            <h1>CLAUDIA &amp; MICHAL</h1>
            <h3>‘Life is about creating and living experiences that are worth sharing’ – Steve Jobs<br></h3>
            <p>We are an international couple. Michal from Koszalin,Poland and Me, Claudia from Oporto, Portugal. We both work full time, I am a scrub nurse and Michal is yacht designer. We love our jobs, but we try to travel as much as we can in our free time. That’s where the blog’s name comes from.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- SECÇÃO D-->
    <div class="section fp-auto-height" id="section-d">
      <div class="container section-talk">
        <div class="row">
          <div class="col-xs-8">
            <div class="talk-content">
              <h1>MEET PARTIMETRAVELERS</h1>
              <h2>Passionate about travel and photography. Living in UK.</h2>
              <div class="btn-content"> <a href="" class="btn">Contact Us!</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>











  </div>
</div>
<!-- </div>-->
<?php get_footer(); ?>
