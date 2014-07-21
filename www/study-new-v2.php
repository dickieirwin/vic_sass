<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_body_class'] = 'theme-study';
$GLOBALS['_html_title'] = 'Study at Victoria';

includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/pages/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

<style type="text/css">
    
    #new_banner {
        height: 379px;
        width: 100%;
        background-image: url("assets/images/bear_banner.jpg");
        background-size: 100% auto;

       
    }

    
    .right_banner {
        float: right;
        width: 50%;
        height: 100%;
        background-color: rgba(250, 250, 250, 0.7);
        padding-right: 6%;
    }

    .left_banner{
        width: 50%;
        height: 100%;
        float: left;
        background-color: rgba(250, 250, 250, 0.7);
        color: #64a659;
        padding: 3% 6%;
        
    }
    
    h1 {
            color: #64a659;
    }

    #content {
        margin-right: auto;
        margin-left: auto;
        float: none;
        width: 100%;
    }
    #content>.primary {
        width: 100%;
    }

    .help {
        width: 70%;
        float: right;
    }

    .help select {
        height: 60px;
        margin-top: 5%;
    }

    .col2 {
        padding: 0 1.5% ;
    }


</style>

    <?php //includeFile('search.php'); ?> 

    <aside id='section_menu'>
    <div id='menu_toggle' class='toggle'>
        <span>Future Students</span>
    </div>
    <div class='toggle_block'>

    </div>
    <!-- /toggle_block -->
</aside>
<!-- /complementary -->
<div id='hero'>
    
    <div class='homepage_feature'>

        <div class='hero-container hero-container--gallery-3'>
            <a class='hero-image hero-image--primary' href='#'>
                <div class='hero-image__container' >
                  <img src='/images/kym_h.jpg' alt='research dummy'>
                </div>

                <span class='hero-image__text -large left_text'>
                    <h1>Know Your Mind.</h1>
                    <h2>Apply it now.</h2>
                    <span class='image__text-big'></span>
                </span>
            </a>
    </div><!-- /homepage_feature -->
</div><!-- /hero -->
<div id='content'>

    <section role='main' class='primary'>

        <div class='entry'>

            <!-- <h1 class='page_title'>Study at Victoria</h1>
                <div class='intro'>
                    <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
                </div> /intro -->

            <div class="columns columns3">
                <div class='col col1'>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="http://fillmurray.com/350/200">
                        </a>
                        <footer>
                            <h2>Be cool like Bill</h2>
                            <p>See why finding parallels between maths and music made doing a Bachelor of Science the logical choice for pianist Jasmine Hall.</p>
                            <a href="#">More stories</a>
                        </footer>
                    </div>
                    <div class='link_block rule'>
                        <h3><a href=''>Courses</a>
                        </h3>
                        <p>With over 3,290 different courses there&rsquo;s bound to be something for you.</p>
                    </div>
                    <div class='link_block'>
                        <h3><a href=''>Is Victoria Right for you?</a>
                        </h3>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        <a class='bullet_link' href='#testdownload'>Link one</a>
                    </div>
                    <div class='link_block'>
                        <h3><a href=''>Accomodation Student Services</a>
                        </h3>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                    </div>
                    
                </div>
                <div class='col col2'>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="http://nicenicejpg.com/350/200">
                        </a>
                        <footer>
                            <h2>You can Cook MC's like Ice</h2>
                            <p>See why finding parallels between maths and music made doing a Bachelor of Science the logical choice for pianist Jasmine Hall.</p>
                            <a href="#">More stories</a>
                        </footer>
                    </div>
                    <div class='link_block rule'>
                        <h3><a href=''>Courses</a>
                        </h3>
                        <p>With over 3,290 different courses there&rsquo;s bound to be something for you.</p>
                    </div>
                    <div class='link_block'>
                        <h3><a href=''>Events, Openday Visits</a>
                        </h3>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        <a class='bullet_link' href='#test2'>Link one</a>
                        <a class='bullet_link' href='#test3'>Link one</a>
                    </div>
                    <div class='link_block'>
                        <h3><a href=''>Teaching &amp; Learning</a>
                        </h3>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                    </div>
                </div>
                <div class='col col3'>
                    <div class='highlight_secondary'>
                        <a class="video_popup bleed_me" href="">
                            <img class="video_thumb" src="http://placesheen.com/350/200">
                        </a>
                        <footer>
                            <h2>Charlie is now a winner</h2>
                            <p>See why finding parallels between maths and music made doing a Bachelor of Science the logical choice for pianist Jasmine Hall.</p>
                            <a href="#">More stories</a>
                        </footer>
                    </div>
                    <div class='link_block rule'>
                        <h3><a href=''>Courses</a>
                        </h3>
                        <p>With over 3,290 different courses there&rsquo;s bound to be something for you.</p>
                    </div>
                    <div class='link_block'>
                        <h3><a href=''>Events, Openday Visits</a>
                        </h3>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        <a class='bullet_link' href='#test2'>Link one</a>
                        <a class='bullet_link' href='#test3'>Link one</a>
                    </div>
                    <div class='link_block'>
                        <h3><a href=''>Teaching &amp; Learning</a>
                        </h3>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>

</div>

<?php
includeFile('footer.php');
