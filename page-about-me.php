<?php get_header() ?>
    
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $storyLoop = new WP_Query(array(
                "post_type" => "story",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($storyLoop->have_posts()): ?>
                <?php while($storyLoop->have_posts()): $storyLoop->the_post() ?>
                    <?php
                    $namec = get_field("name_contact");
                    $description = get_field("description");                    
                    $imgc = get_field("imagen_contact");
                    $videcv = get_field("video_cv");
                    ?>

                    <!-- First section -->
                    <section class="home">
                        <div class="container">
                            <div class="home-row">
                                <div class="col-md-7">
                                    <div class="me-text">                        
                                        <h1 class="myname"><?php echo $namec ?></h1>
                                        <h5><?php echo $description ?></h5>
                                                                
                                    </div>
                                </div>
                                <div class="col-1">                    
                                </div>
                                <div class="col-md-4 ">
                                    <div class="me-img position-relative">
                                        <img src="<?php echo $imgc ['url']; ?>" class="d-block w-100" alt="...">        <!--Photo 3-->
                                        <div class="overlay-1"></div>
                                        <div class="overlay-2"></div>
                                    </div>
                                </div>
                            </div>            
                        </div>        
                    </section>
                    <!-- Second section video cv  -->                                 
                    <div class="container">
                        <div class="videocv mb-5">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div id="videocv"> 
                                        <iframe width="560" height="315" src="<?php echo $videcv ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>                    
                                </div>
                                <div class="container col-md-5">
                                    <div class="video-b">
                                        <div class="btn-video">
                                            <a href="<?php echo get_template_directory_uri() ?>/img/cvSara.pdf" class="btn">Download CV</a>
                                        </div>
                                        <div class="btn-video">
                                            <a href="#contactme" class="btn">Contact me</a>
                                        </div>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>  
     
    

<?php get_footer() ?>