<!-- ======================
      Blog Grid
    ========================= -->
<section class="blog-grid pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                    <h2 class="heading__subtitle">Resource Library</h2>
                    <h3 class="heading__title">Recent Articles</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <?php
$args = array('post_type' => 'post', 'showposts' => 3);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
	            <!-- Post Item #1 -->
	            <div class="col-sm-12 col-md-6 col-lg-4">

	                <div class="post-item">
	                    <div class="post__img">
	                        <a href="<?php the_permalink();?>">
	                            <img src="<?php the_post_thumbnail_url('full');?>" alt="post image" loading="lazy">
	                        </a>
	                    </div><!-- /.post__img -->
	                    <div class="post__body">
	                        <div class="post__meta-cat">
	                            <a href="#">Mental Health</a>
	                        </div><!-- /.blog-meta-cat -->
	                        <div class="post__meta d-flex">
	                            <span class="post__meta-date"><?php the_time('F j, Y');?></span>
	                            <a class="post__meta-author" href="#"><?php the_author();?></a>
	                        </div>
	                        <h4 class="post__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>

	                        <p class="post__desc"><?php echo strip_tags(get_the_excerpt()); ?>
	                        </p>
	                        <a href="<?php the_permalink();?>" class="btn btn__secondary btn__link btn__rounded">
	                            <span>Read More</span>
	                            <i class="icon-arrow-right"></i>
	                        </a>
	                    </div><!-- /.post__body -->
	                </div><!-- /.post-item -->
	            </div><!-- /.col-lg-4 -->
	            <?php endwhile;
wp_reset_postdata();?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->