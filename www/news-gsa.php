<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-staff';
$GLOBALS['_html_title'] = 'News | Victoria University of Wellington';

includeFile("header.php");
?>

<style>

	

	

	
	ul.pagination { margin-top: 1em; }


</style>

    <aside id="section_menu">
	    <div id="menu_toggle" class="toggle">
	        <span>News</span>
	    </div>

	    <div class="toggle_block">

	        <nav>
	            <h2 class="menu_title"><a href="http://www.victoria.ac.nz/news">News</a>
	            </h2>
	            <ul class="section_tree">

	                <li class=""><a class="" href="http://www.victoria.ac.nz/news/victorious">Victorious</a>

	                </li>
	            </ul>
	        </nav>

	        <div class="additional_complementary">
	            <h2>Contact the Communications Team</h2>

	            <p>Email: <a href="mailto:communications@lists.vuw.ac.nz">communications@lists.vuw.ac.nz</a>
	                <br>
	            </p>
	        </div>
	    </div>
	    <!-- /toggle_block -->
	</aside>
	<!-- /navigation -->


    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Somewhere</a></li>
            <li><a href=''>News lists</a></li>
        </ul>

        <div class='entry'>
					<h1 class='page_title'>News</h1>
					<div class='intro'>
							<p>Keep up to date with the latest news from Victoria University.</p>
					</div>
					
					<form action="http://www.victoria.ac.nz/news" method="get" class="highlight_tertiary form_large bleed">
						<div class="field_container">
							<label for="dummy-from-date">Show news from</label>
							<div class="field form_input_collection">
										<input id="date-picker-from" type="date" placeholder="DD/MM/YYYY" class="form_text small"> 
										<label for="dummy-to-date">to</label> 
										<input id="date-picker-to" type="date" placeholder="DD/MM/YYYY" class="form_text small">
										<input type="submit" class="button secondary" value="Go" />
							</div>
						</div>
					</form>

					<div class="news_block" itemscope="" itemtype="http://schema.org/NewsArticle">
						<a href="http://www.victoria.ac.nz/research/expertise/arts-humanities-social-sciences/reo-maori-usage" itemprop="url">
								<img class="news_img" alt="Ivana Giacon in a rowing skiff" src="http://www.victoria.ac.nz/__data/assets/image/0006/238137/varieties/ls_small.jpg ">
								<h4 itemprop="name">New professors at Victoria</h4>
								<h3 itemprop="datePublished">18 February 2014</h3>

							<p itemprop="description">Fourteen Victoria University academics gathered to celebrate their promotion or appointment to professor, placing them amongst the top academics at Victoria.</p>
						</a>
					</div>
					
					<div class="news_block" itemscope="" itemtype="http://schema.org/NewsArticle">
						<a href="http://www.victoria.ac.nz/news/2014/new-knowledge-about-treating-multiple-sclerosis" itemprop="url">
								<h4 itemprop="name">2013 Staff Excellence Award winners</h4>
								<div class="restriction_flag">Staff only</div>
								<h3 itemprop="datePublished">3 February 2014</h3>
								
							<p itemprop="description">Congratulations to the staff who were given their Staff Excellence Awards at last week’s ceremony.</p>
						</a>
					</div>
					
					<div class="news_block" itemscope="" itemtype="http://schema.org/NewsArticle">
						<a href="http://www.victoria.ac.nz/news/2014/new-knowledge-about-treating-multiple-sclerosis" itemprop="url">
								<h4 itemprop="name">New accommodation complex for Victoria students</h4>
								<h3 itemprop="datePublished">3 February 2014</h3>


							<p itemprop="description">Victoria University of Wellington has entered into an agreement for a new hall of residence on The Terrace. </p>
						</a>
					</div>

					<ul class="pagination" role="navigation">
						<li class="current"><span>1</span></li>
						<li><a href="?q=technical&amp;site=global_search_collection&amp;start=10"><span>2</span></a></li>
						<li><a href="?q=technical&amp;site=global_search_collection&amp;start=20"><span>3</span></a></li>
						<li><a href="?q=technical&amp;site=global_search_collection&amp;start=30"><span>4</span></a></li>
						<li class="next"><a href="?q=technical&amp;site=global_search_collection&amp;start=10"><span>Next</span></a></li>
					</ul>					
        </div><!-- /content -->
    </section><!-- /main -->

		<aside role="complementary" class="secondary">
					<div class="widget widget_narrow">
						<header>
							<h2>News around campus</h2>
						</header>
						<div class="news_block" itemscope="" itemtype="http://schema.org/NewsArticle">
							<a href="http://www.victoria.ac.nz/research/expertise/arts-humanities-social-sciences/reo-maori-usage" itemprop="url">
								<header>
									<h3 itemprop="datePublished">18 February 2014</h3>
									<h4 itemprop="name">New professors at Victoria</h4>
								</header>
								<p itemprop="description">Fourteen Victoria University academics gathered to celebrate their promotion or appointment to professor, placing them amongst the top academics at Victoria.</p>
							</a>
						</div>
						<div class="news_block restricted" itemscope="" itemtype="http://schema.org/NewsArticle">
							<a href="http://www.victoria.ac.nz/news/2014/new-knowledge-about-treating-multiple-sclerosis" itemprop="url">
								<header>
									<h3 itemprop="datePublished">3 February 2014</h3>
									<h4 itemprop="name">2013 Staff Excellence Award winners</h4>
									<div class="restriction_flag">Staff only</div>
								</header>
								<p itemprop="description">Congratulations to the staff who were given their Staff Excellence Awards at last week’s ceremony.</p>
							</a>
						</div>
						<div class="news_block" itemscope="" itemtype="http://schema.org/NewsArticle">
							<a href="http://www.victoria.ac.nz/news/2014/new-knowledge-about-treating-multiple-sclerosis" itemprop="url">
								<header>
									<h3 itemprop="datePublished">3 February 2014</h3>
									<h4 itemprop="name">New accommodation complex for Victoria students</h4>
								</header>
								<p itemprop="description">Victoria University of Wellington has entered into an agreement for a new hall of residence on The Terrace. </p>
							</a>
						</div>

						<div>
							<a href="" class="button tertiary more-items">More news</a>
						</div>
					</div>            		</aside>
    </div><!-- /#content -->



<?php
includeFile("footer.php");
