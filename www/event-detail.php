<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-default';
$GLOBALS['_html_title'] = 'Events | Victoria University of Wellington';

includeFile('header.php');

?>


    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Research</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Research</a></h2>
                <ul class='section_tree'>
                    <li class='parent'><a href='research-spotlight.php'>Spotlight on Research</a></li>
                    <li><a href='research-expertise.php'>Research Expertise</a></li>
                    <li><a href=''>Centres &amp; Institutes</a></li>
                    <li><a href=''>Business Development</a></li>
                    <li><a href=''>Culture &amp; Community</a></li>
                    <li><a href=''>Resources &amp; Support</a></li>
                </ul><!-- /section_tree -->
            </nav><!-- /nav_tertiary -->
            <div class='additional_complementary' >
                <h2>Contact the research office</h2>
                <ul>
                    <li>PO Box 600, Wellington 6140, New Zealand</li>
                    <li>Fax: 04 463 5199</li>
                    <li>Phone: 04 463 5620</li>
                </ul>
                <h2>Faculty of graduate research</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <a href='' class='bullet_link'>Visit their website</a>
                </p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /complementary -->

    <div id='content'>
        <section role='main' class='primary'>
            <ul class='breadcrumb'>
                <li><a href=''>Research</a></li>
                <li><a href=''>Spotlight on research</a></li>
            </ul><!-- /breadcrumb -->
            <div class='entry'>
                <div class="event-details" itemscope itemtype="http://schema.org/Event">
					<h1 class="page_title" itemprop="name">Future students sausage sizzle</h1>
					<h2 itemprop="performers">Presented by Hinemoana Baker; Dr. Toby Daglish</h2>
					
					<h2>Fitness classes</h2>
					<h3>An awesome series of events</h3>
					
					<h3><span itemprop="startDate" content="2013-06-11">11th Jun 2013</span> to <span itemprop="endDate" content="2013-06-11">11th Jun 2013</span></h3>    
					<h4 itemprop="location">Recreation Centre, Kelburn</h4>
					
					<!-- Teaser -->
					<div class="intro">
					<p itemprop="description">Teaser blue bottle direct trade butcher art party, photo booth flexitarian brooklyn fashion axe before they sold out bespoke locavore street art.</p>
					</div>

					<div itemprop="image">
                        <img src="http://www.victoria.ac.nz/__data/assets/image/0020/209207/varieties/ls_medium.jpg" alt="Professor Timothy Little" title="timothy_little_3200x1800.jpg">
                    </div>

					<p><p>Bushwick tonx sriracha 8-bit, sartorial gastropub narwhal banjo cosby sweater blog authentic iphone freegan VHS hella. Artisan fingerstache meggings street art. Banh mi actually mumblecore, put a bird on it echo park salvia photo booth wes anderson etsy vinyl craft beer pickled. Post-ironic freegan small batch deep v, dreamcatcher odd future skateboard art party. Blog williamsburg banksy flexitarian tousled. Single-origin coffee bicycle rights mustache synth, cardigan ennui cosby sweater. Banh mi tonx pork belly swag, pinterest VHS DIY locavore direct trade sriracha bushwick.</p>
					</p>

					<p>
					<a itemprop="url" class="button x_large register" href="http://register.this">Register</a>

					 <span>$3540 plus GST</span>
					</p>

					<p>RSVP text goes here, post-ironic freegan small batch deep v, dreamcatcher odd future skateboard art party.</p>

                    <p><strong>Organiser:</strong> Faculty of Science</p>

					<p><strong>For more information contact:</strong> Tracy Warbrick, New Zealand Institute for the Study of Competition and Regulation</p>

					<ul class="contacts_list">

					<li><a href="jane.bloggs@vuw.ac.nz" itemprop="email">jane.bloggs@vuw.ac.nz</a></li>

					<li><a href="tel:04 4639670">04 4639670</a></li>

					</ul>

					<h6>Speaker Bios</h6>
					<p>Hinemoana swag VHS kale chips fap bicycle rights. Ugh high life chillwave, williamsburg fixie photo booth selvage 3 wolf moon organic lo-fi hoodie. Neutra bushwick cliche etsy. <br />
					<br />
					Dr Toby Daglish aesthetic odd future godard, trust fund pug pitchfork etsy 90's pour-over gluten-free banksy literally put a bird on it</p>

				</div> <!-- end event-details TODO: can we move the wrapping div elsewhere? -->

            </div><!-- /content -->
        
        </section><!-- /main -->
        
        <?php //includeFile('complementary-news.php'); ?>
    
    </div><!-- /#content -->

<?php
includeFile('footer.php');
