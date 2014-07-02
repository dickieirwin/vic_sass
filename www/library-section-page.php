<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-study no_sidebar template-drilldown';
$GLOBALS['_html_title'] = 'Section Page';

includeFile("header.php");

?>
<link href="/assets/css/site-specific/library.css" media="all" rel="stylesheet" type="text/css" />
    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>The Library</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='library-hub.php'>The Library</a></h2>
                <ul class="section_tree">
<li class=""><a href="/library-v2/content/our-libraries" class="label">Our Libraries</a></li><li class="parent"><a href="/library-v2/content/collections" class="label current active">Collections</a>  <ul class="">
<li class=""><a href="/library-v2/content/general-collections" class="label">General Collections</a></li><li class=""><a href="/library-v2/content/digital-collections-0" class="label">Digital Collections</a></li><li class=""><a href="/library-v2/content/jc-beaglehole-room" class="label">JC Beaglehole Room</a></li><li class=""><a href="/library-v2/content/m%C4%81ori-and-pasifika-collections-0" class="label">Māori and Pasifika Collections</a></li>  </ul>
</li><li class=""><a href="/library-v2/content/research-and-study-help" class="label">Research and Study Help</a></li><li class=""><a href="/library-v2/content/using-library-0" class="label">Using the Library</a></li><li class=""><a href="/library-v2/content/about-us" class="label">About Us</a></li>  </ul>
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
        <?php includeFile('library-search.php'); ?>
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
includeFile("footer-library.php");