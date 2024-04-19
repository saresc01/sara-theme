<?php get_header() ?>

    <!-- First section -->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $helloLoop = new WP_Query(array(
                "post_type" => "hello",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($helloLoop->have_posts()): ?>
                <?php while($helloLoop->have_posts()): $helloLoop->the_post() ?>
                    <?php
                    $hello = get_field("hello");
                    $name = get_field("your_name");
                    $proffession = get_field("profession");
                    $portrait = get_field("portrait");
                    ?>

                    <section class="home container">
                        <div class="container">
                            <div class="home-row">
                                <div class="col-md-8">
                                    <div class="home-text">
                                        <h3><?php echo $hello ?></h3>
                                        <h1 class="myname"><?php echo $name ?></h1>
                                        <h4><?php echo $proffession ?></h4>
                                        <div class="main-btn">
                                            <a href="<?php echo get_template_directory_uri() ?>/img/cvSara.pdf" class="btn">Download CV</a>   
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="home-img position-relative">
                                        <img src="<?php echo $portrait ['url']; ?>" class="d-block w-100" alt="Sara">
                                        <div class="overlay-1"></div>
                                        <div class="overlay-2"></div>
                                    </div>
                                </div>
                            </div>            
                        </div>        
                    </section>

                <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>    
            
            

    <!-- Second section WP --> 
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $hprojectLoop = new WP_Query(array(
                "post_type" => "home-project",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($hprojectLoop->have_posts()): ?>
                <?php while($hprojectLoop->have_posts()): $hprojectLoop->the_post() ?>
                    <?php
                    $title = get_field("section_title");
                    $titlenar = get_field("section_title_blue");
                    $typep1 = get_field("type_project1");
                    $imgp1 = get_field("img_project1");
                    $typep2 = get_field("type_project2");                    
                    $imgp2 = get_field("img_project2");
                    $typep3 = get_field("type_project3");
                    $imgp3 = get_field("img_project3");
                    $typep4 = get_field("type_project4");                    
                    $imgp4 = get_field("img_project4");
                    $typep5 = get_field("type_project5");
                    $imgp5 = get_field("img_project5");
                    $typep6 = get_field("type_project6");                    
                    $imgp6 = get_field("img_project6");                    
                    ?>

                    <section id="projects-home" class="section-padding">
                        <div class="container"> 
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h1><?php echo $title ?><span class="myport"><?php echo $titlenar ?></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="image-container">
                                                <img src="<?php echo $imgp1 ['url']; ?>">             <!-- 1 -->
                                                <div class="overlay"><?php echo $typep1 ?></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="image-container">
                                                <img src="<?php echo $imgp2 ['url']; ?>">             <!-- 2 -->     
                                                <div class="overlay"><?php echo $typep2 ?></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="image-container">
                                                <img src="<?php echo $imgp3 ['url']; ?>">             <!-- 3 -->
                                                <div class="overlay"><?php echo $typep3 ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="image-container">
                                                <img src="<?php echo $imgp4 ['url']; ?>">             <!-- 4 -->
                                                <div class="overlay"><?php echo $typep4 ?></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="image-container">
                                                <img src="<?php echo $imgp5 ['url']; ?>">             <!-- 5 -->
                                                <div class="overlay"><?php echo $typep5 ?></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="image-container">
                                                <img src="<?php echo $imgp6 ['url']; ?>">             <!-- 6 -->
                                                <div class="overlay"><?php echo $typep6 ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                
                            </div>
                            <div class="row justify-content-center"> 
                                <div class="col-md-6 text-center">
                                    <a href="<?php echo esc_url(get_permalink(get_page_by_path("my-projects"))); ?>" class="btn custom-btn">See all my projects</a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>  
     
     
     <!-- Third section -->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $serviceLoop = new WP_Query(array(
                "post_type" => "service",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($serviceLoop->have_posts()): ?>
                <?php while($serviceLoop->have_posts()): $serviceLoop->the_post() ?>
                    <?php
                    $secttit = get_field("sect_title");
                    $titblue = get_field("title_blue");
                    $imgh = get_field("img_hire");
                    $li1 = get_field("list1");
                    $blue = get_field("text_blue");
                    $li2 = get_field("list2");
                    $yell = get_field("text_yell");                    
                    $li3 = get_field("list3");
                    $nar = get_field("text_nar");                   
                    $li4 = get_field("list4");
                    $li5 = get_field("list5");
                    $li6 = get_field("list6");
                    $yell2 = get_field("text_yell2");
                    $li7 = get_field("list7");
                    $li8 = get_field("list8");
                    $blue2 = get_field("text_blue2");
                    $li9 = get_field("list9");                                        
                    ?>

                    <section class="hireme">
                        <div class="container section-padding">
                            <div class="hire-row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h1><?php echo $secttit ?><span class="hire"><?php echo $titblue ?></span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="hire-img position-relative">
                                        <img src="<?php echo $imgh ['url']; ?>" class="d-block w-100" alt="..."> 
                                        <div class="overlay-3"></div>
                                        <div class="overlay-4"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="hire-text h4 text-center">
                                        <ul>                            
                                            <li><?php echo $li1 ?><span class="hire"><?php echo $blue ?></span></li><br>

                                            <li><?php echo $li2 ?><span class="yell"><?php echo $yell ?></span></li><br>

                                            <li><?php echo $li3 ?> <span class="myport"><?php echo $nar ?></span> <?php echo $li4 ?></li><br>
                                            <li><?php echo $li5 ?></li><br>

                                            <li><?php echo $li6 ?><span class="yell"><?php echo $yell2 ?></span> <?php echo $li7 ?></li><br>
                                            <li><?php echo $li8 ?> <span class="hire"><?php echo $blue2 ?></span></li><br>
                                            <li><?php echo $li9 ?></li>
                                        </ul>
                                        <div class="main-btn">
                                            <a href="<?php echo esc_url(get_permalink(get_page_by_path("about-me"))); ?>" class="btn">Know more about me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>
            

         <?php endwhile; ?>
     <?php endif; ?>      

<?php get_footer() ?>