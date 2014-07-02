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
					<p>We need to send a security code to your backup email address to prove your identity.</p>
				</div>

				<form class="form_large highlight highlight_tertiary" action>
					<fieldset>
						<div class="field_container">
							<strong>Is this your email address?</strong>
							<div class="field error">
								<code>johnsmith1988@gmail.com</code>
								<p class="form_help">If this isn't your email address, you need to call the ITS Service Desk on <a href="tel:+6444635050">04 463 5050</a> to reset your password.</p>
							</div>
						</div>
						<div class="field_container form_actions">
							<div class="field">
								<a href="password-reset-otp.php" class="button secondary">Send my security code</a>
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
