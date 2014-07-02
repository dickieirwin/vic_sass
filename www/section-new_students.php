<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students no_sidebar template-drilldown';
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
                <li><a href=''>Manage your money</a></li>
                <li><a href=''>Services and support</a></li>
                <li><a href=''>On Campus</a></li>
                <li class="parent"><a class="current" href='/section-new_students.php'>New Students</a></li>
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
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->
        <div class='entry'>
            <header class="entry-header">
                <h1 class='page_title'>New Students </h1>
                <div class='intro'>
                    <p>Kia ora and welcome to Victoria University. Whether you are starting your first degree or embarking on postgraduate study, we warmly welcome you.</p>
                    <p>Check out our advice on what to do before you arrive, what to do during New Students' Orientation, and how to succeed in your studies once you get started. If you need any help contact the Student Recruitment, Admission and Orientation team.</p>
                </div><!-- /intro -->
            </header>
            <hr class="rule--light rule--thin" />
            <div class="blocks blocks-2col bleed_box">
                <a class="link_block link_block-has_thumb" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/300/300/university,course" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Enrolment and Course Selection</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>
                </a><a class="link_block link_block-has_thumb" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/300/300/connected,computer" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Getting Connected</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>
                </a><a class="link_block link_block-has_thumb" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/300/300/map" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Getting Around</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>    
                </a><a class="link_block link_block-has_thumb" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/300/300/toga" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Orientation Events in 2014</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>
                </a>
            </div>
            <hr class="rule--light rule--thin" />
            <h2>More options</h2>
            <div class="blocks blocks-2col bleed_box">
                <a class="link_block" href="#">
                    <h3 class=''>Rules and Regulations</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Being Involved</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Finding Help</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a>
            </div>
        </div>
    </section><!-- /main -->
    </div>
<?php
includeFile("footer.php");
