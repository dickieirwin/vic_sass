<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_html_title'] = 'Homepage | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'homepage has_feature_search';

includeFile('header.php');

?>

  <style>@import url('dev/quicklinks_protype.css');</style>

		<div id="hero" class="hero-container hero-container--gallery-1">
		  <a href="./?a=193470">
		  <div class="imagery">
		    <img src="/images/sarah_banner.jpg"/>
		  </div>
		  <div class="hero-image__text middle bigger">
		    <h1 class="kym">Know your mind</h1>
		    <h2>Apply now to study at Victoria in 2015.</h2>
		  </div>
		  </a>
		</div>

    <?php $homepage = true; include('inc/feature-search.php'); ?>


    <div id='content'>
				<div class='entry'>
			<section class='news_container'>
				<div class="news_wrapper">
					<a class='info_block'>
						<div class='info_block_secondary'>
							<img src='http://baconmockup.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='news_block'>
							<h3>Top Literary Prize for Gemma</h3>
							<p>Science graduate and creative writing student Gemma Bowker-Wright has won the top prize in New Zealand’s most distinguished literary awards</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->
					<a class='info_block'>
						<div class='info_block_secondary'>
							<img src='http://fillmurray.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='news_block'>
							<h3>Applications open for 2013 on the 18th of october</h3>
							<p>Google has donated 50 Android Nexus One phones to Victoria’s School of Engineering and Computer Science for student research.</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->
					<a class='info_block'>
						<div class='info_block_secondary'>
							<img src='http://placebear.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='news_block'>
							<h3>Engineering students go Android!</h3>
							<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->
					<a class='info_block '>
						<div class='info_block_secondary'>
							<img src='http://placesheen.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='news_block'>
							<h3>Success for emerging researchers</h3>
							<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->	
				</div>         
						
		            	<nav class="new_quicklinks">
						  <h2 id="menu_toggle" class="toggle">Quicklinks</h2>
						  <ul id="q_links" class="toggle_block">
						  	<li><a href="#">Course finder</a></li>
						    <li><a href="http://www.victoria.ac.nz/about/explore-victoria/faculties-schools">Faculties and Schools</a></li>
						    <li><a href="http://www.victoria.ac.nz/maori-at-victoria/home">Māori at Victoria</a></li>
						    <li><a href="http://www.victoria.ac.nz/vicpasifika/home">Pasifika at Victoria</a></li>
						    <li><a href="http://www.victoria.ac.nz/international/">International students</a></li>
						    <li><a href="https://www.victoria.ac.nz/alumniandfriends/">Alumni</a></li>
						  </ul>
						</nav><!-- /nav_quicklinks -->				   
			</section>
		</div> <!-- /entry -->
    </div><!-- /content_block -->

    <?php $homepage = true; include('inc/footer_new_social.php'); ?>
