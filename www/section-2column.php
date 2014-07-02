<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students template-drilldown';
$GLOBALS['_html_title'] = 'Section Page';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Current Students</span></div>
        <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href='/students-hub.php'>Current Students</a></h2>
            <ul class='section_tree'>
                <li><a href=''>Manage your studies</a></li>
                <li class="parent"><a class="current" href=''>Manage your money</a></li>
                <li><a href=''>Services and support</a></li>
                <li><a href=''>On Campus</a></li>
                <li><a href='/section-new_students.php'>New Students</a></li>
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
        </div>
        </div>
    </aside>

    <div id='content'>
    <section role='main' class='primary'>
        <div class="entry">
              <h1 class="page_title">Events, open days and visits</h1><div class="intro"><p>If you want to know more about Victoria, see the campus or make sure you’re on the right track for admission, there’s an event that will provide what you need.</p></div><div class="blocks blocks-2col bleed_box">
              <a href="http://new.victoria.ac.nz/study/events-visits/study-at-victoria-day" class="link_block">
              <div class="link_block_body">
                <h3>Study at Victoria Open Day</h3>
                <p>Our main open day, this is held in late August each year. Join us for this very important day.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/campus-tours" class="link_block">
              <div class="link_block_body">
                <h3>Campus tours and school tours</h3>
                <p>Join one of our guided tours of Kelburn Campus, or visit with a school group and get a taste of what life at Victoria is really like.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/wellington-events" class="link_block">
              <div class="link_block_body">
                <h3>Wellington events</h3>
                <p>Discover what sets Victoria apart and prepare for the move to university.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/regional-events" class="link_block">
              <div class="link_block_body">
                <h3>Regional events</h3>
                <p>Come along to a recruitment or information event near you, held nationwide between March and September, and find out more about why Victoria is a great option.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/postgraduate-evenings" class="link_block">
              <div class="link_block_body">
                <h3>Postgraduate information evenings</h3>
                <p>Learn about the different postgraduate study options and how they could benefit you, to help you decide whether it’s the right choice for you.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/year-12-day" class="link_block">
              <div class="link_block_body">
                <h3>Year 12 day on campus</h3>
                <p>At our day for Year 12 students, experience studying at Victoria check you are on the right track with choosing your subjects and getting University Entrance.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/ncea-scholarship-workshops" class="link_block">
              <div class="link_block_body">
                <h3>NCEA scholarship workshops</h3>
                <p>If you’re hoping to gain a scholarship, you can join an exam workshop run by staff in the relevant subject. Get some expert help and get ahead.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/course-planning-weeks" class="link_block">
              <div class="link_block_body">
                <h3>Course planning weeks</h3>
                <p>Talk with us in Auckland and Wellington about your first-year programme during our course planning weeks.</p>
              </div>
            </a><a href="http://new.victoria.ac.nz/study/events-visits/first-year-information-evenings" class="link_block">
              <div class="link_block_body">
                <h3>First-year information evenings</h3>
                <p>Get better prepared for the first-year experience at Victoria.</p>
              </div>
            </a>
                        
            </div>
    </section><!-- /main -->

    <?php includeFile('complementary-dates.php'); ?>

    </div>
<?php
includeFile("footer.php");
