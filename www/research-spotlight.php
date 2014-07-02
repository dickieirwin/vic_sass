<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-research no_sidebar research_spotlight';
$GLOBALS['_html_title'] = 'Research Spotlight | Victoria University of Wellington';

includeFile('header.php');

?>


    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Research</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Research</a></h2>
                <ul class='section_tree'>
                    <li><a class='current' href='research-spotlight.php'>Spotlight on Research</a></li>
                    <li><a href='research-expertise.php'>Research Expertise</a></li>
                    <li><a href=''>Centres &amp; Institutes</a></li>
                    <li><a href=''>Business Development</a></li>
                    <li><a href=''>Culture &amp; Community</a></li>
                    <li><a href=''>Resources &amp; Support</a></li>
                </ul><!-- /section_tree -->
            </nav><!-- /nav_tertiary -->
            <div class='additional_complementary' >
                <h2>Contact the research office</h2>
                <p>
                    PO Box 600, Wellington 6140, New Zealand<br />
                    Fax: 04 463 5199<br />
                    Phone: 04 463 5620
                </p>
                <h2>Faculty of graduate research</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /navigation -->

    <div id='content'>
    <section role='main' class='primary'>
        <div class='entry'>
            <h1 class='page_title'>Research Spotlight</h1>
            <div class="intro">
                <p>We celebrate the many interesting things and successful collaborations in our research Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue.</p>
            </div>
            <div class="thumbnail_gallery">
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-01.jpg' alt='research dummy'>
                    <h5>Humanities</h5>
                    <p>Understanding the future of languages by learning from their past</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-02.jpg' alt='research dummy'>
                    <h5>Education</h5>
                    <p>Helping Autistic Children to Communicate</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-03.jpg' alt='research dummy'>
                    <h5>computer science</h5>
                    <p>Disposable Search and Rescue Robots Could Save Lives</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-04.jpg' alt='research dummy'>
                    <h5>ecology &amp; biodiversity</h5>
                    <p>The Golden Fleece &ndash; Adding Value to New Zealand Wool</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-05.jpg' alt='research dummy'>
                    <h5>biomedicine</h5>
                    <p>Searching for a Cure for Multiple Sclerosis</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-06.jpg' alt='research dummy'>
                    <h5>earth &amp; Physical sciences</h5>
                    <p>How Do Ice Sheets Respond to a Warming Ocean?</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-01.jpg' alt='research dummy'>
                    <h5>Humanities</h5>
                    <p>Understanding the future of languages by learning from their past</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-02.jpg' alt='research dummy'>
                    <h5>Education</h5>
                    <p>Helping Autistic Children to Communicate</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-03.jpg' alt='research dummy'>
                    <h5>computer science</h5>
                    <p>Disposable Search and Rescue Robots Could Save Lives</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-04.jpg' alt='research dummy'>
                    <h5>ecology &amp; biodiversity</h5>
                    <p>The Golden Fleece &ndash; Adding Value to New Zealand Wool</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-05.jpg' alt='research dummy'>
                    <h5>biomedicine</h5>
                    <p>Searching for a Cure for Multiple Sclerosis</p>
                </a>
                <a class='thumbnail_link' href='research-article.php'>
                    <img src='/images/research_dummy-06.jpg' alt='research dummy'>
                    <h5>earth &amp; Physical sciences</h5>
                    <p>How Do Ice Sheets Respond to a Warming Ocean?</p>
                </a>
            </div><!-- /thumbnail_gallery -->
            <a class='ui_button ui_color_w' href=''>Load more</a>
        </div><!-- /content -->
    </section><!-- /main -->
    </div><!-- /#content -->




<?php
includeFile('footer.php');
