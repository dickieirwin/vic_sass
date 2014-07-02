<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'search_page no_section_menu';
$GLOBALS['_html_title'] = 'Colour pallette page';

includeFile("header.php");

?>

 <link href="/assets/css/page-specific/colours.css" rel="stylesheet" type="text/css" />   

    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->
        <div class='entry'>
            
			<h2>Default</h2>
			<div class="pallette default">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Research</h2>
			<div class="pallette theme-research">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Current Students</h2>
			<div class="pallette theme-students">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Services/Support</h2>
			<div class="pallette theme-services">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Study/Future Students</h2>
			<div class="pallette theme-study">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Staff</h2>
			<div class="pallette theme-staff">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Learning and Teaching</h2>
			<div class="pallette theme-teaching">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Library</h2>
			<div class="pallette theme-library">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
			<h2>Example</h2>
			<div class="pallette theme-example">	
				<ul class="swatches">
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
					<li><b></b></li>
				</ul>
			</div>
            
        </div><!-- /content -->
    </section><!-- /main -->
    <?php includeFile('new-complementary-search.php'); ?>
    </div>
<?php
includeFile("footer.php");
