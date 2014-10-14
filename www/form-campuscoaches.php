<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-students';
$GLOBALS['_html_title'] = 'Update your contact details | Victoria University of Wellington';

includeFile('header.php');

?>

<style>
	.field.static-value { padding-top: 4px; }
	.field ol { margin-left: -1.5em; }

	.field_container.wide > label, 
	.field_container.wide > .field {
	  float: none;
	  width: 100%;
	}
	
	@media (max-width: 759px) {
	  .field ol { margin-left: auto; }
	  .form_input_collection input + input {
	    margin-top: 0.75em;
	  }
	}
</style>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Staff</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Staff</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Our University</a></li>
                    <li class="parent"><a href=''>Services & Support</a>
                    	<ul>
                    		<li class="current"><a class="current" href="">Human ethics</a>
                    			<ul>
                    				<li><a href="">Guidelines</a></li>
                    				<li><a href="">About the committees</a></li>
                    			</ul>
                    		</li>
                    		<li><a href="">Animal ethics</a></li>
                    	</ul>
                    </li>
                    <li><a href=''>Staff Support &amp; Benefits</a></li>
                    <li><a href=''>On Campus</a></li>
                    <li><a href=''>News &amp; Events</a></li>
                    <li><a href=''>Student &amp; Course Management</a></li>
                </ul>
            </nav>
        </div>
        </aside>
    <div id='content'>
        <section role='main' class='primary'>
            <div class='entry'>
							<h1 class='page_title'>Update your contact details</h1>

							<div class='intro'>
								<p>Teaching or research that involves human participants or tissue or affects people’s privacy, rights or freedoms must be approved by the Human Ethics Committee.</p>
							</div>

							<form class="form_large highlight highlight_tertiary" action="">
								<fieldset>
									<div class="field_container">
										<label>Your name</label>
										<div class="field form_input_collection">
											<input type="text" name="preferred_name" placeholder="First name" required="required"class="small">
											<input type="text" name="surname" placeholder="Last name" required="required" class="medium">
											<!--[if lte IE9]><p class="form_help">First name then last name.</p><![endif]-->
										</div>
									</div>
									
									<div class="field_container">
									  <label>Email address</label>
									  <div class="field">
									    <input type="email" name="email" required="required" />
									    <p class="form_help">Make sure you use an address where we can reach you over summer.</p>
									  </div>
									</div>
                </fieldset>
                
                <fieldset style="padding-left: 2em;">
                  <div class="field_container wide">
                    <div class="field">
                    <label class="form_checkbox" for="yes_campuscoaches">
                      <input type="checkbox" id="yes_campuscoaches" name="yes_campuscoaches" />
                      Yes, I want to sign up for Campus Coaches.
                    </label>
                    <a href="">More about Campus Coaches…</a>
                    </div>
                  </div>
                  <div class="field_container wide">
                    <div class="field">
                      <label class="form_checkbox" for="yes_wgtnhall">
                        <input type="checkbox" id="yes_wgtnhall" name="yes_wgtnhall" />
                        Yes, I want to join WGTN Hall.
                      </label>
                      <a href="">More about WGTN Hall…</a>
                    </div>
                  </div>
                </fieldset>
                
								<fieldset>
								  <h2>About you</h2>
                  <p class="form_help">We use this information to help group you with people from similar backgrounds.</p>

									<div class="field_container">
										<label for="jobtitle">Degree</label>
										<div class="field">
                      <select name="degree">
                        <option disabled selected>Select your degree…</option>
                        <option value="BAS">Bachelor of Architectural Studies (BAS)</option>
                        <option value="BA">Bachelor of Arts (BA)</option>
                        <option value="BBmedSc">Bachelor of Biomedical Science (BBmedSc)</option>
                        <option value="BBSc">Bachelor of Building Science (BBSc)</option>
                        <option value="BCom">Bachelor of Commerce (BCom)</option>
                        <option value="BDI">Bachelor of Design Innovation (BDI)</option>
                        <option value="BEd(Tchng)EC">Bachelor of Education (Teaching) Early Childhood (BEd(Tchng)EC)</option>
                        <option value="BE(Hons)">Bachelor of Engineering with Honours (BE(Hons))</option>
                        <option value="LLB">Bachelor of Laws (LLB)</option>
                        <option value="BMus">Bachelor of Music (BMus)</option>
                        <option value="BSc">Bachelor of Science (BSc)</option>
                        <option value="BA/BTeach">Conjoint Bachelor of Teaching and Bachelor of Arts (BA/BTeach)</option>
                        <option value="BSc/BTeach">Conjoint Bachelor of Teaching and Bachelor of Science (BSc/BTeach)</option>
                        <option value="BTM">Bachelor of Tourism Management (BTM)</option>
                      </select>
                    </div>
									</div>
									
									<div class="field_container">
										<label>Major(s)</label>
										<div class="field">
										  <ol>
										  <li><input type="text" name="first_major" /></li>
										  <li><input type="text" name="second_major" /></li>
										  </ol>
										</div>
									</div>
									
									<div class="field_container">
									  <label>Home town</label>
									  <div class="field">
                      <select name="region">
                        <option selected disabled>Select a region…</option>
                        <option>Auckland</option>
                        <option>Bay of Plenty</option>
                        <option>Canterbury</option>
                        <option>Gisborne</option>
                        <option>Hawke's Bay</option>
                        <option>Manawatu-Whanganui</option>
                        <option>Marlborough</option>
                        <option>Nelson</option>
                        <option>Northland</option>
                        <option>Otago</option>
                        <option>Southland</option>
                        <option>Taranaki</option>
                        <option>Tasman</option>
                        <option>Waikato</option>
                        <option>Wellington</option>
                        <option>West Coast</option>
                      </select>
                    </div>
									</div>
									
									<div class="field_container">
									  <label>School</label>
									  <div class="field">
									    <input type="text" name="highschool" />
									    <p class="form_help">The name of the high school where you studied in year 13.</p>
									  </div>
									</div>

								</fieldset>

								<div class="field_container form_actions">
									<div class="field">
										<input type="submit" class="button primary" value="Sign me up!">
										<input type="reset" class="button transparent" value="Clear form">
									</div>
								</div>
							</form>
						
							
            </div>
        </section>
        <aside role="complementary" class="secondary">

        </aside>
    </div>


<?php
includeFile('footer.php');
