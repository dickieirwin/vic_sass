<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-students alert_active';
$GLOBALS['_html_title'] = 'Student Hub | Victoria University of Wellington';

includeFile('header-alert.php');

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Current Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Current Students</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Manage your studies</a></li>
                    <li><a href=''>Manage your money</a></li>
                    <li><a href=''>Services and support</a></li>
                    <li><a href=''>On Campus</a></li>
                    <li><a href=''>New Students</a></li>
                    <li><a href=''>Get Involved</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2>Student Services</h2>
                <ul class='bullet_list divider_list'>
                    <li><a href=''>Accommodation</a></li>
                    <li><a href=''>Advocacy &amp; equity</a></li>
                    <li><a href=''>Bookshop</a></li>
                    <li><a href=''>Careers &amp; employment</a></li>
                    <li><a href=''>Chaplains</a></li>
                    <li><a href=''>Childcare</a></li>
                </ul>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /navigation -->

    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Current Students</a></li>
        </ul><!-- /breadcrumb -->

        <div id='hero' class='grid style1'>
            <a href='#'>
                <div class='imagery'>
                    <img class='primary' src='/images/hero_students_computer.jpg' alt='Students at a computer' />
                    <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                    <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                    <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                    <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                    <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                    <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                </div>
                <div class='info'><p>Get connected – read our handy guide to getting online both on campus and at home.</p></div>
            </a>
        </div><!-- /hero -->

        <div class='entry'>
            <h1 class='page_title'>Current Students</h1>

               <div class='alert'>
                   <h2>This is a minor in page alert</h2>
                   <p>It's imagined these will get used for announcements such as urgent deadlines or specific items that will be meaningful to lots of users in a given area. They can contain <a href=''>inline links</a> and bigger calls to action. <a class="button">Find out more</a></p>
                   <a href='#' class='close close_button' >Close</a>
               </div>

            <div class='intro'>
                <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
            </div><!-- /intro -->
            <div class='one_of_two'>
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
            <div class='one_of_two'>
                <a class='promo highlight highlight_primary'>
                    <h2 class='promo_headline' href=''>Apply and Enrol</h2>
                    <p>Applications for Semester Two close on June 30th!</p>
                </a><!-- /promo -->
                <div class='widget highlight highlight_secondary widget_to_col'>
                    <h3>Course Finder</h3>
                    <div id='course_finder'>
                        <form action=''>
                            <fieldset>
                                <label for='term'>Year/Trimester</label>
                                <select name='' id='term'>
                                    <option>2012 - all trimesters</option>
                                    <option>2012 - Summer</option>
                                    <option>2012 - Winter</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label for='course_level'>Level</label>
                                <select name='' id='course_level'>
                                    <option>Undergraduate - Level 100</option>
                                    <option>Undergraduate - Level 50</option>
                                    <option>Undergraduate - Level 25</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label for='subject'>Subject</label>
                                <select name='' id='subject'>
                                    <option>All subjects</option>
                                    <option>Design</option>
                                    <option>Development</option>
                                </select>
                            </fieldset>
                            <input class='ui_button ui_color_a' type='submit' value='Show Courses'>
                            <a class='ui_button ui_color_w' href=''>Course A-Z</a>
                        </form>
                    </div>
                </div><!-- /widget -->
            </div><!-- /one_of_two -->
        </div><!-- /content -->
    </section><!-- /main -->
    <?php includeFile('complementary-dates.php'); ?>
    </div><!-- /page -->


<?php
includeFile('footer.php');
