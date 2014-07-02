<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students no_sidebar no_section_menu';
$GLOBALS['_html_title'] = '';

includeFile("header-lite.php");

?>

    <div id='content'>
    <section role='main' class='primary'>
			<div class="entry">
				<h1 class="page_title">Recreation membership form</h1>

				<div class="intro">
					<p>Sign up for group exercise classes or the Fitness Studio, or choose both and save money.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
					<fieldset>
						<h3>About you</h2>
						
						<div class="field_container">
							<label class="sq-form-question-title" for="q214609_q1">First name <em>(required)</em></label>
							<div class="field">
								<input type="text" name="q214609:q1" value="" size="30" maxlength="300" id="q214609_q1" class="sq-form-field">
							</div>
						</div>
						<div class="field_container">
							<label class="sq-form-question-title" for="q214609_q2">Last name <em>(required)</em></label>
							<div class="field">
								<input type="text" name="q214609:q2" value="" size="30" maxlength="300" id="q214609_q2" class="sq-form-field">
							</div>
						</div>
					
						<div class="field_container">
							<label for="membership_email">Email <em>(required)</em></label>
							<div class="field">
								<input type="email" name="membership_email">
							</div>
						</div>
					
						<div class="field_container">
							<label for="membership_id">ID number</label>
							<div class="field">
								<input type="number" name="membership_id" class="small">
								<p class="form_help">Your student ID or employee ID. Leave blank if you aren't a current student or staff member.</p>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<h3>Choose your membership</h2>	
				
						<div class="field_container">
								<label for="notifications">Membership category <em>(required)</em></label>
								<div class="field">
									<ul class="radio_list">
										<li><label class="form_radio"><input type="radio" required="required" name="membership_category"> Current Victoria student</label></li>
										<li><label class="form_radio"><input type="radio" required="required" name="membership_category"> Victoria staff member or alumnus</label></li>
										<li><label class="form_radio"><input type="radio" required="required" name="membership_category"> Member of the public</label></li>
									</ul>
								</div>
						</div>

						<div class="field_container">
							<label for="membership_type">Membership type <em>(required)</em></label>
							<div class="field">
								<ul class="radio_list">
									<li><label class="form_radio"><input type="radio" required="required" name="membership_type"> Fitness Studio</label></li>
									<li><label class="form_radio"><input type="radio" required="required" name="membership_type"> Group Exercise</label></li>
									<li><label class="form_radio"><input type="radio" required="required" name="membership_type"> Fitness Studio + Group Exercise combo</label></li>
								</ul>
							</div>
						</div>

						<div class="field_container">
							<label for="membership_length">Membership length <em>(required)</em></label>
							<div class="field">
								<ul class="radio_list">
										<li><label class="form_radio"><input type="radio" required="required" name="notifications"> 12 months</label> ($290)</li>
										<li><label class="form_radio"><input type="radio" required="required" name="notifications"> 6 months</label> ($180)</li>
										<li><label class="form_radio"><input type="radio" required="required" name="notifications"> 3 months</label> ($95)</li>
								</ul>
								<p class="form_help">Memberships run according to calendar months, not the University term.</p>
							</div>
						</div>
					</fieldset>
					
					<fieldset>
						<h3>Medical declaration</h3>
						
						<label for="medical">Have you ever been diagnosed with heart trouble, high blood pressure, high cholesterol, or a similar medical condition; or do you have any injuries or conditions which might affect your ability to take part in physical activity? <em>(required)</em></label>

						<div class="field_container">
							<ul class="radio_list small">
								<li><label class="form_radio"><input name="medical" type="radio" required="required">No</label></li>
								<li><label class="form_radio"><input name="medical" type="radio" required="required">Yes</label></li>
							</ul>
							<p class="form_help">Your answer to this question helps us determine if we need to give you a medical assessment.</p>
						</div>

						<label for="medical_detail">Please briefly describe your injury and/or condition.</label>
						<div class="field_container">
							<textarea id="medical_detail" name="medical_detail" rows="4"></textarea>
							<p class="form_help">You can still sign up and pay now. We'll contact you if we need more information.</p>
						</div>

					</fieldset>
											
					<fieldset>
						<div class="field_container">
							<label class="form_checkbox" for="terms_agree">
									<input type="checkbox" id="terms_agree" />I have read and accept the <a href="">terms and conditions</a>. <em>(required)</em>
							</label>
						</div>

						<div class="field_container">
							<button type="submit" class="button primary disabled" disabled>Continue to payment</button>
							<button class="button transparent">Cancel and go back</button>
						</div>
					</fieldset>
				</form>           
			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
