<?php get_header();
$bi = get_field('banner_image') ?: BI;

?>



<!-- ========================
       page title
    =========================== -->
<section class="page-title page-title-layout5">
    <div class="bg-img"><img src="<?php echo $bi; ?>" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Doctor’s Timetable</h1>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor’s Timetable</li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->


<!-- ========================
       Doctors Timetable
    ========================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <?php
$args = array('post_type' => 'doctor', 'showposts' => -1);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
	                    <table class="doctors-timetable w-100">
	                        <thead>
	                            <tr>
	                                <th></th>
	                                <th><?php echo get_field('current_hospital'); ?></th>

	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php if (have_rows('time_table')): ?>
	                            <tr>
	                                <td>
	                                    Time
	                                </td>
	                                <td class="event">
	                                    <a class="event__header" href="#"><?php echo get_field('working_days'); ?></a>
	                                    <div class="event__type"><?php echo get_field('worked_as'); ?></div>
	                                    <?php while (have_rows('time_table')): the_row();?>
		                                    <div class="event__time">
		                                        <span><?php echo get_sub_field('time_slot'); ?></span>
		                                    </div>
		                                    <?php endwhile;?>
	                                    <div class="doctor__name"><?php the_title();?></div>
	                                </td>


	                            </tr>
	                            <?php endif;?>

                        </tbody>
                    </table>
                    <?php endwhile;
wp_reset_postdata();?>
                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->


</section><!-- /.Doctors Timetable  -->



<iframe style="border: 0;"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.546877598713!2d85.31999971453747!3d27.66948763376272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1998c481c529%3A0x1f7229404337198a!2sDr.%20Kenison%20Shrestha%2C%20Psychiatrist%20-%20Mental%20Health%20Clinic!5e0!3m2!1sen!2snp!4v1626921843556!5m2!1sen!2snp"
    width="100%" height="450" allowfullscreen="allowfullscreen"></iframe>
<?php get_footer();?>