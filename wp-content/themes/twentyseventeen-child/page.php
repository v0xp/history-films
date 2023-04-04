<?php
/**
 * Template Name: Мой основной шаблон
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>История-фильм.рус</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="style.css"/>
	<link rel="icon" href="https://xn----otbabpgjqhk0a2h8a.xn--p1acf/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 
    <script>
        $(document).ready(function()
	{
	$('.open-button').click(function(){
        if(!$('.menu-button').hasClass('open-done'))
        {
            $('.menu-button').addClass('open-done');
            setTimeout(function(){$('.menu-block-2').addClass('open-done')}, 100);
            setTimeout(function(){$('.menu-link-1').addClass('open-done')}, 500);
            
        }
        else
        {
            $('.menu-button').removeClass('open-done');
            $('.menu-link-1').removeClass('open-done');
            setTimeout(function(){$('.menu-block-2').removeClass('open-done')}, 600);
        }
        });
	});
    </script>
<?php get_header(); ?> 

<div class="midle">
    <div class="menu3">
        <?php
        wp_nav_menu( array(
        'theme_location' => 'bottom',
        'menu_class' => 'menu4',

        ) );
        ?>  
    </div>
    <div class="svitok">
    <div class = "menu-block-2">
    <div class = "menu-button open-button"></div>
    <div class="menu2">
    	   
        <?php
        wp_nav_menu( array(
        'theme_location' => 'bottom',
        'menu_class' => 'menu4',
		'menu'            =>'menu2',
		'container'       => 'div',
		'container_class' => 'collapse navbar-collapse',
		'container_id'    => 'navbarCollapse',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',
		'depth'           => 0

        ) );
        ?>
      
    </div>
    </div>
    </div>
    
    <div class="container">
         <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/page/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End the loop.
            ?>   
    </div>

</div>   
<?php get_footer(); ?>                    