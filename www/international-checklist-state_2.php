<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-staff no_sidebar no_section_menu';
$GLOBALS['_html_title'] = 'Checklist yourself...';

includeFile("header.php");

?>

<style type="text/css">
	a {
		color: #0089FF;
	}



	.done_burger {
		border-left: 4px solid darkgreen;
	}	



	.icon_arrow_r::before {
		content: url('/assets/images/icons-dev/icon-arrow_r.png');
		float: left;
		margin-top: -0.8em;

	}


	.icon_check::before {
		content: url('/assets/images/icons-dev/icon-check.png');
		float: left;
		margin-top: -0.8em;
	}

	.icon_info::before {
		content: url('/assets/images/icons-dev/icon-info.png');
		float: left;
		margin-top: -0.8em;
	}

	.icon_circle::before {
		content: url('/assets/images/icons-dev/icon-circle.png');
		float: left;
		margin-top: -0.8em;
	}

	.icon_mail::before {
		content: url('/assets/images/icons-dev/icon-mail.png');
		float: left;
		margin-top: -0.8em;

	}

  .field_container .radio-buttons ul li, .field_container .checkboxes ul li {
	    list-style-type: none;
	    margin-right: 0.5em;

	  }

   .field_container .checkboxes ul li input[type='checkbox'] {
	    margin-right: 0.5em;
	}

				form.checklist .field_container .field button {
				margin-top: 20px !important;
			}


	@media (max-width: 759px) {
			form.checklist fieldset {
				margin-left: -10px;
				padding-left: 20px;

			}


	}


	@media (min-width: 980px){
			.field_container .field {
				width: 80%;
			}

			.checklist {
				width: 60%;
			}


	}

</style>

    <div id='content'>
    <section role='main' class='primary'>
			<div class="entry">
				<h1 class="page_title">Checklist</h1>

				<div class="intro">
					<p>Checklist pattern for International online</p>
				</div>
				

				<form class="checklist form highlight highlight_tertiary" action>
				
					
					<fieldset class="">
						
						<div class="field_container">
							<h2 class="icon_arrow_r">Tell us about yourself</h2>
					
							<div class="field">
								<p class="form_help">You are applying from </p> 
								<select class="medium" id="country" required>
									<option value="" disabled selected>Select your country</option>
				                    <option>China</option>
				                    <option>Kuwait</option>
				                    <option>Mongolia</option>
				                    <option>Moldova</option>
				                    <option>Thailand</option>
				                    <option>Yemen</option>
				                </select>
				                <p>and your email address is</p>
				                <input type="text" placeholder="example@example.com" required>
								
								
							</div>
							<div class="field">
								<button class="tertiary disabled">Save my details</button>
							</div>
						</div>
											
					</fieldset>
					<fieldset class="">
						
						<div class="field_container">
							<h2 class="icon_circle">Pick your programme</h2>
					
							<div class="field">
								<p class="form_help">You want to study a</p>

								<select class="medium" id="country" required>
									<option value="" disabled selected>Select your programme</option>
				                    <option>Master of Professional Accounting</option>
				                    <option>Master of Professional Bananas</option>
				                    <option>Master of the Universe</option>
				                    <option>Bachelor of Design</option>
				                    <option>Bachelor of Development</option>
				                    <option>Bachelor of Coffee and Cats</option>
				                </select>	

								
								<p class="form_error">We need to know which country you are from before we can tell you the entry requirements for a programme.</p>
								
								
							</div>
						</div>
											
					</fieldset>
					<fieldset>
						
						<div class="field_container">
							<h2 class="icon_arrow_r">Get your documents</h2>
							

							<div class="field checkboxes">
								<p class="form_help"><a href="#">Find out how to get documetns certified</a></p>
							<p class="form_help">A Certified copy of your:</p>
								<ul>
									<li><input type="checkbox" checked="checked"><label>Passport</label></li>
									<li><input type="checkbox" checked="checked"><label>Academic transcipts</label></li>
									<li><input type="checkbox"><label>IELTS or TOEFL certificate</label></li>
								</ul>	
							</div>
						</div>		
					</fieldset>
					<fieldset>
						<h2 class="icon_mail">Send your application</h2>
						    <div class="field_container">
						        

						        <div class="field">
						            <input type="submit" class="button" value="Print the application form" />
						     
						            <p class="form_error">You should not send in you form yet. You haven't got a the required documents!</p>
						        
						        
						             <label class="form_checkbox"><input type="checkbox">I sent my application on:</label>
						           
						            <input type="date" id="dob" class="form_text" placeholder="DD/MM/YYYY">
						      
						      		 <label class="form_checkbox"><input type="checkbox">I have a tracking number:</label>
						           
						                
						            <input type="text" placeholder="Tracking number">
						        </div>
						    </div>


					</fieldset>


				</form>

			</div>
		</section><!-- /main -->
    </div>
<?php
includeFile("footer-lite.php");
