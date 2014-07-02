<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-default';
$GLOBALS['_html_title'] = 'Bear - Vic';

includeFile("header.php");

?>



	<aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Bear</span></div>
        <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href=''>Bear</a></h2>
            <ul class='section_tree'>
                <li><a href=''>Bears</a></li>
                <li><a href=''>More Bear</a></li>
                <li><a href=''>Brown Bears</a></li>
                <li><a href=''>Grizzly Bears</a></li>
                <li><a href=''>Polar Bears</a></li>
                <li><a href=''>Even More Bears</a></li>
            </ul>
        </nav>
        </div>
    </aside>


    <div id='content'>
          <div class='homepage_feature'>
        <div id='hero' class='grid style1'>
                <a href='#'>
                    <div class='imagery'>
              <img src="assets/images/bear_banner.jpg" />
              <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                        <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                        <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                        <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                        <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                        <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                    </div>
                    <div class='info w30 left0 bottom50 wht even_bigger'>
                        <h3>Hi!</h3>
                    </div>
            
                </a>
            </div><!-- /hero -->
        </div><!-- /homepage_feature -->

      <section role='main' class='primary'>
  	        <div class="entry">



            </div>
              
  		</section><!-- /main -->
    </div><!-- /content -->

    <style type="text/css">

        html, body {
            height: 100%;
        }

        #wrapper {
            height: 100%;
            margin-top: -111px;
            padding-top: 111px;

        }
        #page.wrap {
            min-height: 100%;
        }
        #page {
            overflow:auto;
            padding-bottom: 412px;
        }
        .site_footer {
            position: relative;
            margin-top: -412px; /* negative value of footer height */
            height: 412px;
            clear:both;
        }

    </style>

    <?php
includeFile("footer.php");

/*

.wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -155px; 
}
.footer, .push {
    height: 155px; 
}

/*

Sticky Footer by Ryan Fait
http://ryanfait.com/

*/