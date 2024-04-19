<?php get_header() ?>
    
    <div class="project-cards">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php 
                $card1Loop = new WP_Query(array(
                    "post_type" => "card-one",
                    "posts_per_page" => -1
                ));
                $index = 0;
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
                        $link = get_field("link");
                        $go = get_field("go");
                        $class = ($index++ % 2) == 0 ? "" : "reverse-row";
                        $carousel_id = 'carousel_' . get_the_ID(); // Generar ID único para cada carrusel
                        ?>  
                        <!-- card one -->   
                        <div class="card">
                            <div class="container">
                            <div class="row align-items-center <?php echo $class ?>">
                                
                                <div class="col-12 mt-5">
                                    <div class="project-title">
                                        <h2><?php echo $section ?></h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div id="<?php echo $carousel_id; ?>" class="carousel slide">
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $img1 ['url']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <?php if (!empty($img2)): ?>
                                        <div class="carousel-item">
                                            <img src="<?php echo $img2 ['url']; ?>" class="d-block w-100" alt="...">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($img3)): ?>
                                        <div class="carousel-item">
                                            <img src="<?php echo $img3 ['url']; ?>" class="d-block w-100" alt="...">
                                        </div>
                                    <?php endif; ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-6">
                                    <div class="card-body">
                                        <h2 class="card-title"><?php echo $cardname ?></h2>
                                        <p class="card-text"><?php echo $cardtext ?> </p>
                                    
                                        <div class="col-6">
                                            <h5 class="softw yell">Software and tools</h5>
                                            <ul>
                                                <li><?php echo $software ?></li>                                    
                                            </ul>
                                        </div>
                                        <div class="col-5">
                                            <h5 class="softw myport">Skills</h5>
                                            <ul>
                                                <li><?php echo $skills ?></li>                                        
                                            </ul>
                                        </div>

                                        <?php if (!empty($link)): ?>
                                            <div class="btn-video">
                                                <a href="<?php echo esc_url($link); ?>" class="btn"><?php echo esc_html($go); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>          
                                </div>
                            </div>
                            
                        </div>
                        </div>                        
                        
                    <?php endwhile; ?>
                <?php endif;?>
                <?php wp_reset_postdata() ?>

            </div>

         <?php endwhile; ?>
     <?php endif; ?>    
    

<?php get_footer() ?>