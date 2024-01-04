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
            <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
                <h1 class="pagetitle__heading my-3">FAQs</h1>
                <nav>
                    <ol class="breadcrumb my-3">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
       FAQ
    ========================= -->
<section class="faq pt-120 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-12" id="accordion">
                <div class="accordion-item opened">
                    <div class="accordion__header" data-toggle="collapse" data-target="#collapse3">
                        <a class="accordion__title" href="#">Can anxiety disorder cured without medicines?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse3" class="collapse show" data-parent="#accordion">
                        <div class="accordion__body">
                            <p>The treatment of anxiety disorder usually involves a combination of different therapeutic
                                approaches. Among them, medication is one of the treatment plans. However, there are
                                some instances where anxiety disorder can be managed without the use of medicines. The
                                effectiveness of management of anxiety disorder can vary depending upon the severity of
                                anxiety, individual factors and the specific type of anxiety disorder.</p>
                        </div><!-- /.accordion-item-body -->
                    </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                    <div class="accordion__header" data-toggle="collapse" data-target="#collapse1">
                        <a class="accordion__title" href="#">Can anxiety disorder cause heart attack?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse1" class="collapse" data-parent="#accordion">
                        <div class="accordion__body">
                            <p>Anxiety itself is not a direct cause for heart attack, but there is a relationship
                                between anxiety disorder and heart related disorders. It is also important to know that
                                many individuals with anxiety do not experience heart-related issues. Heart attacks are
                                typically caused by factors such as narrowing of your blood vessels, blood clot
                                formation or other conditions. /p>
                        </div><!-- /.accordion-item-body -->
                    </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                    <div class="accordion__header" data-toggle="collapse" data-target="#collapse2">
                        <a class="accordion__title" href="#">Can anxiety disorder cause depression?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                        <div class="accordion__body">
                            <p>Yes, there is a close relationship between anxiety disorders and depression, and often
                                coexist. Some of the individuals experience both anxiety and depression simultaneously
                                as co-morbid conditions.</p>
                        </div><!-- /.accordion-item-body -->
                    </div>
                </div><!-- /.accordion-item -->

            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.FAQ -->

<?php get_footer();?>