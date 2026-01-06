<?php
/*
* 
**/
get_header();   
get_template_part( 'inc/breadcrumb'); ?>


    <!-- blog-standard -->
    <section class="blog-standard sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <?php 
                    while (have_posts()): the_post();?>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-standard-content">

                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <?php the_post_thumbnail();?>
                                        <a href="<?php the_permalink()?>"><i class="fas fa-search"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="pattern" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/pattern-6.png);"></div>
                                        <h2><a href="<?php the_permalink()?>"><?php the_title();?>  .</a></h2>
                                        <?php the_content();?>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endwhile; // End of the loop.?>

                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar ml-40">
                            
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Category</h3>
                            </div>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Home Insurance<span>2</span></a></li>
                                <li><a href="blog-details.html">Car Insurance<span>4</span></a></li>
                                <li><a href="blog-details.html">Life Insurance<span>5</span></a></li>
                                <li><a href="blog-details.html">Health Insurance<span>3</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Popular Posts</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <h4><a href="blog-details.html">Start your career with MetLife</a></h4>
                                    <span class="post-date">July 25, 2020</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <h4><a href="blog-details.html">Which allows you to pay policy.</a></h4>
                                    <span class="post-date">July 24, 2020</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                    <h4><a href="blog-details.html">What we are capable to usually.</a></h4>
                                    <span class="post-date">July 23, 2020</span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog-standard end -->

    <!-- feature-section -->
    <section class="feature-section sec-pad">
        <div class="auto-container"> 
            <div class="row clearfix">
                <?php
                if ( $gepetrol_theme_option['vision_mision'] != '') :
                foreach( $gepetrol_theme_option['vision_mision'] as $vision_mision_gepetrol ) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="pattern-layer">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-27.png);"></div>
                                </div>
                                <div class="bg-layer" style="background-image: url(assets/images/resource/feature-1.jpg);"></div>
                                
                                <h3><a href="index-2.html"><?php echo $vision_mision_gepetrol['title']; ?></a></h3>
                                <p><?php echo $vision_mision_gepetrol['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- feature-section end -->

    <!-- contact-section -->
    <section class="contact-section bg-color-1">
       
        <div class="auto-container"> 
            <div class="row clearfix">
                <?php
                if ( $gepetrol_theme_option['vision_mision'] != '') :
                foreach( $gepetrol_theme_option['vision_mision'] as $vision_mision_gepetrol ) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="pattern-layer">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-27.png);"></div>
                                </div>
                                <div class="bg-layer" style="background-image: url(assets/images/resource/feature-1.jpg);"></div>
                                
                                <h3><a href="index-2.html"><?php echo $vision_mision_gepetrol['title']; ?></a></h3>
                                <p><?php echo $vision_mision_gepetrol['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/shape/pattern-7.png);"></div> 
        </div>
    </section>
    <!-- contact-section end -->    


    <!-- contact-section -->
    <section class="contact-section bg-color-1">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/shape/pattern-18.png);"></div> 
        </div>
        <div class="auto-container"> 
            <div class="row clearfix">
                <?php
                if ( $gepetrol_theme_option['vision_mision'] != '') :
                foreach( $gepetrol_theme_option['vision_mision'] as $vision_mision_gepetrol ) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="pattern-layer">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-27.png);"></div>
                                </div>
                                <div class="bg-layer" style="background-image: url(assets/images/resource/feature-1.jpg);"></div>
                                
                                <h3><a href="index-2.html"><?php echo $vision_mision_gepetrol['title']; ?></a></h3>
                                <p><?php echo $vision_mision_gepetrol['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
       <div class="auto-container">
            <div class="sec-title"> 
                <h2>Valores</h2>
            </div>
            <div class="row clearfix">
                <?php
                if ( $gepetrol_theme_option['valores_gepetrol'] != '') :
                foreach( $gepetrol_theme_option['valores_gepetrol'] as $valores ) : ?>

                <div class="col-lg-12 col-md-12 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/pattern-24.png);"></div>
                            <div class="inner">
                                <h3><a href="service-details.html"><?php echo $valores['title']; ?></a></h3>
                                <p><?php echo $valores['description']; ?></p> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- contact-section end -->    

    <!-- service-style-two -->
    <section class="service-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title"> 
                <h2>Valores</h2>
            </div>
            <div class="row clearfix">
                <?php
                if ( $gepetrol_theme_option['valores_gepetrol'] != '') :
                foreach( $gepetrol_theme_option['valores_gepetrol'] as $valores ) : ?>

                <div class="col-lg-12 col-md-12 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/pattern-24.png);"></div>
                            <div class="inner">
                                <h3><a href="service-details.html"><?php echo $valores['title']; ?></a></h3>
                                <p><?php echo $valores['description']; ?></p> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->

<?php get_footer(); ?>