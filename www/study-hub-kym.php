<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_body_class'] = 'has_big_search template-drilldown theme-study';
$GLOBALS['_html_title'] = 'Study at Victoria';

includeFile('header.php');

?>

<style type="text/css">
    
    #hero.grid .hero-image__text {
            background-color: rgba(68, 159, 55, 0.7);
            width: 45%;
            left: 0

        }

        .columns3 .col {
            width: 33.33%;

        }


        .col.col2 {
            padding-left: 1.5%;
            padding-right: 1.5%;
        }

        .left_text h1 {
            color: WHITE;

        }

        .left_text h3  {
            color: WHITE;
            margin-bottom: 2%;

        }

        #content .entry {
            padding-right: 0;
            padding-left: 0;
        }

        .template-drilldown .entry .promo {
            width: 30.33%;
            padding: 0;
            margin: 0;
            background-color: #eee;
            
        }

        .template-drilldown .entry .promo header {
            padding: 3%;
            margin: 0;
            width: 100%;
        }
        .template-drilldown .entry .promo div {
            float: left;
            padding: 3%;
            color: #333;
        }

        .theme-study .highlight_secondary header, .theme-study .highlight_secondary footer {
            min-height: 190px;
            background-color: #f4f4e9;
        }

        .highlight_secondary footer>a {
            color: #333;
        }

        .highlight_secondary footer h2 {
            color: #549349;
        }

        @media (max-width: 760px) {

            #content .entry {
                padding: 3%;
            }

            #hero.grid .hero-image__text {
                width: 100%;
                position: inherit;
                background-color: rgba(68, 159, 55, 1);
            }

            .left_text h3  {
                margin-top: 0;

            }

            #hero.grid .imagery {
                padding-bottom: 50%;
            }

        }



</style>




<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/pages/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <?php includeFile('search.php'); ?>
<aside id='section_menu'>
    <div id='menu_toggle' class='toggle'>
        <span>Study a Victoria</span>
    </div>
    <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href=''>Study at Victoria</a>
            </h2>
            <ul class='section_tree'>
                <li><a href='#'>Programmes &amp; Courses</a>
                </li>
                <li><a href='#'>Plan your career</a>
                </li>
                <li><a href='#'>Apply and enrol</a>
                </li>
                <li><a href='#'>Financing your study</a>
                </li>
                <li><a href='#'>Preparing for university</a>
                </li>
                <li><a href='#'>Explore Victoria</a>
                </li>
            </ul>
            <!-- /section_tree -->
        </nav>
        <!-- /nav_tertiary -->
    </div>
    <!-- /toggle_block -->
</aside>
<!-- /complementary -->
<div id='content'>
    <div id='hero' class='grid style1'>
        <a href='#'>
            <div class='imagery'>
                <img src='/images/akane.jpg' alt='' />
            </div>
            <div class='hero-image__text -large left_text'>
                    <h1>KNOW YOUR MIND. APPLY IT NOW.</h1>
                    <h3>Plan your study with Victoria. Apply now.</h3>
                    <span class='image__text-big'></span>
                </div>


            <!-- <div class='hero-image__text info w40 big'>
                <h3>Start studying in 2015</h3>
                <p>Enrolments now open.
                    <span class="action">Apply now</span>
                </p>
            </div> -->
        </a>
    </div>
    <div class='entry'>
        <section role='main' class='primary'>
            <header class="entry-header">
                <h1 class='page_title'>Study at Victoria</h1>
                <div class='intro'>
                    <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
                </div>
                <!-- /intro -->
            </header>
            <a class='promo highlight_tertiary'>
                <header>
                <h2 class='promo_headline' href=''>Apply and Enrol</h2>
                </header>
                <div>
                    <p>Applications close on June 30th!</p>
                </div>
                
            </a>
            <div class="columns columns3">
                <div class='col col1'>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/hine.jpg">
                     
                        <footer>
                           
                                <h2>University is more than studying.</h2>
                                <p>“There are so many things you can get involved in, it’s like being enveloped in a community.”</p>
                            </a>
                        </footer>
                    </div>
                       <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/sam.jpg">
                        </a>
                        <footer>
                            <a href="#">
                                <h2>Explore accommodation options</h2>
                                <p>In 2015, Victoria will have even more spaces available for first-year students. Hall of residence applications open 1 August.</p>
                            </a>
                        </footer>
                    </div>
                </div>
                <div class='col col2'>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/theo.jpg">
                        </a>
                        <footer>
                            <a href="#">
                            <h2>Being a student in Wellington</h2>
                            <p>“From that first moment—this beautiful sunny day—we walked through the city and I just fell in love with it.”</p>
                            </a>
                        </footer>
                    </div>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/sarah.jpg">
                        </a>
                        <footer>
                            <a href="#">
                            <h2>Study with the best</h2>
                            <p>“So, I thought:  if I want to be the best, I have to study with the best.” </p>
                            </a>
                        </footer>
                    </div>
                </div>
                <div class='col col3'>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/robby.jpg">
                        </a>
                        <footer>
                            <a href="#">
                            <h2>Forge your path</h2>
                            <p>“Victoria has opened my mind to what I can do.” </p>
                            </a>
                        </footer>
                    </div>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/josh.jpg">
                        </a>
                        <footer>
                            <a href="#">
                            <h2>Scholarship applications due</h2>
                            <p>Victoria has 400 Excellence scholarships and 70 Achiever scholarships to award for 2015. Apply now. </p>
                            </a>
                        </footer>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</div>

<?php
includeFile('footer.php');
