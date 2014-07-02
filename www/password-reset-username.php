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
					<p>If you can’t access your account, you can use this form to set a new password.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
					<fieldset>
						<div class="field_container">
							<label for="reset_username">Enter your username</label>
							<div class="field error">
								<input type="text" name="reset_username" required="required" autofocus="autofocus" maxlength="10" class="small" />
								<p class="form_error">That username doesn’t seem to be correct. Please try again.</p>
								<p class="form_help">Usernames look like this: <code>studenjoan</code></p>
							</div>
						</div>
						<div class="field_container form_actions">
							<div class="field">
								<a href="password-reset-send-otp.php" class="button secondary">Reset my password</a>
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
