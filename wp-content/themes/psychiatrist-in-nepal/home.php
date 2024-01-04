<?php get_header();

?>


<!-- ========================
       page title
    =========================== -->
<section class="page-title page-title-layout5 bg-overlay">
    <div class="bg-img"><img src="<?php echo THEME_URL; ?>/assets/images/page-titles/8.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Blogs/ Articles</h1>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      Blog Grid
    ========================= -->
<section class="blog-grid">
    <div class="container">
        <div class="row">
            <?php while (have_posts()): the_post();?>
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
	                            <a class="post__meta-author" href="#">Martin King</a>
	                        </div>
	                        <h4 class="post__title"><a href="#"><?php the_title();?></a></h4>

	                        <p class="post__desc"><?php echo strip_tags(get_the_excerpt()); ?>
	                        </p>
	                        <a href="<?php the_permalink();?>" class="btn btn__secondary btn__link btn__rounded">
	                            <span>Read More</span>
	                            <i class="icon-arrow-right"></i>
	                        </a>
	                    </div><!-- /.post__body -->
	                </div><!-- /.post-item -->
	            </div><!-- /.col-lg-4 -->
	            <?php endwhile;?>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center">
                <nav class="pagination-area">
                    <?php gd_pagination();?>
                    <!-- <ul class="pagination justify-content-center">
                        <li><a class="current" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="icon-arrow-right"></i></a></li>
                    </ul> -->
                </nav><!-- .pagination-area -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->
<?php get_footer();?>