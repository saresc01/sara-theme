<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>        
    
    <?php wp_head() ?>
</head>

<body> 

    <!-- navigation bar -->    
    <header>
        <a class="logo mr-auto mr-lg-0" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/img/LogoMOd.svg" alt="Logo" style="width:30px;">
        </a>
        <nav class="navbar navbar-expand-sm">                    
            <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="fas fa-bars"></span>
            </button>            
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("frontpage"))); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("my-projects"))); ?>">My projects</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("about-me"))); ?>">About me</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#contactme">Contact me</a>
                        </li>   
                    </ul>
                </div>
            </div>
        </nav>  
     </header>



     