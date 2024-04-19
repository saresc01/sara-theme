    <?php wp_footer() ?>

    <!--Footer WP-->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $footerLoop = new WP_Query(array(
                "post_type" => "footer",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($footerLoop->have_posts()): ?>
                <?php while($footerLoop->have_posts()): $footerLoop->the_post() ?>
                    <?php
                    $titlef = get_field("title_footer");
                    $email = get_field("email");
                    $phone = get_field("phone");
                    $linkedin = get_field("linkedin");
                    $insta = get_field("instagram");
                    $github = get_field("github");
                    $logof = get_field("logo_footer");
                    ?>

                    <footer class="container-fluid text-center text-white bg-body-tertiary py-5">
                        <div class="container">
                            <div class="row footer">
                                <!-- First column -->
                                <div class="col-md-3 contact-info" id="contactme">
                                    <h5><?php echo $titlef ?></h5>                    
                                    <p><i class="fas fa-envelope"></i><?php echo $email ?></4>
                                    <p><i class="fas fa-phone-alt"></i><?php echo $phone ?></p>
                                </div>
                                <!-- Second column -->
                                <div class="col-md-7 social-icon">                    
                                    <a href="<?php echo $linkedin ?>"><i class="fab fa-linkedin"></i></a>                    
                                    <a href="<?php echo $insta ?>"><i class="fab fa-instagram "></i></a>
                                    <a href="<?php echo $github ?>"><i class="fab fa-github"></i></a>
                                </div>
                                <!-- Third column -->
                                <div class="col-md-2">
                                    <a href="#" class="logo">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/LogoMOd.svg" alt="Logo" style="width: 50px;">            
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer> 

                <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?> 


</body>   

</html>