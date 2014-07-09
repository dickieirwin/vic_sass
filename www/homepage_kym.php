<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_html_title'] = 'Homepage | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'homepage';

includeFile('header.php');

?>



	<style type="text/css">
		
		.bigger_heading {
			text-transform: uppercase;
			font-weight: 600;
			font-size: smaller;
			margin-top: -5px;

		}

		#hero.grid .info {
			background-color: rgba(127, 14, 14, 0.7);
			height: 45%;
			padding: 0.5em 0 0.5em 0.5em;


		}

		#hero.grid .info h2 {
			color: #fff;
			font-size: 2em;
		}
		 #hero.grid .info h4 {
			color: #fff;
		}
		.homepage .widget_wrapper {
			width: 24%;
			float: ;

		}

		.homepage .nav_quicklinks {
			left: auto;
			top: auto;
			width: 23%;
			clear: right;
		}
		.homepage .nav_quicklinks ul {
			padding: 0
		}

		.info_block {
			float: right;
		}

		.right_block {
			margin-right: -2%;
		}

		 #content .entry {
			padding-left: 0%;
			padding-right: 0%;
		}

		.homepage .nav_quicklinks li {
			width: auto;
		}

		.homepage .homepage_feature {
			width: 100%;
			float: none;
		}

		.hero-image__text {
			width: 50%;
		}
		
		.hero-image__text h2 {
			color: white;
			margin-bottom: 0;
		}
			.hero-image__text h1 {
			color: white;
			margin-bottom: 0;
		}

		.left_text{
			left: 0;
			bottom: 230px;
			width: 40%;
		}

		


	</style>

    <div class='homepage_feature'>

		<div class='hero-container hero-container--gallery-3'>
            <a class='hero-image hero-image--primary' href='research-article.php'>
                <div class='hero-image__container' >
                  <img src='images/leadership-head.jpg' alt='research dummy'>
                </div>

                <span class='hero-image__text -large left_text'>
                    <h1>Know Your Mind.</h1>
                    <h2>Apply it now.</h2>
                    <span class='image__text-big'></span>
                </span>
            </a>
            <div data-mobile-hidden>
              <a class='hero-image' href='research-article.php'>
                <div class='hero-image__container' >
                  <img src='images/info-eve.jpg' alt='research dummy'>
                </div>
                  <span class='hero-image__text -large'>
                    <h2>Accommodation questions?</h2>
                    <p>Disposable Search and Rescue Robots Could Save Lives</p>
                    <span class='image__text-big'></span>
                  </span>
              </a>
              <a class='hero-image' href='research-article.php'>
                <div class='hero-image__container' >
                  <img src='images/thinking_phd_study.jpg' alt='research dummy'>
                </div>
                  <span class='hero-image__text -large'>
                    <h2>Wellington rules!</h2>
                    <p>Searching for a Cure for Multiple Sclerosis</p>
                    <span class='image__text-big'></span>
                  </span>
              </a>
            </div>
        </div><!-- /hero -->

        <!-- <div id='hero' class='grid style4'>
            <a href='#'>
                <div class='imagery'>
					<img src="assets/images/maori_language_2.jpg" />
                </div>
                
				
            </a>
        </div> --><!-- /hero -->
    </div><!-- /homepage_feature -->



    


    <div id='content'>
	
		<div class='entry'>
		    <!-- <div class="welcome">
		        <h3>Know Your Mind. Apply it now. Mā Te Mōhio. Whakamātauhia!</h3>
		    </div> -->
			

			<section class='news_container'>

				   <nav class="nav_quicklinks">
					  <h2>Quicklinks</h2>
					  <ul>
					    <li><a href="http://www.victoria.ac.nz/about/explore-victoria/faculties-schools">Faculties and Schools</a></li>
					    <li><a href="http://www.victoria.ac.nz/maori-at-victoria/home">Māori at Victoria</a></li>
					    <li><a href="http://www.victoria.ac.nz/vicpasifika/home">Pasifika at Victoria</a></li>
					    <li><a href="http://www.victoria.ac.nz/international/">International students</a></li>
					    <li><a href="https://www.victoria.ac.nz/alumniandfriends/">Alumni</a></li>
					  </ul>
					</nav><!-- /nav_quicklinks -->

				<a class='info_block right_block'>
					<div class='info_block_secondary'>
						<img src='http://baconmockup.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>News</h5>
						<h2>Top Literary Prize for Gemma</h2>
						<p>Science graduate and creative writing student Gemma Bowker-Wright has won the top prize in New Zealand’s most distinguished literary awards</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='http://fillmurray.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>Important dates</h5>
						<h2>Applications open for 2013 on the 18th of october</h2>
						<p>Google has donated 50 Android Nexus One phones to Victoria’s School of Engineering and Computer Science for student research.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='http://placebear.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>News</h5>
						<h2>Engineering students go Android!</h2>
						<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='http://placesheen.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>Research</h5>
						<h2>Success for emerging researchers</h2>
						<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
			</section>
		</div> <!-- /entry -->
    </div><!-- /content_block -->

    <?php $homepage = true; include('inc/footer_new.php'); ?>
