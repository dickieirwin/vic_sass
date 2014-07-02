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
					<p>You don’t seem to have used the booking system before. Please enter your details below.</p>
				</div>
				
				<div class="intro">
					<p>Please review your details and check they are correct.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
				
					<p>All fields are required, except those marked optional.</p>
					
					<fieldset>
						
						<div class="field_container">
							<label for="staff_number">Staff ID number</label>
							<div class="field">
								<code>123456</code>
							</div>
						</div>
					
						<div class="field_container">
							<label>Your name</label>
							<div class="field form_input_collection">
								<input type="text" name="preferred_name" placeholder="First name" required="" class="small" />
								<input type="text" name="surname" placeholder="Last name" required="" class="small" />
								<!--[if lte IE9]><p class="form_help">First name then last name.</p><![endif]-->
							</div>
						</div>
						
						<div class="field_container">
							<label for="ext">Extension</label>
							<div class="field">
								<input type="text" pattern="[0-9]{4}" required="required" name="ext" class="small" placeholder="0000" />
							</div>
						</div>

						<div class="field_container">
							<label for="email">Email</label>
							<div class="field">
								<input type="email" name="email" required="required" />
							</div>
						</div>
						
						<div class="field_container">
							<label for="special">Special requirements <em>(optional)</em></label>
							<div class="field">
								<textarea id="special" name="special" rows="4"></textarea>
								<p class="form_help">If you have any special dietary requirements, need accessibility accommodations, or have any other special needs, please let us know.</p>
							</div>
						</div>
						
					</fieldset>
					
					<fieldset>
						<div class="field_container">
							<label for="cost_centre">Cost centre</label>
							<div class="field">
								<input type="text" name="cost_centre" pattern="[0-9]{4}" placeholder="0000" required="required" class="small" />
								<p class="form_help">Course fees are charged to your cost centre. If you don't know yours, check with your manager or administrator.</p>
							</div>
						</div>
						

						<div class="field_container">
							<label for="area">Area</label>
							<div class="field">
								<select name="area" required="required">
									<option selected="selected" disabled="disabled">Select your school, faculty or CSU…</option>
									<option disabled="disabled"></option>
									<optgroup label="Faculty of Architecture and Design">
										<option value="Architecture and Design Faculty Office">Architecture and Design Faculty Office</option>
										<option value="School of Architecture">Architecture, School of</option>
										<option value="School of Design">Design, School of</option>
									</optgroup>
									<optgroup label="Faculty of Education">
										<option value="Education Faculty Office">Education Faculty Office</option>
										<option value="School of Education Policy and Implementation">Education Policy and Implementation, School of</option>
										<option value="School of Educational Psychology and Pedagogy">Educational Psychology and Pedagogy, School of</option>
										<option value="Te Kura Māori">Te Kura Māori</a>
									</optgroup>
									<optgroup label="Faculty of Engineering">
										<option value="Science and Engineering Faculty Office">Science and Engineering Faculty Office</option>
										<option value="School of Engineering and Computer Science">Engineering and Computer Science, School of</option>
									</optgroup>
									<option value="Faculty of Graduate Research">Faculty of Graduate Research</option>
									<optgroup label="Faculty of Humanities and Social Sciences">
										<option value="Humanities and Social Sciences Faculty Office">Humanities and Social Sciences Faculty Office</option>
										<option value="School of Art History, Classics and Religious Studies">Art History, Classics and Religious Studies, School of 
										<option value="School of English, Film, Theatre and Media Studies">English, Film, Theatre, and Media Studies, School of</option>
										<option value="School of History, Philosophy, Political Science and International Relations">History, Philosophy, Political Science and International Relations, School of</option>
										<option value="International Institute of Modern Letters">International Institute of Modern Letters</option>
										<option value="Te Kawa a Māui">Te Kawa a Māui</option>
										<option value="School of Languages and Cultures">Languages and Cultures, School of</option>
										<option value="School of Linguistics and Applied Language Studies">Linguistics and Applied Language Studies, School of</option>
										<option value="New Zealand School of Music">Music, New Zealand School of</option>
										<option value="Graduate School of Nursing, Midwifery and Health">Nursing, Midwifery and Health, Graduate School of</option>
										<option value="School of Social and Cultural Studies">Social and Cultural Studies, School of</option>
										<option value="Va'aomanū Pasifika">Va'aomanū Pasifika</option>
									</optgroup>
									<option value="Faculty of Law">Faculty of Law</option>
									<optgroup label="Faculty of Science">
										<option value="Science and Engineering Faculty Office">Science and Engineering Faculty Office</option>
										<option value="School of Biological Sciences">Biological Sciences, School of</option>
										<option value="School of Chemical and Physical Sciences">Chemical and Physical Sciences, School of</option>
										<option value="School of Geography, Environment and Earth Sciences">Geography, Environment and Earth Sciences, School of</option>
										<option value="School of Mathematics, Statistics and Operations Research">Mathematics, Statistics and Operations Research, School of</option>
										<option value="School of Psychology">Psychology, School of</option>
									</optgroup>
									<optgroup label="Victoria Business School (Faculty of Commerce)">
										<option value="Commerce Faculty Office">Commerce Faculty Office</option>
										<option value="School of Accounting and Commercial Law">Accounting and Commercial Law, School of</option>
										<option value="School of Economics and Finance">Economics and Finance, School of</option>
										<option value="School of Government">Government, School of</option>
										<option value="School of Information Management">Information Management, School of</option>
										<option value="School of Management">Management, School of</option>
										<option value="School of Marketing and International Business">Marketing and International Business, School of</option>
									</optgroup>
									<optgroup label="Central Service Units">
										<option value="Academic Office">Academic Office</option>
										<option value="Campus Services">Campus Services</option>
										<option value="Office of the Chief Operating Officer">Chief Operating Officer, Office of</option>
										<option value="Communications and Marketing">Communications and Marketing</option>
										<option value="Development Office">Development Office</option>
										<option value="Finance">Finance</option>
										<option value="Human Resources">Human Resources</option>
										<option value="Information Technology Services">Information Technology Services</option>
										<option value="Library">The Library</option>
										<option value="Planning and Management Information Unit">Planning and Management Information Unit</option>
										<option value="Office of the Pro Vice-Chancellor (Māori)">Pro Vice-Chancellor (Māori), Office of</option>
										<option value="Research Office">Research Office</option>
										<option value="Student Academic Services">Student Academic Services</option>
										<option value="Office of the Vice-Chancellor">Vice-Chancellor, Office of</option>
										<option value="Victoria International">Victoria International</option>
									</optgroup>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>

						<div class="field_container">
							<label for="title">Job title</label>
							<div class="field">
								<input type="text" name="title" required="required" />
							</div>
						</div>
						
						<div class="field_container">
							<label for="manager">Manager's email</label>
							<div class="field">
								<input type="email" name="manager" required="required" />
							</div>
						</div>
					</fieldset>
					
					<div class="field_container form_actions">
						<div class="field">
							<input type="submit" class="button secondary" value="Save my details" />
							<input type="reset" class="button tertiary" value="Reset form" />
							<a href class="button transparent">Cancel and go back</a>
						</div>
					</div>
				</form>

			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
