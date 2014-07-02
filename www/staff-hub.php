<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-staff has_big_search';
$GLOBALS['_html_title'] = 'Staff - Victoria University of Wellington';

includeFile('header.php');

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Staff</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Staff</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Our University</a></li>
                    <li><a href=''>Services & Support</a></li>
                    <li><a href=''>Staff Support &amp; Benefits</a></li>
                    <li><a href=''>On Campus</a></li>
                    <li><a href=''>News &amp; Events</a></li>
                    <li><a href=''>Student &amp; Course Management</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2>Tools</h2>
                <ul class='bullet_list divider_list'>
                    <li><a href=''>HR Kiosk</a></li>
                    <li><a href=''>Email</a></li>
                    <li><a href=''>Workspace</a></li>
                    <li><a href=''>Blackboard</a></li>
                    <li><a href=''>Banner</a></li>
                    <li><a href=''>Library</a></li>
                </ul>
                <a href=''class='show_more button tertiary'>Show More</a>
            </div>
        </div>
        </aside>
    <?php includeFile('search.php'); ?>
    <div id='content'>
        <section role='main' class='primary'>
            <div class='entry'>
               <h1 class='page_title'>Staff</h1>
                <div class='intro'>
                    <p>Welcome to the new staff page where you'll find handy links to all your tools plus stay in touch with what's happening around campus. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <section class='news news_headlines highlight highlight_secondary bleed'>
                    <article class='featured'>
                        <img src='/images/staff-hub-holder.png' alt='ALAN MACDIARMID BUILDING' />
                        <h6><span class='category'>Campus News</span> <span class='date_posted'>24.05.12</span></h6>
                        <h2>Alan MacDiarmid building receives Gold Award for Excellence</h2>
                        <p>Leading edge design and innovation has seen the Alan MacDiarmid building take top honour in the prestigious Innovate NZ Awards of Excellence. <a href='' class='bullet_link more_link'>Read More</a></p>
                    </article>
                    <article>
                        <h6><span class='category'>Campus News</span> <span class='date_posted'>23.05.12</span></h6>
                        <h2>Education in Crisis</h2>
                        <p>Eminent researchers from Victoria University‘s Faculty of Education will examine current educational concerns such as these during a new six-week lecture series, Education in Crisis? <a href='more_link'>Read More</a></p>
                    </article>
                    <article>
                        <h6><span class='category'>Campus News</span> <span class='date_posted'>23.05.12</span></h6>
                        <h2>Mentor and mentee experience on the General Staff Mentoring Programme</h2>
                        <p>The University mentoring programme aims to support general staff who are keen to use a mentor to assist their professional and personal development.  <a href='more_link'>Read More</a></p>
                    </article>
                    <footer>
                      <a class='button primary'>Load more articles</a> <a class='button transparent'>Go to Victoria News & Events</a> <a class='button transparent'>Subscribe to the VicNews email newsletter</a>
                    </footer>
                </section>
    
                <div class='columns columns2'>
                    <div class='col col1'>
                        <div class='link_block'>
                            <h3 href=''>Courses</h3>
                            <p>With over 3,290 different courses there&rsquo;s bound to be something for you.</p>
                        </div>
                        <div class='link_block'>
                            <h3 href=''>Is victoria Right for you?</h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                            <a class='bullet_link' href=''>Link one</a>
                        </div>
                        <div class='link_block'>
                            <h3 href=''s>Accomodation Student Services</h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        </div>
                    </div><!-- /col -->
                    <div class='col col2'>
                        <a class='promo highlight highlight_primary'>
                            <p class='promo_headline' href=''>Apply and Enrol</p>
                            <p>Applications for Semester Two close on June 30th!</p>
                        </a><!-- /promo -->
                        <div class='link_block'>
                            <h3 href=''>Events, Openday Visits</h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                            <a class='bullet_link' href=''>Link one</a>
                            <a class='bullet_link' href=''>Link one</a>
                        </div>
                        <div class='link_block'>
                            <h3 href=''>Teaching &amp; Learning</h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        </div>
                    </div><!-- /col -->
                </div><!-- /columns -->
            </div>
        </section>
        <?php includeFile('complementary-staff.php'); ?>
    </div>


<?php
includeFile('footer.php');
