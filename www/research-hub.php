<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_title'] = 'Research Hub | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'has_big_search theme-research';
includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/page-specific/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <?php includeFile('search.php'); ?>
    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Research</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Research</a></h2>
                <ul class='section_tree'>
                    <li><a href='research-spotlight.php'>Spotlight on Research</a></li>
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
        <div id='hero' class='spotlight'>
            <a class='spotlight_thumbnail' href='research-article.php'>
                <img src='/images/research_dummy-01.jpg' alt='research dummy'>
                <span class='spotlight_info'>
                    <h5>Humanities</h5>
                    <p>Understanding the future of languages by learning from their past</p>
                </span>
            </a>
            <a class='spotlight_thumbnail' href='research-article.php'>
                <img src='/images/research_dummy-02.jpg' alt='research dummy'>
                <span class='spotlight_info'>
                    <h5>Education</h5>
                    <p>Helping Autistic Children to Communicate</p>
                </span>
            </a>
            <a class='spotlight_thumbnail' href='research-article.php'>
                <img src='/images/research_dummy-03.jpg' alt='research dummy'>
                <span class='spotlight_info'>
                    <h5>computer science</h5>
                    <p>Disposable Search and Rescue Robots Could Save Lives</p>
                </span>
            </a>
            <a class='spotlight_thumbnail' href='research-article.php'>
                <img src='/images/research_dummy-04.jpg' alt='research dummy'>
                <span class='spotlight_info'>
                    <h5>ecology &amp; biodiversity</h5>
                    <p>The Golden Fleece &ndash; Adding Value to New Zealand Wool</p>
                </span>
            </a>
            <a class='spotlight_thumbnail' href='research-article.php'>
                <img src='/images/research_dummy-05.jpg' alt='research dummy'>
                <span class='spotlight_info'>
                    <h5>biomedicine</h5>
                    <p>Searching for a Cure for Multiple Sclerosis</p>
                </span>
            </a>
            <a class='spotlight_thumbnail' href='research-article.php'>
                <img src='/images/research_dummy-06.jpg' alt='research dummy'>
                <span class='spotlight_info'>
                    <h5>earth &amp; Physical sciences</h5>
                    <p>How Do Ice Sheets Respond to a Warming Ocean?</p>
                </span>
            </a>
            <div class='spotlight_intro'><p><strong>Research in the spotlight</strong> &ndash; discover the amazing things happening in Victoria's research community. <a href='research-spotlight.php'>View all</a></p></div>
        </div><!-- /hero -->
        <section role='main' class='primary'>
            <div class='entry'>
                <h1 class='page_title'>Research with Impact</h1>
                <div class='intro'>
                    <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
                </div><!-- /intro -->
                <div class='widget widget_large bleed highlight highlight_secondary'>
                    <form action=''>
                        <fieldset>
                            <div class='field_container'>
                                <div class='form_left_col'>
                                    <select name='' id='researcher'>
                                        <option value=''>Find a researcher</option>
                                        <option value='People'>People</option>
                                        <option value='Centres and Institutes'>Centres &amp; Institutes</option>
                                        <option value='Publications'>Publications</option>
                                    </select>
                                </div>
                                <div class='field form_search'>
                                    <input type='text' class='form_text' placeholder='Name or area of expertise'>
                                    <input class='button' type='submit' value='Go'/>
									<div id="find-a-researcher-search-results" class="live_results" style="display: none">
										<ul class="search_results active">
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Biology">Biology</a></li>
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Biomedical Science">Biomedical Science</a></li>
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Biotechnology">Biotechnology</a></li>
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Cell and Molecular Bioscience">Cell and Molecular Bioscience</a></li>
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Conservation Biology">Conservation Biology</a></li>
											<li class="result hovered"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Ecology and Biodiversity">Ecology and Biodiversity</a></li>
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Marine Biology">Marine Biology</a></li>
											<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Microbiology">Microbiology</a></li>
											<li class="show_all"><a class="button tertiary" href="http://new.victoria.ac.nz/research/find-a-researcher?q=bio">View all results</a></li>
										</ul>
									</div>
                                </div>
                            </div>
                        </fieldset>
                        <p class='widget_description'>Do you require an expert to comment? <a href=''>See our media guide</a></p>
                    </form>
					
                </div><!-- /widget_large -->
				<div id="find-a-researcher-search-results" class="live_results">
    <ul class="search_results active"><li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Biology">Biology</a></li>
<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Biomedical Science">Biomedical Science</a></li>
<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Biotechnology">Biotechnology</a></li>
<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Cell and Molecular Bioscience">Cell and Molecular Bioscience</a></li>
<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Conservation Biology">Conservation Biology</a></li>
<li class="result hovered"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Ecology and Biodiversity">Ecology and Biodiversity</a></li>
<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Marine Biology">Marine Biology</a></li>
<li class="result"><a href="http://new.victoria.ac.nz/research/find-a-researcher?q=Microbiology">Microbiology</a></li>
<li class="show_all"><a class="button tertiary" href="http://new.victoria.ac.nz/research/find-a-researcher?q=bio">View all results</a></li></ul>
  </div>
                <div class='columns columns2'>
                <div class='col col1'>
                    <h2>Become a Researcher</h2>
                    <div>
                        <ul class='bullet_list divider_list'>
                            <li><a href=''>How to apply</a></li>
                            <li><a href=''>Funds and Scholarships</a></li>
                            <li><a href=''>Information for current graduate researchers</a></li>
                        </ul>
                    </div>
                </div><!-- /col -->
                <div class='col col2'>
                    <h2>Collaborate with us</h2>
                    <div>
                        <ul class='bullet_list divider_list'>
                            <li><a href=''>Business R&amp;D Programmes</a></li>
                            <li><a href=''>Partnership Opportunities</a></li>
                            <li><a href=''>Key contact information</a></li>
                            <li><a href=''>How we work with business</a></li>
                        </ul>
                    </div>
                </div><!-- /col -->
                </div><!-- /columns -->
            </div><!-- /content -->
        </section><!-- /main -->
    <?php includeFile('complementary-news.php'); ?>
    </div>
<?php
includeFile('footer.php');
