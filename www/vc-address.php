<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-about no_sidebar no_section_menu';
$GLOBALS['_html_title'] = '';

includeFile("header.php");

?>

    <div id='content'>
    <section role='main' class='primary'>
			<div class="entry">
				<h1 class="page_title">Address by Professor Grant Guilford</h1>

				<div class="intro">
					<p>Professor Grant Guilford is the new Vice-Chancellor of Victoria University.</p>
				</div>

				<div class="media">
					<iframe width="853" height="480" src="//www.youtube.com/embed/gC317KNcTV8?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
