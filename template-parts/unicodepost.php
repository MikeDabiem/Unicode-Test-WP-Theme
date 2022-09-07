<main class="custompost">
    <section class="custompost__1col">
        <h2 class="custompost__1col-title">You&#x2019;re in good company</h2>
        <p class="custompost__1col-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore</p>
        <div class="custompost__1col-images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="custompost__1col-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="custompost__1col-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="custompost__1col-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="custompost__1col-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="custompost__1col-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="custompost__1col-img">
        </div>
    </section>
    <section class="custompost__2col">
        <?php
            $args = array( 'post_type' => 'unicode', 'posts_per_page' => 1 );
            $loop = new WP_Query($args);
            if ($loop -> have_posts()) {
                while ( $loop -> have_posts() ) : $loop -> the_post();
        ?>
        <?php if (has_post_thumbnail()) { ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thumbnail" class="custompost__2col-img">
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle.jpg" alt="Rectangle" class="custompost__2col-img">
        <?php } ?>
        <div class="custompost__2col-text">
            <h3 class="custompost__2col-title"><?php the_title(); ?></h3>
            <blockquote class="custompost__2col-excerpt"><?php the_content(); ?></blockquote>
        </div>
        <?php endwhile; 
    } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle.jpg" alt="Rectangle" class="custompost__2col-img">
        <div class="custompost__2col-text">
            <h3 class="custompost__2col-title">Sed ut perspiciatis unde omnis</h3>
            <p class="custompost__2col-excerpt">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
        </div>
        <?php } ?>
    </section>
</main>