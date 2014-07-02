<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'has_big_search theme-study';
$GLOBALS['_html_title'] = 'Study at Victoria';

includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/pages/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <?php includeFile('search.php'); ?>
    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Future Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='' data-short-title='Overview'><span>Future Students</span></a></h2> <!-- added span and data attribute to toggle display on tablets and mobiles -->
                <ul class='section_tree'>
                    <li><a href=''>Programmes &amp; Courses</a></li>
                    <li><a href=''>Build your dream job</a></li>
                    <li><a href=''>Why choose Victoria?</a></li>
                    <li><a href=''>Admissions &amp; Enrolment</a></li>
                    <li><a href=''>Financing your study</a></li>
                    <li><a href=''>Services &amp; Support</a></li>
                </ul><!-- /section_tree -->
            </nav><!-- /nav_tertiary -->
            <div class='additional_complementary' >
                <h2>Contact the research office</h2>
                <p>
                    PO Box 600, Wellington 6140,<br /> New Zealand
                    Fax: 04 463 5199<br />
                    Phone: 04 463 5620
                </p>
                <h2>Faculty of graduate research</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /complementary -->

    <div id='content'>
        <div id='hero' class='grid style1'>
            <a href='#'>
                <div class='imagery'>
                    <img class='primary' src='/images/hero-smiling_girl.jpg' alt='Smiling girl' />
                    <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                    <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                    <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                    <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                    <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                    <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                </div>
                <div class='info'><p>Get connected &ndash; read our handy guide to getting online both on campus and at home. <span class="action">Download it now.</span></p></div>
            </a>
        </div><!-- /hero -->
        <section role='main' class='primary'>
            <div class='entry'>
                <h1 class='page_title'>Get amongst the best at Victoria</h1>
                <div class='intro'>
                    <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
                </div><!-- /intro -->
                <div class='columns columns2'>
                <div class='col col1'>
                    <div class='link_block'>
                        <h2><a href=''>Courses</a></h2>
                        <p>With over 3,290 different courses there&rsquo;s bound to be something for you.</p>
                    </div>
                    <div class='link_block'>
                        <h2><a href=''>Is victoria Right for you?</a></h2>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        <a class='bullet_link' href=''>Link one</a>
                    </div>
                    <div class='link_block'>
                        <h2><a href=''>Accomodation Student Services</a></h2>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                    </div>
                    <div class='link_block'>
                        <h2><a href=''>Events, Openday Visits</a></h2>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        <a class='bullet_link' href=''>Link one</a>
                        <a class='bullet_link' href=''>Link one</a>
                    </div>
                    <div class='link_block'>
                        <h2><a href=''>Teaching &amp; Learning</a></h2>
                        <p>With over 3,290 different courses there’s bound to be something for you.</p>
                    </div>
                </div><!-- /one_of_two -->
                <div class='col col2'>
                    <a class='promo highlight highlight_primary'>
                        <h2 class='promo_headline' href=''>Apply and Enrol</h2>
                        <p>Applications for Semester Two close on June 30th!</p>
                    </a><!-- /promo -->
                    <div class="widget highlight highlight_secondary">
                        <h2>Course Finder</h2>
                        <form action="">
                            <fieldset>
                                <div class="field_container">
                                    <label for="term">Year/Trimester</label>
                                    <select name="" id="term">
                                        <option>2012 - all trimesters</option>
                                        <option>2012 - Summer</option>
                                        <option>2012 - Winter</option>
                                    </select>
                                </div>
                                <div class="field_container">
                                    <label for="course_level">Level</label>
                                    <select name="" id="course_level">
                                        <option>Undergraduate - Level 100</option>
                                        <option>Undergraduate - Level 50</option>
                                        <option>Undergraduate - Level 25</option>
                                    </select>
                                </div>
                                <div class="field_container">
                                    <label for="subject">Subject</label>
                                    <select name="" id="subject">
                                        <option>All subjects</option>
                                        <option>Design</option>
                                        <option>Development</option>
                                    </select>
                                </div>
                            </fieldset>
                            <input class='button primary' type='submit' value='Show Courses'>
                            <a class='button tertiary' href=''>Course A-Z</a>
                        </form>
                    </div><!-- /widget -->
                </div><!-- /one_of_two -->
                </div>
            </div><!-- /content -->
        </section><!-- /main -->
        <?php includeFile('complementary-dates.php'); ?>
    </div><!-- /page -->

<?php
includeFile('footer.php');
