<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-about';
$GLOBALS['_html_title'] = 'News | Victoria University of Wellington';

includeFile("header.php");
?>


    <aside id='section_menu'>
        <h2 class='menu toggle'><a href=''>Research</a></h2>
        <div class='toggle_block'>
            <nav>
                <ul class='section_tree'>
                    <li><a href=''>Research Spotlight</a></li>
                    <li><a href=''>Our Expertise</a></li>
                    <li><a href=''>Centres and Institutes</a></li>
                    <li><a href=''>Business Development</a></li>
                    <li><a href=''>Culture &amp; Community</a></li>
                    <li><a href=''>Resources and Support</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2>Contact the research office </h2>
                <p>
                    PO Box 600, Wellington 6140,
                    New Zealand <br />
                    Phone: <strong>04 463 5620</strong> <br />
                    Fax: 04 463 5199 <br />
                </p>
                <h2>Faculty of graduate research</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <a href=''>Visit the faculty website</a>
            </div>
        </div>
    </aside><!-- /navigation -->

    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Somewhere</a></li>
            <li><a href=''>News lists</a></li>
        </ul>

        <div class='entry'>
            <h1 class='page_title'>Relevant news results</h1>
            <div class='intro'>
                <p>Victoria University of Wellington is one of New Zealand’s top research institutions. Our university is in the capital city, and our researchers enjoy collaborating with people from government agencies, business, and major scientific and cultural institutions in Wellington and around the world.</p>
            </div>
            <div class='block news'>
                <div class='block_secondary'>
                    <h2>Long news article title to see how it wraps in the right column</h2>
                </div>
                <div class='block_primary'>
                    <p>Testing them against cancer and autoimmune and infectious diseases, studying neurochemistry of drug abuse, and understanding decline in fertility in humans and other mammals.</p>
                    <a class='jump_link' href='http://www.victoria.ac.nz/sbs/study/subjects/bmsc'>Read more</a>
                </div>
            </div>
            <div class='block news'>
                <div class='block_secondary'>
                    <h2>Short title</h2>
                </div>
                <div class='block_primary'>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent.</p>
                    <a class='jump_link' href='http://www.victoria.ac.nz/sbs/study/subjects/bmsc'>Read more</a>
                    <a class='jump_link external' href='http://www.victoria.ac.nz/sbs/study/subjects/bmsc'>Read more</a>
                </div>
            </div>
            <div class='block news'>
                <div class='block_secondary'>
                    <h2>Medium length news title</h2>
                </div>
                <div class='block_primary'>
                    <p>Discovering novel natural drugs and testing them against cancer and autoimmune and infectious diseases, studying neurochemistry of drug abuse, and understanding decline in fertility in humans and other mammals.</p>
                    <a class='jump_link' href='http://www.victoria.ac.nz/sbs/study/subjects/bmsc'>Read more</a>
                    <a class='jump_link external' href='http://www.victoria.ac.nz/sbs/study/subjects/bmsc'>Read more</a>
                </div>
            </div>
        </div><!-- /content -->
    </section><!-- /main -->
    <?php includeFile('complementary-links.php'); ?>
    </div><!-- /#content -->



<?php
includeFile("footer.php");