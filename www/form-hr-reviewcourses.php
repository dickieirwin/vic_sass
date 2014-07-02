<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-staff no_sidebar no_section_menu';
$GLOBALS['_html_title'] = 'Register for HR workshops';

includeFile("header-lite.php");

?>

    <div id='content'>
    <section role='main' class='primary'>
			<div class="entry">
				<h1 class="page_title">Register for HR workshops</h1>

				<div class="intro">
					<p>Here are the workshops you’re currently enrolled in.</p>
				</div>
				
				<form class="form_large highlight highlight_tertiary" action>
					<h2>My workshops</h3>
					<p>
						John Smith, School of Education Policy and Implementation
						<a href="form-hr-reviewdetails.php" class="button tertiary">Edit my details</a>
					</p>

					<fieldset>
						<div class="field_container">
							<p>You're not currently enrolled in any workshops.</p>
						</div>
						
						<div class="field_container">
							<h3>Courageous conversations: speaking up when it matters</h3>
							<p>9 am – 5 pm, 28 May 2014, Writing Limited, 342 Lambton Quay. Presented by Trish and Holona Lui.</p>
						</div>

						<div class="field_container">
							<h3>Communicating across cultures</h3>
							<p>9 am – 12.30 pm, 2 April 2014, AM101. Presented by Paul Pringle.</p>
						</div>
					</fieldset>
					
					<div class="field_container form_actions">
						<div class="field">
							<a href="form-hr-bookcourse.php" class="button primary">Add a workshop</a>
						</div>
					</div>
				</form>					



			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
