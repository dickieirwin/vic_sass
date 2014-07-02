<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-study';
$GLOBALS['_html_title'] = 'Content page | Victoria University of Wellington';

includeFile("header.php");

?>


    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Study at Victoria</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Courses</a></li>
                    <li><a href=''>Is Victoria right for you?</a></li>
                    <li class='current parent'><a href=''>Apply &amp; enrol</a>
                        <ul>
                            <li class='parent'><a href=''>Postgraduate admissions</a>
                            <ul>
                                <li><a href=''>Fees</a></li>
                                <li><a href=''>Calculate your Fees</a></li>
                                <li><a href=''>How to Pay</a></li>
                                <li><a href=''>Loans and Allowances</a></li>
                                <li><a href='' class='current'>Scholarships</a>
                                    <ul>
                                        <li><a href=''>Search Scholarships</a></li>
                                        <li><a href=''>Browse scholarships by name</a></li>
                                        <li><a href=''>Browse prizes</a></li>
                                        <li><a href=''>All scholarships for the next 12 months</a></li>
                                        <li><a href=''>Summer Research Scholarships</a></li>
                                    </ul>
                                </li>
                                <li><a href=''>Withdrawals and Refunds</a></li>
                            </ul>
                            </li>
                            <li><a href=''>Enrolling</a></li>
                            <li><a href=''>Fees &amp; Scholarships</a></li>
                        </ul>
                    </li>
                    <li><a href=''>Events &amp; Opendays</a></li>
                    <li><a href=''>New Students</a></li>
                    <li><a href=''>Accommodation &amp; Student Services</a></li>
                    <li><a href=''>Teaching &amp; Learning</a></li>
                    <li><a href=''>Parents &amp; Whanau</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2 class=''>Contact the admissions office</h2>
                <p class=''>
                    PO Box 600, Wellington 6140,
                    New Zealand <br />
                    Phone: <strong>04 463 5620</strong> <br />
                    Fax: 04 463 5199 <br />
                </p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /complementary -->

    <div id='content'>
        <section role='main' class='primary'>
            <ul class='breadcrumb'>
                <li><a href=''>Study at Victoria</a></li>
                <li><a href=''>Apply &amp; Enroll</a></li>
                <li><a href=''>Postgraduate admissions</a></li>
            </ul>
            <div class='entry'>
                <h1 class='page_title'>Scholarships</h1>
                <div class='bleed highlight highlight_secondary'>
                    <h2>The Scholarship database</h2>
                    <p>The <a href=''>Scholarships Database</a> is a comprehensive and current list of scholarships available to existing or potential Victoria University students. Application forms and regulations for scholarships administered by the University can be downloaded from the database as well as a calendar of closing dates for the next twelve months. You can search by name, level or subject area.</p>
                </div>
                <h3>School Leaver scholarships</h3>
                <p>Victoria University currently offers two main first year scholarships, Victoria Excellence and Victoria Achiever Scholarships. Current Scholarship regulations are available from the links below.</p>
                <a href=''>Victoria Achiever Scholarships</a> <a href=''>Victoria Excellence Scholarships</a>
                <h3>Graduate Scholarships</h3>
                <p>The Scholarships Database is a comprehensive and current list of scholarships available to existing or potential Victoria University students. Application forms and regulations for scholarships administered by the University can be downloaded from the database as well as a calendar of closing dates for the next twelve months. You can search by name, level or subject area.</p>
                <h3>Postgraduate Scholarships</h3>
                <p>The Postgraduate Scholarships Update is a bulletin published monthly - it advises about postgraduate scholarships opportunities currently available both internal and external. The Postgraduate Scholarships Update is available for download below.</p>
                <a href=''>Download the Postgraduate Scholarships Update 327kb PDF</a>
                <h3>Scholarships for international Students</h3>
                <p>The Scholarships Database is a comprehensive and current list of scholarships available to existing or potential Victoria University students. Application forms and regulations for scholarships administered by the University can be downloaded from the database as well as a calendar of closing dates for the next twelve months. You can search by name, level or subject area.</p>
            </div><!-- /content -->
        </section><!-- /main -->
       <?php includeFile('complementary-events.php'); ?>
    </div><!-- /page -->



<?php
includeFile("footer.php");
