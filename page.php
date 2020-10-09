<?php get_header(); ?>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php while(have_posts()): the_post(); ?>
          <div class="post-preview">
            <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
              <h3 class="post-subtitle">
                <?php the_excerpt(); ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <?php the_author(); ?>
              on <?php the_time('Y-m-d'); ?></p>
          </div>
          <hr>
        <?php endwhile; ?>

        
        <!-- Pager -->
        <div class="clearfix">
          <?php next_posts_link(); ?>
          <?php previous_posts_link(); ?>
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php get_footer(); ?>