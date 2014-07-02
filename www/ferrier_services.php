<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-research';
$GLOBALS['_html_title'] = 'Ferrier Research Institute';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span class="section_name">Ferrier Services</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Ferrier Institute</a></h2>
                <ul class='section_tree'>
                    <li class="current"><a class="current" href='ferrier_services.php'>Services</a></li>
                    <li><a href='ferrier_research.php'>Research</a></li>
                    <li><a href='#'>Students</a></li>
                    <li><a href='ferrier_about.php'>About</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2>Contact Ferrier Research Institute</h2>
                <ul class="contacts_block">
                    <li><h4>All enquiries</h4>
                        <a href="mailto:pizza@eatme.com">enquiry@ferrier.ac.nz</a>
                    </li>
                    <li>
                        <h4>Important Number</h4>
                        <a href="tel:04 456 4678">04 46 4678</a>
                    </li>
                </ul>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /navigation -->
    <div id='content'>

        <section role='main' class='primary'>
            <div class='homepage_feature'>
            <div id='hero' class='grid style5'>
                <a href='#'>
                    <div class='imagery'>
                        <img src="http://prototype:8080/images/test_banner.jpg" />
                        <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                        <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                        <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                        <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                        <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                        <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                    </div>
                    <div class='info w30 left70 bottom50 blk'>
                        <h3>Is this needed?</h3>
                    </div>
                    
                </a>
            </div><!-- /hero -->
            <ul class='breadcrumb'>
                <li class='accessibility'>Breadcrumbs</li>
                <li><a href=''>Research</a></li>
            </ul><!-- /breadcrumb -->
            <div class='entry'>
                <h1 class='page_title'>Ferrier Services</h1>
                <div class='intro'>
                    <p>The Ferrier Research Institute came into being on 6 January and is the new name for the Carbohydrate Chemistry team that was part of Callaghan Innovation.</p>
                </div><!-- /intro -->

                <div class="blocks blocks-2col bleed_box">
                    <div class="link_block">
                        <h3><a href="">Contract synthesis</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                    </div>                    
                    <div class="link_block">
                        <h3><a href="">Polymer formulation</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                    </div>
                    <div class="link_block">
                        <h3><a href="">Carbohydrate analysis</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                    </div>
                    <div class="link_block">
                        <h3><a href="">Industrial chemistry</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                    </div>
                </div>
            </div><!-- /.entry -->
        </section><!-- /main -->
        <aside role="complementary" class="secondary">
            
        </aside>
    </div><!-- /#content -->
    
<?php
includeFile("footer-lite.php");
