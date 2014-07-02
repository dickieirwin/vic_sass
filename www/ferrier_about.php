<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-research';
$GLOBALS['_html_title'] = 'Ferrier Research Institute';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span class="section_name">Ferrier Institute</span></div>
        <div class='toggle_block'
pro>            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Ferrier Institute</a></h2>
                <ul class='section_tree'>
                    <li><a href='ferrier_services.php'>Services</a></li>
                    <li><a href='ferrier_research.php'>Research</a></li>
                    <li><a href='#'>Students</a></li>
                    <li class="current"><a class="current" href='ferrier_about.php'>About</a></li>
                </ul>
            </nav>

            <div class='additional_complementary' >
                <h2>Contact Ferrier Institute</h2>
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

        <div class='homepage_feature'>
            <div id='hero' class='grid style5'>
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
                    <div class='info w30 left70 bottom50 blk'>
                        <h3>Apply now for your 2014 accommodation</h3>
                    </div>

                </a>
            </div><!-- /hero -->
        </div><!-- /homepage_feature -->
        <section role='main' class='primary'>
            <ul class='breadcrumb'>
                <li class='accessibility'>Breadcrumbs</li>
                <li><a href=''>Research</a></li>
            </ul><!-- /breadcrumb -->
            <div class='entry'>
                <h1 class='page_title'>About Ferrier</h1>
                <div class='intro'>
                    <p>The Ferrier Research Institute came into being on 6 January and is the new name for the Carbohydrate Chemistry team that was part of Callaghan Innovation.</p>
                </div><!-- /intro -->
                <div class="columns columns2">
                    <div class="col col1">
                        <div class="link_block">
                            <h3><a href="">Science Leaders</a></h3>
                            <p>Find out about what Services we offer. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
                        </div>
                        <div class="link_block">
                            <h3><a href="ferrier_people.php">Staff Directory</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                        </div>
                        <div class="link_block">
                            <h3><a href="">Vaccancies</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                        </div>


                    </div><!-- end col1 -->
                    <div class="col col2">
                        <div class="link_block">
                            <h3><a href="">The Team</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                        </div>
                        <div class="link_block">
                            <h3><a href="">History</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                        </div>
                        <div class="link_block">
                            <h3><a href="">Robin Ferrier</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                        </div>
                    </div>
                    <!-- /col2 -->
                </div>
            </div><!-- /.entry -->
        </section><!-- /main -->
   <?php includeFile("ferrier_about_sidebar.php");?>
    </div><!-- /#content -->
</div> <!-- end #page -->

<?php includeFile("footer_site_link.php");?>

<?php
includeFile("footer_vic.php");
