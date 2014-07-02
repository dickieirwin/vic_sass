<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students no_sidebar no_section_menu';
$GLOBALS['_html_title'] = '';

includeFile("header-lite.php");

?>

    <div id='content'>
    <section role='main' class='primary'>
			<div class="entry">
				<h1 class="page_title">Reset your password</h1>

				<div class="intro">
					<p>We sent a security code to your backup email address. Please enter it to verify your identity.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
					<fieldset>
						<div class="field_container">
							<label for="reset_otp">Enter your security code</label>
							<div class="field error">
								<input type="password" name="reset_password" required="required" class="small" autofocus="autofocus" />
								<p class="form_error">That security code wasn’t recognised. Please try again, or <a href="">request a new security code</a>.</p>
							</div>
						</div>
						<div class="field_container form_actions">
							<div class="field">
								<a href="password-reset-newpassword.php" class="button secondary">Choose a new password</a>
								<a class="button transparent">Cancel and go back</a>
							</div>
						</div>
					</fieldset>
				
				</form>           
			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
