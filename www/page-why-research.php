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
        <section role='main' class='primary'>
            <div id='hero' class='grid style1'>
                <div class='imagery'>
                    <img src='/images/hero-research-lab.jpg' alt='Smiling girl' />
                    <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                    <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                    <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                    <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                    <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                    <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                </div>
            </div>
            <div class='entry'>
                <header class="entry_header">
                    <h1 class='page_title'>New Zealand&rsquo;s top research university</h1>
                    <div class='intro'>
                        <p>Victoria is the top ranked university in New Zealand for its research quality. All New Zealand universities are assessed every six years by independent international panels to measure and to rank their research performance. In the most recent ranking, released in April 2013, Victoria was placed first, significantly ahead of all other universities in New Zealand.</p>
                    </div>
                </header>
                <p>Two areas of the University, the Faculty of Humanities and Social Sciences and Toihuarewa as well as the Faculty of Science, recorded a clean sweep with 10 out of 10 subject areas ranked first or second in New Zealand. In addition, the Faculty of Law ranked as the top law school in New Zealand in terms of research quality. Our other faculties and subject areas also performed strongly.</p>
                <h2>New knowledge for the benefit of society</h2>
                <p>Our staff and students are contributing to, and helping to shape, the international research frontiers of a wide range of disciplines. One of our goals is to create new knowledge for the benefit of society.</p>
                <h2>Powering up our PHDs</h2>
                <p>Our PhD students are at the heart of our research culture, and we offer a range of scholarships to support their work. They contribute to our broad research strengths, which range from biotechnology, earth sciences and nuclear magnetic resonance to Māori knowledge, linguistics and law.</p>
                <h2>Research &hearts; Business</h2>
                <p>A number of our researchers are also successful entrepreneurs who have partnered with business to bring new products and ideas to commercial markets.</p>
                <h2>More than 40 research institutes and centres</h2>
                <p>There are more than 40 research institutes and centres at Victoria, each undertaking challenges of national and international concern. Victoria collaborates with nearly 100 universities worldwide—through staff and student exchange agreements, collaborative research and strategic partnerships.</p>
                <h2>Māori Research</h2>
                <p>We are committed to the principles of the Treaty of Waitangi and their implementation in research. Our Māori research framework covers Māori knowledge and development as well as all research which is by Māori, for Māori, involves Māori or is relevant to Māori.</p> 

            </div>
        </section>
        <?php includeFile('complementary-why-page.php'); ?>
    </div>

<?php
includeFile('footer.php');
