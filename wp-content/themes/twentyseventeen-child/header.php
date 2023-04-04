<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * 
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title>История-фильм.рус</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="dd0edadb326f6b10" />
    <link type="text/css" rel="stylesheet" href="style.css"/>
	<link rel="icon" href="https://xn----otbabpgjqhk0a2h8a.xn--p1acf/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 
    <script>
        $(function() {
            var pull        = $('#pull');
                menu        = $('.menu ul');
                menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
 <?php wp_head(); ?>     
</head>   
<body>
    <div class="wrapper">
    <div class="holst">
		<div class="titul">
	    <img src="<?php bloginfo('stylesheet_directory'); ?>/image/titul2.png">
		</div>
		<div class="line1">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/image/granMenu.png">			
		</div>
		<div class="main-menu">
			<div class="menu1">
                <?php
                wp_nav_menu(array(
                    'theme_location' =>'top' , 
                ));
                ?>
					<!--<ul>
						<li><a href="#">Киевская Русь</a></li>
						<li><a href="#">Удельная Русь</a></li>
						<li><a href="#">Русское царство</a></li>
						<li><a href="#">Российская империя</a></li>
						<li><a href="#">СССР</a></li>
						<li><a href="#">Россия</a></li>
					</ul>-->
			</div>
			<div class="menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' =>'top' , 
                ));
                ?>
					<!--<ul>
						<li><a href="#">Киевская Русь</a></li>
						<li><a href="#">Удельная Русь</a></li>
						<li><a href="#">Русское царство</a></li>
						<li><a href="#">Российская империя</a></li>
						<li><a href="#">СССР</a></li>
						<li><a href="#">Россия</a></li>
					</ul>-->
					<div id="pull">
					<div class="navicon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					</div>
			</div>		
		</div>		
						
	
		<div class="line2">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/image/granMenu.png">			
		</div>
	<!--</div>-->