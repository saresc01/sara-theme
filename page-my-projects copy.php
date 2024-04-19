<?php get_header() ?>
    
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $card1Loop = new WP_Query(array(
                "post_type" => "card-one",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($card1Loop->have_posts()): ?>
                <?php while($card1Loop->have_posts()): $card1Loop->the_post() ?>
                    <?php
                    $section = get_field("section_name");
                    $cardname = get_field("project_name");                    
                    $img1 = get_field("img_one");
                    $img2 = get_field("img_two");
                    $img3 = get_field("img_three");
                    $cardtext = get_field("card_text");
                    $software = get_field("software");
                    $skills = get_field("skills");                   
                    ?>

                    <!-- section name -->
                    <div class="container"> 
                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="project-title">
                                <h1><?php echo $section ?></h1>
                            </div>
                        </div>
                    </div>
                    </div>
                        
                    <!-- card one-->
                    <div class="container">
                    <div class="card">
                        <div class="row align-items-center">
                        <div class="col-md-7">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $img1 ['url']; ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $img2 ['url']; ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $img2 ['url']; ?>" class="d-block w-100" alt="...">
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                            <h2 class="card-title"><?php echo $cardname ?></h2>
                            <p class="card-text"><?php echo $cardtext ?> </p>
                            <div class="row">
                                <div class="col-6">
                                <h5 class="softw yell">Software and tools</h5>
                                <ul>
                                    <li><?php echo $software ?></li>                                    
                                </ul>
                                </div>
                                <div class="col-6">
                                <h5 class="softw myport">Skills</h5>
                                <ul>
                                    <li><?php echo $skills ?></li>
                                    
                                </ul>
                                </div>
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



     <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php 
            $card2Loop = new WP_Query(array(
                "post_type" => "card-two",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($card2Loop->have_posts()): ?>
                <?php while($card2Loop->have_posts()): $card2Loop->the_post() ?>
                    <?php
                    $section = get_field("section_name");
                    $cardname = get_field("project_name");                    
                    $img1 = get_field("img_one");
                    $img2 = get_field("img_two");
                    $img3 = get_field("img_three");
                    $cardtext = get_field("card_text");
                    $software = get_field("software");
                    $skills = get_field("skills");                    
                    ?>
                    
                    <!-- section name 2-->
                    <div class="container"> 
                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="project-title">
                                <h1><?php echo $section ?></h1>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- card two-->
                    
                    <div class="container">
                    <div class="card">
                        <div class="row align-items-center">
                        
                        <div class="col-md-5">
                            <div class="card-body">
                            <h2 class="card-title"><?php echo $cardname ?></h2>
                            <p class="card-text"><?php echo $cardtext ?> </p>
                            <div class="row">
                                <div class="col-6">
                                <h5 class="softw yell">Software and tools</h5>
                                <ul>
                                    <li><?php echo $software ?></li>                                    
                                </ul>
                                </div>
                                <div class="col-6">
                                <h5 class="softw myport">Skills</h5>
                                <ul>
                                    <li><?php echo $skills ?></li>
                                    
                                </ul>
                                </div>
                            </div>          
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $img1 ['url']; ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $img2 ['url']; ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $img2 ['url']; ?>" class="d-block w-100" alt="...">
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
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