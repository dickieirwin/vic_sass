<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_html_title'] = 'Homepage | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'homepage has_feature_search';

includeFile('header.php');

?>

  <style>@import url('dev/hero_prototype.css');</style>
  <style>@import url('dev/quicklinks_protype.css');</style>

	<style type="text/css">

		@media all {
			.homepage .entry .news_container .info_block p {
				display: block;
			}
		}


		.bigger_heading {
			text-transform: uppercase;
			font-weight: 600;
			font-size: smaller;
			margin-top: -5px;

		}

		.homepage .widget_wrapper {
			width: 24%;
			float: none;

		}

		.homepage .new_quicklinks {
			left: auto;
			top: auto;
			width: 23%;
			clear: right;
			background-color: #d1e0da;
			padding: 0;
		}
		.homepage .new_quicklinks ul {
			padding: 0;
			list-style:none;
			margin: 0;
		}


		.homepage .new_quicklinks h2 {
			padding-left: 5%;
			margin-bottom: 2%m;
			line-height: 1;
			font-size: 1.57143em;
			color:#115737;
		}

		.homepage .new_quicklinks li {
			border-top-width: 1px;
			border-top-style: solid;
			border-color: #b9d2d6;
			width: auto;
			color:#0b3e27;
			background-color: #d1e0da;
		}


		.homepage .new_quicklinks a{
		padding-top: 0.3em;
		padding-left: 5%;
		padding-bottom: 0.35em;
		padding-right: 5%;
		line-height: 1.3;
		font-size: 1.46154em;
		color: #115737;
		-webkit-font-smoothing: antialiased;
		display: block;
		font-family: "National","Segoe WP Semibold","Nimbus Sans L",Arial,"Helvetica Neue","Helvetica",sans-serif;
		font-weight: 500;
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



		.left_box {
			display: none;
		}

		.entry {
			padding-top: 1em;
		}

		.connect_wrapper {
			background: #ddd;
			border-top: 1px solid #ccc;	
		}

		.connect-feeds {
			padding: 0 !important;
		}
		
		#menu_toggle {
				display: block;
				background-color: transparent;
				color: #115737;
				box-shadow: none;
				font-family: "National","Segoe WP Semibold","Nimbus Sans L",Arial,"Helvetica Neue","Helvetica",sans-serif;
				padding-left: 5%;
			}

		@media (max-width: 989px) and (min-width: 760px) {

			.homepage .entry .news_container .info_block p {
				display: block;
			}

			.homepage .entry .news_container {
		        width: 100%;
		    }

			.homepage .new_quicklinks {
				width:100%;
				background-color: none;
				margin-bottom: 2%;
			}



			.homepage .entry .news_container .info_block {
				width: 25%;
			}

			.homepage .new_quicklinks ul {
				margin: 0;
			}

			.homepage .new_quicklinks li {
				width: auto;
					float:left;
					border-top: 0;
					margin-bottom: 0;
					white-space: nowrap;
					

			}

			.homepage .new_quicklinks h2{
				margin-bottom: 0;
				padding-bottom: 1%;
				padding-left: 3%;
			}

			.homepage .new_quicklinks h2 :after {
				content: 003e;
			}


			.homepage .nav_quicklinks a {
				background-color: #eee;
			}

			.homepage .entry .news_container .info_block .info_block_secondary img {
				max-height: 100%;
			}

			#menu_toggle {
				 position: inherit; 
				 left: auto; 
				 font-size:  1.6em; 
				 font-weight: bold; 
				box-shadow: none; 
				width: auto; 
				 height: auto; 
				 padding: 0 0 0 3%; 
				 text-align: left; 
				 -webkit-box-sizing: border-box; 
				 -moz-box-sizing: border-box;
				box-sizing: border-box; 
			}

			#menu_toggle:after {
				content: none;
			}

			



		}

		@media (max-width: 759px){

			.info_block .info_block_primary {
				clear: left;
			}

			.info_block .info_block_secondary {
				float: right;
			}

			.info_block {
				padding-left: 3%;
			}

			
			
			.big_search {
				display: none;
			}



		
			.homepage .new_quicklinks {
				width: 100%;
				position: relative;
				margin-bottom: 2%;
			}

			.homepage .nav_quicklinks a {
				background-color: #d1e0da;
				border-top: 1px solid #ccc;
			}
			.homepage .new_quicklinks li {
				width: auto;
				float:none;
				border-top: 0;
			}

			.right_block {
				margin-right: 0;
			}


			.homepage .new_quicklinks ul {
				margin: 0 0 3% 0;
				padding: 0;
				overflow: hidden;
			}



		}

		@media (max-width: 480px) and (min-width: 320px){

			.info_block .info_block_secondary {
				display: none;
			}

				.homepage .new_quicklinks {
					width: auto;
					position: relative;
				}

				.homepage .new_quicklinks ul {
					margin: 0 0 3% 0;
					padding: 0;
					overflow: hidden;
				}
				.homepage .new_quicklinks ul:active {
					height: auto;

				}



				.homepage .new_quicklinks li {
					margin: 0;
					padding: 0;
					float: none;
				}
				.homepage .new_quicklinks a {
					padding-top: 0;
				}



		}


	</style>

		<div class='hero-container hero-container--gallery-3 theme-study'>
            <a class='hero-image hero-image--primary' href='#'>
                <div class='hero-image__container' >
                  <img src='/images/kym_h.jpg' alt='research dummy'>
                </div>

                <div class='hero-image__text -large left_text'>
                    <h1>Know Your Mind.</h1>
                    <h2>Apply it now.</h2>
                </div>
            </a>
            <div>
              <a class='hero-image minor' href='#'>
                <div class='hero-image__container' >
                  <img src='images/robby.jpg' alt='research dummy'>
                </div>
                  <div class='hero-image__text -large'>
                     <h2>Forge your path</h2>
                     <p>“Victoria has opened my mind to what I can do.”</p>
                  </div>
              </a>
              <a class='hero-image minor sub alt_colour' href='#'>
                <div class='hero-image__container' >
                  <img src='images/theo.jpg' alt='research dummy'>
                </div>
                  <div class='hero-image__text -large'>
                         <h2>Being a student in Wellington</h2>
                            <p>“From that first moment—this beautiful sunny day—we walked through the city and I just fell in love with it.”</p>
                  </div>
              </a>
            </div>
        </div><!-- /hero -->



    <?php $homepage = true; include('inc/feature-search.php'); ?>

    <div id='content'>

		<div class='entry'>
			<section class='news_container'>


				<a class='info_block right_block'>
					<div class='info_block_secondary'>
						<img src='http://baconmockup.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>

						<h2>Top Literary Prize for Gemma</h2>
						<p>Science graduate and creative writing student Gemma Bowker-Wright has won the top prize in New Zealand’s most distinguished literary awards</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='http://fillmurray.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h2>Applications open for 2013 on the 18th of october</h2>
						<p>Google has donated 50 Android Nexus One phones to Victoria’s School of Engineering and Computer Science for student research.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='http://placebear.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h2>Engineering students go Android!</h2>
						<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='http://placesheen.com/209/135' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h2>Success for emerging researchers</h2>
						<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->	         
						
		            	<nav class="nav_quicklinks new_quicklinks">
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

    <?php $homepage = true; include('inc/footer_new.php'); ?>
