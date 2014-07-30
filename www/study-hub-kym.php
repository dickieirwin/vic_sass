<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_body_class'] = 'theme-study a has_big_search template-drilldown study_hub';
$GLOBALS['_html_title'] = 'Study at Victoria';

includeFile('header.php');

?>


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
        </a>
    </div>
    <div class='entry'>
        <section role='main' class='primary'>
            <div class="intro_wrapper">
            <header class="entry-header">
                <h1 class='page_title'>Study at Victoria</h1>
                <div class='intro'>
                    <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
                </div>
                <!-- /intro -->
            </header>
             <div class='promo highlight_tertiary'>
                
                <header><h2 class='promo_headline' href=''>Important dates</h2></header>
                <div class='promo_body date_block'>
                    
                    <h6>29 August 2014</h6>
                    <a href="http://www.victoria.ac.nz/study/events-visits/study-at-victoria-day">
                        <h3>Study at Victoria Day</h3>
                    </a>
                    <a href="#"><button>See all the deadlines</button></a>
                </div>
                
            </div>
        </div>

            <div class="columns columns3">

                <div class='col col1'>
                    <div class='highlight_secondary set_height'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/hine.jpg">
                        <footer>
                                <h2>University is more than studying.</h2>
                                <p>“There are so many things you can get involved in, it’s like being enveloped in a community.”</p>
                        </footer>
                            </a>
                    </div>
                       <div class='highlight_secondary set_height'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/sam.jpg">
                        <footer>
                            
                                <h2>Explore accommodation options</h2>
                                <p>In 2015, Victoria will have even more spaces available for first-year students. Hall of residence applications open 1 August.</p>
                        </footer>
                            </a>
                    </div>
                </div>
                <div class='col col2'>
                    <div class='highlight_secondary set_height'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/theo.jpg">
                        <footer>
                            <h2>Being a student in Wellington</h2>
                            <p>“From that first moment—this beautiful sunny day—we walked through the city and I just fell in love with it.”</p>
                        </footer>
                            </a>
                    </div>
                    <div class='highlight_secondary set_height'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/sarah.jpg">
                        <footer>
                            <h2>Study with the best</h2>
                            <p>“So, I thought:  if I want to be the best, I have to study with the best.” </p>
                        </footer>
                            </a>
                    </div>
                </div>
                <div class='col col3'>
                    <div class='highlight_secondary set_height'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/robby.jpg">
                        <footer>
                            <h2>Forge your path</h2>
                            <p>“Victoria has opened my mind to what I can do.” </p>
                        </footer>
                            </a>
                    </div>
                    <div class='highlight_secondary set_height'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="/images/josh.jpg">
                        <footer>
                            <h2>Scholarship applications due</h2>
                            <p>Victoria has 400 Excellence scholarships and 70 Achiever scholarships to award for 2015. Apply now. </p>
                        </footer>
                            </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
includeFile('footer_new.php');
