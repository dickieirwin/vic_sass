<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-staff no_sidebar no_section_menu';
$GLOBALS['_html_title'] = 'Register for HR workshops';

includeFile("header-lite.php");

?>

<style>
	.form_radio.disabled { 
		font-weight: normal;
		color: darkgrey;
	}
</style>

    <div id='content'>
    <section role='main' class='primary'>
			<div class="entry">
				<h1 class="page_title">Register for HR workshops</h1>

				<div class="intro">
					<p>Choose the workshop you’d like to enrol in.</p>
				</div>
				
				<form class="form_large highlight highlight_tertiary" action>
				
					<p>All fields are required.</p>
					<fieldset>
						<div class="field_container">
							<label>Select a course</label>
							<div class="field">
								<ul class="radio_list">
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="371"> Communicating effectively across cultures</label></li>
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="369"> Dealing with challenging workplace situations</label></li>
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="373"> Effective writing skills</label></li>
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="374"> Staying resilient under pressure</label></li>
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="370"> Understanding myself and my impact</label></li>
								</ul>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="field_container">
							<label>Waiting list</label>
							<div class="field">
								<p class="form_help">These courses are full, but you can add yourself to the waiting list in case a place becomes available.</p>
								<ul class="radio_list">
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="372"> Career management</label></li>
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="375"> Courageous conversations: speaking up when it matters</label></li>
									<li><label class="form_radio"><input type="radio" name="lstCourse" required="required" value="368"> Email writing</label></li>
								</ul>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<div class="field_container">
							<label for="txtLO">Learning objectives</label>
							<div class="field">
								<textarea id="txtLO" name="txtLO" rows="5"></textarea>
								<p class="form_help">1–3 sentences about what you hope to gain from this workshop.</p>
							</div>
						</div>
					</fieldset>
				
					<fieldset>
						<div class="field_container">
							<div class="field">
								<label class="form_checkbox"><input type="checkbox" required="required" name="chkManagerApproved" /> My manager has approved my enrolment in this workshop.</label>
							</div>
						</div>

						<div class="field_container">
							<div class="field">
								<label class="form_checkbox"><input type="checkbox" required="required" name="chkWithdraw" /> I understand that my cost centre will be charged a $75 administration fee if I withdraw within 48 hours of this workshop, or fail to attend.</label>
							</div>
						</div>
					</fieldset>
					
					<div class="field_container form_actions">
						<div class="field">
							<input type="submit" class="button primary" value="Enrol me" />
							<a href class="button transparent">Cancel and go back</a>
						</div>
					</div>
				</form>           
			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
