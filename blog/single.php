<!DOCTYPE>
<head>  
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/note/css/font-awesome.min.css">
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.less">
    <script src="<?php bloginfo('stylesheet_directory'); ?>/jquery.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/main.js" type="text/javascript"></script>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/less.js" type="text/javascript"></script>
</head>

<body>
    <div class="container">
        <div class="container-inner">

            <!-- #### TOP BAR STARTS ##### -->
            <div class="bar">
                <div class="logobar">
                    <div class="logo1">&#59171;</div>
                    <div class="bartext"><?php bloginfo( 'name' ); ?></div>

                    <!-- <div class="logo2">&#9776;</div> -->
                    <div class="logo3 js-expand">&#9776;</div>
                </div>
            </div>
            <!-- #### TOP BAR ENDS ##### -->

            <!-- #### BANNER STARTS ##### -->
            
            <div class="banner">
                <div class="bannerlogo">
                    <div class="blogo">&#127810;</div>
                    <div class="bio"><?php bloginfo( 'description' ); ?></div>
                    <div class="title"><?php bloginfo( 'name' ); ?></div>
                </div>
                <div class="circles">
                    <!-- <div class="circle1">&#127810;</div> -->
                    <div class="circle2">&#59148;</div>
                    <!-- <div class="tagbox"></div> -->
                    <div class="circle3">&#59176;</div>
                    <!-- <div class="findme"></div> -->
                </div>
            </div>
            <!-- #### BANNER ENDS ##### -->

            <div class="page">
                <div class="page-inner">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="post1 post">
                        <div class="post-title">
                            <span>
                                <?php the_title(); ?>
                            </span>
                        </div>
                        <div class="post-photo">
                            <?php the_content( ); ?>
                        </div>
                        <div class="post1-bottom">
                            <div class="post1-text">
                                <a  href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                </a>
                            </div>
                            <span>
                                <?php the_category(', ') ?>
                            </span>
                        </div>
                    </div>

                    <?php endwhile;?>
                    <?php endif;?>

                </div>
            </div>
            <div class="footer"><!-- <img src="images/grey_wash_wall.png"> -->
                <div class="fint">
                </div>
                <div class="seperator"></div>
                <div class="ftext">
                    <span>
                        "The camera is an instrument that teaches people how to see without a camera" - Dorothea Lange<br><br>
                    Photocrap"
                    </span> 
                    <span class="copyright">
                        &copy; 2013
                    </span>
                </div>
            </div>
        </div>
    </div>
    
</body>

