<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-default no_sidebar no_section_menu';
$GLOBALS['_html_title'] = 'Wifi-Login';

includeFile("header-wifi.php");

?>

	<style type="text/css">

		a.button.large:focus  {
			   -moz-box-shadow:     0 0 3px 1px #7a7a7a;
			   -webkit-box-shadow:  0 0 3px 1px #7a7a7a;
			   box-shadow:          0 0 3px 1px #7a7a7a;
		}
		
		a.button.wifi {
			width: 75%;
			text-align: center;
		}

		.wifi_header_bar {
			width: auto;
			height: 6em;
			background-color: #1d2624;
			border-bottom: 5px solid #115737;
			padding: 3%;
			margin-top: 15%;
			background: url(/assets/images/logo_desktop.png) no-repeat #1d2624 20px 50%;
			background-size: 192px 48px;

		} 
		
		.button.primary {
			width: 33%;
			background-color: #3468b0;
			color: #ffffff;
			text-align: center;
			cursor: pointer;
			-webkit-appearance: none;
			-moz-appearance: none;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			-ms-border-radius: 2px;
			-o-border-radius: 2px;
			border-radius: 2px;
			font-weight: bold;
			text-decoration: none !important;
			white-space: nowrap;
			border: 0 none;
			padding: 0.35714em 0.64286em;
			height: 1.35714em;
			line-height: 1.3em;
			margin-right: 0.28571em;
			margin-top: .5em;
			display: inline-block;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			-webkit-transition: background-color 100ms ease-in-out;
			-moz-transition: background-color 100ms ease-in-out;
			-o-transition: background-color 100ms ease-in-out;
			transition: background-color 100ms ease-in-out;
		}

		.login_form {
			margin-top: 0;
			padding-top: 2em;
		}

		@media all and (max-width: 759px) {
			
			.field.wifi {
				width: 100%;
			}

			.field.wifi a {
				display: block;
				width: auto;
				box-sizing: border-box;
				height: 33px;
				margin-right: 0;
				margin-top: 0;
			}
			.wifi_header_bar {
				height: 50px;
				margin-top: 0;
				background-color: #1d2624;				
				background: url(/assets/images/vic-logo-mobile.png) no-repeat #1d2624 10px 60%;
				background-size: 128px 17px;
			}

		}

	</style>

    <div id='content'>
    <section role='main' class='primary'>
				<div class="wifi_header_bar">
				</div>

			<div class="entry highlight highlight_tertiary  login_form">
			
				<div class="intro">
					<p>Welcome to Victoria. Login with your student or staff account to access our wifi.</p>
				</div>
				
				<p>If you don't have a student or staff account, connect to the <code>Victoria_Guest</code> network for guest access.</p>
					
				<form class="form_large highlight highlight_tertiary bleed" action>
					<fieldset>
						<div class="field_container">
							<label for="user_name">User name</label>
							<div class="field error">
								<input type="text" name="user_name" autofocus="autofocus" required="required" tabindex="1" />
								<p class="form_error">That username doesn’t seem to be correct. Please try again.</p>
							</div>
						</div>
						<div class="field_container">
							<label for="password">Enter your password</label>
							<div class="field error">
								<input type="password" name="password" required="required" tabindex="2" />
								<p class="form_error">That password doesn’t seem to be correct. Please try again.</p>
							</div>
						</div>
						<div class="field_container form_actions">
							<div class="field wifi">
								<a href="#" class="button primary large">Login</a>
							</div>
						</div>
					</fieldset>
				
				</form>           
			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-wifi.php");
