<?php get_header(); ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
        <?php while(have_posts()): the_post(); ?>
        <div class="card">
          <div class="card-body">
            <a href="<?php the_permalink(); ?>">
              <h5 class="card-title"><?php the_title(); ?></h5>
            </a>
            <div class="card-text-wrap">
              <p class="card-text"><?php the_excerpt(); ?></p>
              <p class="post-meta">Posted by
                <?php the_author(); ?>
                on <?php the_time('Y-m-d'); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">読む</a>
          </div>
        </div>
        <?php endwhile; ?>
    </div>
  </div>

  <!-- Pager -->

  <hr>

  <!-- Footer -->
<?php get_footer(); ?>