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
					<p>Now, choose a new password.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
					<fieldset>
						<div class="field_container">
							<label for="reset_password">Enter a new password</label>
							<div class="field error">
								<input type="password" name="reset_password" autofocus="autofocus" required="required" />
								<p class="form_error">Your password isn’t strong enough! Please check the requirements and try again.</p>
								<p>Your password <em style="color: #888;">fnord</em> must be at least 8 characters long, not be the same as your username, and contain <em style="color: #888;">fnord</em> at least one uppercase letter, at least one <em style="color: #888;">fnord</em> number, and the Black Sigil <em>odegra</em>. </p>
							</div>
						</div>
						<div class="field_container">
							<label for="confirm_password">Re-enter your new password to confirm</label>
							<div class="field error">
								<input type="password" name="confirm_password" required="required" />
								<p class="form_error">Those passwords don't match! Please try again.</p>
							</div>
						</div>
						<div class="field_container form_actions">
							<div class="field">
								<a class="button primary" disabled>Set my new password</a>
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
