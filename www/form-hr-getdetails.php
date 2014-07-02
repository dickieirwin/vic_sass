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
					<p>Enter your ID number to retrieve your details.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
					<fieldset>
						
						<div class="field_container">
							<label for="staff_number">Staff ID number</label>
							<div class="field error">
								<input type="text" name="staff_number" value="" maxlength="9" id="staff_number" class="small" autofocus="autofocus" pattern="(8000[0-9]{5})|[0-9]{0,6}">
								<p class="form_error">That doesn't look like an ID number. There should be no letters or spaces. Please check what you typed and try again.</p>
								<p class="form_help">Your ID number is printed above or below your name on your ID card, and looks like <code>123456</code> or <code>800012345</code>.</p>
							</div>
						</div>
					
					<div class="field_container form_actions">
						<div class="field">
							<a href="form-hr-reviewdetails.php" class="button secondary">Retrieve my details</a>
							<a href="#" class="button transparent">Cancel and go back</a>
						</div>
					</div>
				</form>           
			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
