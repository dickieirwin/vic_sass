<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_html_title'] = 'Homepage | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'homepage has_feature_search';

includeFile('header.php');

?>

  <style>@import url('dev/quicklinks_protype.css');</style>

	<style type="text/css">

		@media all {

			.connect_wrapper {
				background: #ddd;
				border-top: 1px solid #ccc;
				margin-top: 1em;
			}

			.connect-feeds {
				padding: 0 !important;
			}
		
		}

	</style>

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
					<a class='info_block left_block'>
						<div class='info_block_secondary'>
							<img src='http://baconmockup.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='info_block_primary'>
							<h2>Top Literary Prize for Gemma</h2>
							<p>Science graduate and creative writing student Gemma Bowker-Wright has won the top prize in New Zealand’s most distinguished literary awards</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->
					<a class='info_block left_mid'>
						<div class='info_block_secondary'>
							<img src='http://fillmurray.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='info_block_primary'>
							<h2>Applications open for 2013 on the 18th of october</h2>
							<p>Google has donated 50 Android Nexus One phones to Victoria’s School of Engineering and Computer Science for student research.</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->
					<a class='info_block right_mid'>
						<div class='info_block_secondary'>
							<img src='http://placebear.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='info_block_primary'>
							<h2>Engineering students go Android!</h2>
							<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->
					<a class='info_block '>
						<div class='info_block_secondary'>
							<img src='http://placesheen.com/209/135' alt='homepage holder'>
						</div><!-- /info_block_secondary -->
						<div class='info_block_primary'>
							<h2>Success for emerging researchers</h2>
							<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
						</div><!-- /info_block_primary -->
					</a><!-- /info_block -->	
				</div>         
						
		            	<nav class="new_quicklinks">
						  <h2 id="menu_toggle" class="toggle">Quicklinks</h2>
						  <ul id="q_links" class="toggle_block">
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
