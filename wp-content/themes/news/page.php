<?php

get_header(); ?>

<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2><?php the_title() ?></h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
              
            <div class="down-content">
              <h4><?php the_title() ?></h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-01.png"  alt="auth">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


<?php get_footer(); ?>