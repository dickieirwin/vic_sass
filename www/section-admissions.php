<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-study no_sidebar template-drilldown';
$GLOBALS['_html_title'] = 'Section Page';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Future Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Programmes &amp; Courses</a></li>
                    <li><a href=''>Build your dream job</a></li>
                    <li><a href=''>Why choose Victoria?</a></li>
                    <li class="parent"><a href=''>Admissions &amp; Enrolment</a>
                        <ul>
                           <li class="parent"><a class="current" href=''>Undergraduate Admission Information</a>
                                <ul>
                                    <li><a href=''>New Zealand University Entrance</a></li>
                                    <li><a href=''>Cambridge International Examinations (CIE)</a></li>
                                    <li><a href=''>International Baccalaureate (IB)</a></li>
                                </ul>                           
                           </li>
                           <li><a href=''>International Students</a></li>
                           <li><a href=''>Admission to Teacher Education Programmes</a></li>
                           <li><a href=''>Postgraduate Admissions</a></li>
                       </ul>
                    </li>
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
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li><a href=''>Home</a></li><li><a href=''>Future Students</a></li><li><a href=''>Admissions & Enrolment</a></li>
        </ul><!-- /breadcrumb -->
        <div class='entry'>
            <header class="entry-header">
                <h1 class='page_title'>Undergraduate Admission Information</h1>
                <div class="intro">
                    <p>Admission is assessed based on your previous qualifications and results. Please choose one of the following to find the admission requirements that apply to you.</p>
                </div><!-- /intro -->
            </header>
            <a class='promo highlight highlight_primary'>
                <h2 class='promo_headline' href=''>Apply and Enrol</h2>
                <p>Applications for Semester Two close on June 30th!</p>
            </a>
            <p>Extra copy sometimes needs to go here</p>
            
            <div class="blocks blocks-3col bleed_box">
                <a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>New Zealand University Entrance</h3>
                        <p>This includes NCEA, Bursary (pre-2004) and University Entrance (pre-1986).</p>
                    </div>
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>Cambridge International Examinations (CIE)</h3>
                        <p>For applicants with a Cambridge International Examinations (CIE) qualification from New Zealand.</p>
                    </div>
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>International Baccalaureate (IB)</h3>
                        <p>For applicants with a International Baccalaureate (IB) qualification from New Zealand.</p>
                    </div>    
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>Qualification Assessment at Entrance Level</h3>
                        <p>This includes combinations of the Cambridge International Examinations from New Zealand or International Baccalaureate from New Zealand with NCEA, plus all - university entrance...</p>
                    </div>
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>Qualification Assessment above Entrance Level</h3>
                        <p>This includes any tertiary study at level 5 or above from another institution.</p>
                    </div>
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>Victoria Entrance Qualification</h3>
                        <p>This includes the Certificate of University Preparation, the Certificate in Foundation Studies or the Tohu Māoritanga from Victoria University.</p>
                    </div>
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>Discretionary Entrance</h3>
                        <p>For students completing Year 12, students making an application following an exchange to an overseas secondary school and for students who wish to enrol in preparatory courses at the...</p>
                    </div>
                </a><a class="link_block" href="#">
                    <div class="link_block_body">
                        <h3 class=''>Special Admission</h3>
                        <p>For New Zealand and Australian citizens, permanent residents and diplomatic passport holders who are over 20 and don't hold a recognised university entrance qualification.</p>
                    </div>
                </a>
            </div>
        </div>
    </section><!-- /main -->
    </div>
<?php
includeFile("footer.php");