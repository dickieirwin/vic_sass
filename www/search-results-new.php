<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'search_page has_big_search no_section_menu';
$GLOBALS['_html_title'] = 'Search results page';

includeFile("header.php");

?>

    <!--<div class="big_search_fields">
        <form id="big_search_form" class="">
            <input class="" id="" autocomplete="off" type="text" value="derctor">
            <input type="submit" value="Go">
        </form>
        
    </div>-->

    <?php includeFile('search.php'); ?>
				<!-- <div class="mobile_only refine_search_link">
						<a class="button tertiary" href="#search_filters">Narrow your search</a>
				</div> -->

        <div class="mobile_only highlight_tertiary">
					<p><a href class="button secondary">Log in</a> to include secure documents.</p>
        </div>

        <div class="mobile_only highlight_tertiary">
					<p>Logged in as <strong>Jane Bloggs</strong>. <a href class="button secondary">Log out</a></p>
        </div>


    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->
        
        <div class='entry'>

            <p>Showing results 1 - 10 of 4170 results</p>
        
			<!--<p class="didyoumean">Did you mean: <a href="#didyoumean">doctor</a></p> -->
			
			<ul class="search_results">
			
				
				<?php //include 'dev/components/search-result-promo.php' ?>
				<?php $file_type = "pdf"; include 'dev/components/search-result.php' ?>
				<?php $photo = "http://www.victoria.ac.nz/images/staffpics/anne-goulding.jpg";include 'dev/components/search-result-person.php' ?>
				<?php $photo = "http://www.victoria.ac.nz/images/staffpics/megan-pledger.jpg";include 'dev/components/search-result-person.php' ?>
				<?php $file_type = "ppt"; include 'dev/components/search-result.php' ?>
				<?php $areas = true; $photo = "http://www.victoria.ac.nz/images/staffpics/ocean-mercier.jpg"; include 'dev/components/search-result-person.php' ?>
				<?php $file_type = "xls";include 'dev/components/search-result.php' ?>
				<?php include 'dev/components/search-result.php' ?>
				
            </ul>
			
			<ul role="navigation" class='pagination'>
				<li class="prev"><a href="#"><span>Previous</span></a></li>
				
                <li><a href="#"><span>2</span></a></li>
                <!--  -->
                <li class="current"><span>3</span></li>
                <li><a href="#"><span>4</span></a></li>
                
				<li class="next"><a href="#"><span>Next</span></a></li>
            </ul>
			<p></p>
			<p></p>
			<ul role="navigation" class='pagination'>
				<!--<li class="prev"><a href="#"><span>Previous</span></a></li>-->
                <li class="current"><span>1</span></li>
                <li><a href="#"><span>2</span></a></li> 
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#"><span>4</span></a></li>
                <!-- <li><a href="#"><span>5</span></a></li> -->
				<li class="next"><a href="#"><span>Next</span></a></li>
            </ul>
			<p></p>
			<p></p>
			<ul role="navigation" class='pagination'>
				<li class="prev"><a href="#"><span>Previous</span></a></li>
                <li><a href="#"><span>1</span></a></li>
                <li><a href="#"><span>2</span></a></li> 
                <li><a href="#"><span>3</span></a></li>
				<li class="current"><span>4</span></li>
                <!-- <li><a href="#"><span>5</span></a></li> 
				<li class="next"><a href="#"><span>Next</span></a></li>-->
            </ul>
            
        </div><!-- /content -->
    </section><!-- /main -->
    <?php includeFile('new-complementary-search.php'); ?>
    </div>
<?php
includeFile("footer.php");
