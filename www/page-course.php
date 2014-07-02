<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_body_class'] = 'theme-study';
$GLOBALS['_html_title'] = 'Study at Victoria';

includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/pages/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Future Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Programmes &amp; Courses</a></li>
                    <li><a href=''>Build your dream job</a></li>
                    <li><a href=''>Why choose Victoria?</a></li>
                    <li><a href='/section-admissions.php'>Admissions &amp; Enrolment</a></li>
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
<!--
        <div id='hero' class='grid style1'>
            <a href='#'>
                <div class='imagery'>
                    <img src='/images/hero-smiling_girl.jpg' alt='Smiling girl' />
                    <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                    <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                    <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                    <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                    <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                    <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                </div>
                <div class='info'><p>Get connected &ndash; read our handy guide to getting online both on campus and at home. <span class="action">Download it now.</span></p></div>
            </a>
        </div>
-->
        <section role='main' class='primary'>
            
            <div class='entry'>
                
                <h1 class='page_title'><span class="course-code">SARC 161</span> Introduction to Design Communication</h1>
                <div class='intro'>
                    <p>Studio-based projects introduce principles, media and techniques used in the representation of three-dimensional design concepts. Conventions for describing formal and spatial subjects in scaled drawings, physical models and text together with the depiction of moods and meanings which are projected onto places by human occupants.</p>
                </div>
<!--                 <table class="coursetable" summary="This table shows details of the course."><tbody><tr><th scope="col">Points:</th><td>15</td><th scope="col"><span class="help" title="A course you must have passed before you can enrol in this course.">Prerequisites</span>:</th><td>None</td></tr><tr><th scope="col"><span class="help" title="Each Faculty is responsible for a range of programmes in which students enrol.">Faculty:</span></th><td>Science</td><th scope="col"><span class="help" title="A course you must study at the same time as this course, if not already passed.">Corequisites:</span></th><td>None</td></tr><tr><th scope="col" valign="top"><span class="help" title="Schools carry out teaching, research and scholarship functions.">School:</span></th><td>Psychology</td><th scope="col"><span class="help" title="If you have passed a course listed as a restriction, then you can’t take this course.">Restrictions:</span></th><td>None</td></tr></tbody></table>             -->
                
                    <dl class="course-data">
                        <dt>Points</dt>
                        <dd>15</dd>
                        <dt>Prerequisites</dt>
                        <dd>None</dd>
                        <dt>Faculty</dt>
                        <dd>Architecture &amp; Design</dd>
                        <dt>Corequisites</dt>
                        <dd>None</dd>
                        <dt>School</dt>
                        <dd>Architecture</dd>
                        <dt>Restrictions</dt>
                        <dd>ARCH 101</dd>
                    </dl>            

                
                <a class='promo highlight highlight_primary'>
                    <h2 class='promo_headline' href=''>Apply and Enrol</h2>
                    <p>Applications for Semester Two close on June 30th!</p>
                </a>

            </div>
        </section>
        <?php includeFile('complementary-course.php'); ?>
    </div>

<?php
includeFile('footer.php');
