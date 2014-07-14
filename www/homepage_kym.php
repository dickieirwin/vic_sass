<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_html_title'] = 'Homepage | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'homepage';

includeFile('header.php');

?>

<script type="text/javascript">
		$('#left_box').click(function() {
				$('#q_links').css("height", "auto");
		});



</script>

	<style type="text/css">

		.bigger_heading {
			text-transform: uppercase;
			font-weight: 600;
			font-size: smaller;
			margin-top: -5px;

		}

		#hero.grid .info {
			background-color: rgba(68, 159, 55, 0.7);
			height: 45%;
			padding: 0.5em 0 0.5em 0.5em;


		}

		.hero-image__text {
			background-color: rgba(68, 159, 55, 0.7);

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

		.homepage .new_quicklinks {
			left: auto;
			top: auto;
			width: 23%;
			clear: right;
			background-color:#0d4b2f;
			padding: 0.6em 0 0 0;
			/*position: absolute;*/
		}
		.homepage .new_quicklinks ul {
			padding: 0;
			list-style:none
		}


		.homepage .new_quicklinks h2 {
			padding-left: 5%;
			margin-bottom: 0.3em;
			line-height: 1;
			font-size: 1.57143em;
			color:#d1e0da
		}

		.homepage .new_quicklinks li {
			border-top-width: 1px;
			border-top-style: solid;
			width: auto;
			border-color:#0b3e27
		}


		.homepage .new_quicklinks a{
		padding-top: 0.3em;
		padding-left: 5%;
		padding-bottom: 0.35em;
		padding-right: 5%;
		line-height: 1.3;
		font-size: 1.46154em;
		color: #fff;
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



		.homepage .homepage_feature {
			width: 100%;
			float: none;
		}

		.hero-image__text {
			width: 50%;
			padding-top: 0.5em;
		}

		.hero-image__text h2 {
			color: white;
			margin-bottom: 0;
			line-height: 1;
		}
			.hero-image__text h1 {
			color: white;
			margin-bottom: 0;
		}

		.left_text{
			right: 0;
			bottom: 50%;
			width: 40%;
		}

		a.hero-image.sub {

		}

		.left_box {
			display: none;
		}

		@media (max-width: 989px) and (min-width: 760px) {

			.homepage .entry .news_container {
        width: 100%;
	    }

			.homepage .new_quicklinks {

				/*position: relative;*/
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

			}

			.homepage .new_quicklinks h2{
				margin-bottom: 0;
				padding-bottom: 1%;
				padding-left: 3%;
			}

			.homepage .nav_quicklinks a {
				background-color: #115737;
			}

			.homepage .entry .news_container .info_block .info_block_secondary img {
				max-height: 100%;
			}



		}

		@media (max-width: 759px){

			.hero-image.minor {
					width: 50%;
			}

			.minor span.hero-image__text {
				background: rgba(68, 159, 55, 0.7);
		    text-overflow: ellipsis;
		    display: block;
		    overflow: hidden;
				height: 50%;

			}




			a.hero-image.sub {
				border-top: 0;
			}

			.minor .hero-image__text  {
				padding: 1px 0;

			}

			.minor .hero-image__text h2{
				padding: 3%;
				display: block; /* Fallback for non-webkit */
				display: -webkit-box;
				-webkit-line-clamp: 2;
				-webkit-box-orient: vertical;
				overflow: hidden;
				text-overflow: ellipsis;
				font-size: 1.4em;
			}

			.hero-image__text p {
				padding: 3% 3% 0 3%;
			  display: block; /* Fallback for non-webkit */
			  display: -webkit-box;
			  margin: 0 auto;
			  line-height: 1.4;
			  -webkit-line-clamp: 1;
			  -webkit-box-orient: vertical;
			  overflow: hidden;
			  text-overflow: ellipsis;
			}
			.homepage .new_quicklinks {
				width: 100%;
				position: relative;
				margin-bottom: 2%;
			}

			.homepage .nav_quicklinks a {
				background-color: #0d4b2f;
			}
			.homepage .new_quicklinks li {
				width: auto;
					float:none;
					border-top: 0;


			}

			.right_block {
				margin-right: 0;
			}

			#q_links{
				height:0;
			}

			#left_box {
			display: inline-block;
			float: right;
			padding-right: 3%;
		}




			.homepage .new_quicklinks ul {
				margin: 0 0 3% 0;
				padding: 0;
				overflow: hidden;
			}



		}

		@media (max-width: 480px) and (min-width: 320px){


			.minor span.hero-image__text {
				width: 100%;
				height: 100%;
			}

			.minor .hero-image__container {
				display: none;
			}



				.hero-image__text p {
					-webkit-line-clamp: 1;

				}
				.hero-image__text h2{

				}
				.minor span.hero-image__text {
					min-height: 75%;
					top: 0;

				}

				.minor.alt_colour span.hero-image__text {
					background: rgba(84, 147, 73, 1);
				}
				.left_text{
					width: 44%;
					top: 0;
					bottom: auto;
					padding: 3%;
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



				 #left_box {
					display: inline-block;
					float: right;
					padding-right: 3%;
				}

				#q_links{
					height:0;
				}

				.homepage .nav_quicklinks a {
					background-color: #0d4b2f;

				}
		}


	</style>



    <div class='homepage_feature'>

		<div class='hero-container hero-container--gallery-3'>
            <a class='hero-image hero-image--primary' href='#'>
                <div class='hero-image__container' >
                  <img src='/images/kym_h.jpg' alt='research dummy'>
                </div>

                <span class='hero-image__text -large left_text'>
                    <h1>Know Your Mind.</h1>
                    <h2>Apply it now.</h2>
                    <span class='image__text-big'></span>
                </span>
            </a>
            <div>
              <a class='hero-image minor' href='research-article.php'>
                <div class='hero-image__container' >
                  <img src='images/kym_bike.jpg' alt='research dummy'>
                </div>
                  <span class='hero-image__text -large'>
                    <h2>Accommodation questions?</h2>
                    <p>Disposable Search and Rescue Robots Could Save Lives</p>
                    <span class='image__text-big'></span>
                  </span>
              </a>
              <a class='hero-image minor sub alt_colour' href='research-article.php'>
                <div class='hero-image__container' >
                  <img src='images/thinking_phd_study.jpg' alt='research dummy'>
                </div>
                  <span class='hero-image__text -large'>
                    <h2>What to study?</h2>
                    <p>World class science stuff</p>
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

				   <nav class="nav_quicklinks new_quicklinks">
					  <h2>Quicklinks<span id="left_box">[+]</span></h2>
					  <ul id="q_links">
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
			</section>
		</div> <!-- /entry -->
    </div><!-- /content_block -->

    <?php $homepage = true; include('inc/footer_new.php'); ?>
