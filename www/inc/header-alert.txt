<!DOCTYPE html >
<!--[if lt IE 7]>      <html class="ie6 old_ie no_border_box <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if IE 7]>         <html class="ie7 old_ie no_border_box <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if IE 8]>         <html class="ie8 old_ie <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if gt IE 8]>         <html class="no-js modern_ie <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if !IE]><!--> <html lang='en' class='no-js nav_closed <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>'>        <!--<![endif]-->


    <head>
        <meta charset="UTF-8" />
        <title><?php if (isset($GLOBALS['_html_title']) && !empty($GLOBALS['_html_title'])) { print htmlentities($GLOBALS['_html_title'], ENT_QUOTES); } else { print "Victoria University"; } ?></title>

        <meta name="viewport" id="h_viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

        <!-- Feature detection (rgba, opacity, touch, generated content) & HTML5 shiv -->
        <script src="/assets/js/modernizr.custom.40772.js"></script>

        <!-- Sitewide styles -->
        <link href="/assets/css/style.css" media="screen, projection" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
           document.write("<style type='text/css'>\n");
           document.write(".js_hide{display:none !important;}\n");
           document.write(".js_show_block{display:block !important;}\n");
           document.write("</style>\n");
        </script>
        <noscript>
            <style type='text/css'>
                .no_js_hide{display:none !important;}
                .no_js_show_block{display:block !important;}
            </style>
        </noscript>

        <title>Uni</title>

    </head>

    <body class='<?php if (isset($GLOBALS['_body_class']) && !empty($GLOBALS['_body_class'])) { print '' . $GLOBALS['_body_class']; } ?>'>
    <div class="alert major">
       <div class='wrap'>
           <p><strong>This is a major alert.</strong> Use these for site or section-wide notifications like systems not being available. They are full screen obstacles on mobile so tread carefully!</p>
           <a href='#' class='close close_button'>Close</a>
       </div>
    </div>

    <div role='navigation' id='masthead'>
        <nav class='global_nav wrap'>
            <a href='homepage.php' class='vic_logo'>Victoria University of Wellington</a>
            <ul id='nav_support' class='nav_support'>
                <li><a href='staff-hub.php'>Staff</a></li>
                <li><a href=''><span class='icon library'></span>Library</a></li>
                <li><a href=''>MyVic</a></li>
                <li><a href=''>Blackboard</a></li>
                <li><a href=''>Maps</a></li>
                <li><a href='services.php'>Support</a></li>
                <!-- <li><a class='search accessibility' href=''><span class='icon global_search'></span>Search</a></li>  9 -->
            </ul>
            <ul class='nav_main'>
                <li class='study'><a data-short-title='Study at Vic' href='study-hub.php'>Future Students</a></li>
                <li class='current_students'><a data-short-title='Students' href='students-hub.php'>Current Students</a></li>
                <li class='research'><a href='research-hub.php'>Research</a></li>
                <li class='teaching'><a data-short-title='Learning' href='teaching-hub.php'>Learning & Teaching</a></li>
                <li class='about_us'><a data-short-title='About' href=''>About Us</a></li>
                <li class='masthead_search'>
                 <form class='search_form'>
                    <label for='std_search_query'>Search</label>
                    <input class='field_placeholder' id='std_search_query'  autocomplete="off" autocorrect="off" type='text' name='std_search' />
                    <input type='submit' value='Go' />
                </form>
                </li>
                <li class='home'><a data-short-title='Home' href='homepage.php'>Home</a></li>
            </ul>
            <!-- mobile only -->
            <div class='contact'>
                <h2><a href=''>Contact Us</a></h2>
                <ul class='contact_information'>
                    <li>Switchboard: <a href='tel:+6444721000'>+64 4 472 1000</a></li>
                    <li>If you know the extension:  <a href='tel:+6444635233'>+64 4 463 5233</a></li>
                    <li>Email the helpdesk: <a href="mailto:info-desk@vuw.ac.nz">info-desk@vuw.ac.nz</a></li>
                </ul>
                <a href='' class='button'>More details</a>
            </div>
            <!-- /mobile only -->
        </nav><!-- /primary_nav -->
    </div><!-- /container -->
	
	<div id='wrapper'>
	
    <nav id='mobile_masthead'>
            <ul>
                <li><a href='homepage.php' class='vic_logo'>Victoria University of Wellington</a></li>
                <li><a class='search toggle_search' data-short-title='Search' href='' id='search_link'><span class='icon search'>Search</span> </a></li>
                <li><a href='#primary_nav' class='toggle_menu'>Sections <span class='icon menu'>Menu</span></a></li>
            </ul>
        </nav>
        
        <div id='page' class='wrap'>

