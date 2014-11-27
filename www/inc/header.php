<!DOCTYPE html >
<!--[if lt IE 7]>      <html class="ie6 old_ie no_border_box <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if IE 7]>         <html class="ie7 old_ie no_border_box <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if IE 8]>         <html class="ie8 old_ie <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if gt IE 8]>         <html class="no-js modern_ie nav_closed <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>"> <![endif]-->
<!--[if !IE]><!--> <html lang='en' class='no-js nav_closed <?php if (isset($GLOBALS['_html_class']) && !empty($GLOBALS['_html_class'])) { print ' ' . $GLOBALS['_html_class']; } ?>'>        <!--<![endif]-->


    <head>
        <meta charset="UTF-8" />
        <title><?php if (isset($GLOBALS['_html_title']) && !empty($GLOBALS['_html_title'])) { print htmlentities($GLOBALS['_html_title'], ENT_QUOTES); } else { print "Victoria University"; } ?></title>

        <meta name="viewport" id="h_viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name = "format-detection" content = "telephone=no">
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png" />
        
        <link rel="apple-touch-icon-precomposed" href="touch-icon-iphone.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icon-ipad.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="touch-icon-ipad-retina.png" />

        <!-- Feature detection (rgba, opacity, touch, generated content) & HTML5 shiv -->
        <script src="/assets/js/modernizr.custom.23652.js"></script>
        <script src='/assets/js/jquery-1.10.2.min.js'></script>
        
        <!-- Sitewide styles -->
        <link href="/assets/css/style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="/assets/css/squiz-local.css" media="all" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><link href="/assets/css/ie8.css" media="all" rel="stylesheet" type="text/css" /><![endif]-->

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
        

        <!--Live Reload script-->
         <script src="//localhost:35729/livereload.js"></script>    
        <!--Live Reload script /end-->

    </head>
    <body class='<?php if (isset($GLOBALS['_body_class']) && !empty($GLOBALS['_body_class'])) { print '' . $GLOBALS['_body_class']; } ?>'>
	<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div role='navigation' id='masthead'>
		<img src="/assets/images/print-logo.png" width="200" class="print-only"  />
        <nav class='global_nav wrap'>
            <a href='homepage.php' class='vic_logo'>Victoria University of Wellington</a>
						<ul id="nav_support" class="nav_support">
                          <li><a href="https://www.victoria.ac.nz/staff">Staff</a></li>
                          <li><a href="http://library.victoria.ac.nz/library/">Library</a></li>
                          <li><a href="https://my.vuw.ac.nz/">MyVictoria</a></li>
                          <li><a href="http://blackboard.vuw.ac.nz/">Blackboard</a></li>
                          <li><a href="http://www.victoria.ac.nz/about/explore-victoria/campuses">Maps</a></li>
                          <!--<li><a href="http://www.victoria.ac.nz/services-and-support">Support</a></li>-->
                        </ul>
            <ul class='nav_main'>
                <li class='study'><a data-short-title='Study at Vic' href='study-hub.php'>Future students</a></li>
                <li class='current_students'><a data-short-title='Students' href='students-hub.php'>Current students</a></li>
                <li class='research'><a href='research-hub.php'>Research</a></li>
                <li class='teaching'><a data-short-title='Learning' href='teaching-hub.php'>Learning & teaching</a></li>
                <li class='about_us'><a data-short-title='About' href=''>About us</a></li>
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


