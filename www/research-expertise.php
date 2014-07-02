<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-research no_sidebar';
$GLOBALS['_html_title'] = 'Research Expertise';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span class="section_name">Research</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Research</a></h2>
                <ul class='section_tree'>
                    <li><a href='research-spotlight.php'>Research Spotlight</a></li>
                    <li class='parent'><a class='current' href='research-expertise.php'>Our Expertise</a>
                       <ul>
                           <li><a href=''>Health &amp; Biomedical Sciences</a></li>
                           <li><a href=''>Humanities &amp; Creative Arts</a></li>
                           <li><a href=''>Earth &amp; Physical Sciences</a></li>
                           <li><a href=''>Ecology &amp; Biodiversity</a></li>
                           <li><a href=''>Engineering, Computer Science &amp; Mathematics</a></li>
                           <li><a href=''>Architecture &amp; Design</a></li>
                           <li><a href=''>Law, Policy &amp; Government</a></li>
                           <li><a href=''>Maori Knowledge &amp; Development</a></li>
                           <li><a href=''>Business</a></li>
                           <li><a href=''>Education &amp; Social Sciences</a></li>
                       </ul>
                    </li>
                    <li><a href=''>Centres and Institutes</a></li>
                    <li><a href=''>Business Development</a></li>
                    <li><a href=''>Culture &amp; Community</a></li>
                    <li><a href=''>Resources and Support</a></li>
                </ul>
            </nav>

            <div class='additional_complementary' >
                <h2>Contact the research office</h2>
                <p>
                    PO Box 600, Wellington 6140,
                    New Zealand <br />
                    Phone: <strong>04 463 5620</strong> <br />
                    Fax: 04 463 5199 <br />
                </p>
                <h2>Faculty of graduate research</h2>
                <div>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    <a href=''>Visit the faculty website</a>
                </div>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /navigation -->

    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->
        <div class='entry'>
            <h1 class='page_title'>Our Expertise</h1>
            <div class='intro'>
                <p>Victoria University of Wellington is one of New Zealand’s top research institutions. Our university is in the capital city, and our researchers enjoy collaborating with people from govsernment agencies, business, and major scientific and cultural institutions in Wellington and around the world.</p>
            </div><!-- /intro -->
            <div class="blocks blocks-3col bleed_box">
                <a class="link_block link_block-has_image" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/800/450/architecture,design" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Architecture and Design</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>
                </a><a class="link_block link_block-has_image" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/800/450/business" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Business</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>
                </a><a class="link_block link_block-has_image" href="#">
                    <img class="link_block_image" src="http://flickholdr.com/800/450/earth,science" alt="Placeholder image from flickholdr.com" />
                    <div class="link_block_body">
                        <h3 class=''>Earth and Physical Sciences</h3>
                        <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                    </div>
                </a><a class="link_block" href="#">
                    <h3 class=''>Ecology and Biodiversity</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Education and Social Sciences</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Engineering</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Health and Biomedical Sciences</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Humanities and Creative Arts</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Law, Policy and Government</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Maori Knowledge and Development</h3>
                    <p>Victoria researchers collaborate with scientists and businesses around the world on a range of projects to prevent, diagnose and cure human diseases.</p>
                </a>
            </div>
        </div><!-- /.entry -->
    </section><!-- /main -->
    </div><!-- /#content -->

<?php
includeFile("footer.php");
