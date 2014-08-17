<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-staff';
$GLOBALS['_html_title'] = 'Update your contact details | Victoria University of Wellington';

includeFile('header.php');

?>

<style>
	.field.static-value { padding-top: 4px; }
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
								<p class="form_help">To request changes to details you can't edit, contact Info-Desk@vuw.ac.nz.</p>
								
								<fieldset>
									<div class="field_container">
										<label for="staff_number">Username</label>
										<div class="field static-value">
											<code>bollanke</code>
										</div>
									</div>
					
									<div class="field_container">
										<label for="staff_number">Email address</label>
										<div class="field static-value">
											<code>keith.bolland@vuw.ac.nz</code>
										</div>
									</div>

									<div class="field_container">
										<label for="ext">Extension</label>
										<div class="field">
											<input type="text" pattern="[0-9]{4}" required="required" name="ext" class="small" placeholder="0000" value="9670" />
										</div>
									</div>
									
									<div class="field_container">
										<div class="field">
											<label for="ExtensionShared" class="form_checkbox"><input type="checkbox" name="ExtensionShared" id="ExtensionShared" />This is a shared extension</label>
										</div>
									</div>

									<div class="field_container">
										<label>Your name</label>
										<div class="field form_input_collection">
											<select id="title" class="small">
												<option value="" disabled="disabled">Title…</option>
												<option value="">(no title)</option>
												<option value="Dr">Dr</option>
												<option value="AProf">Associate Professor</option>
												<option value="Prof">Professor</option>
												<option value="Emeritus Prof">Emeritus Professor</option>
												<option value="Lord">Lord</option>
											</select>
										</div>
									</div>
									
									<div class="field_container">
										<div class="field">
											<input type="text" name="preferred_name" placeholder="First name" required="required" value="Keith" class="small">
											<input type="text" name="surname" placeholder="Last name" required="required" value="Bolland" class="medium">
											<!--[if lte IE9]><p class="form_help">First name then last name.</p><![endif]-->
										</div>
									</div>
						
									<div class="field_container">
										<label>Room</label>
										<div class="field form_input_collection">
											<select class="medium">
												<option value="AM">Alan Macdiarmid</option>
												<option value="HU" selected="selected">Hunter</option>
											</select>
											<input type="text" pattern="[0-9]+" required="required" class="small" placeholder="123" value="324" />
										</div>
									</div>
								</fieldset>
								
								<fieldset>
									<div class="field_container">
										<label for="jobtitle">Job title</label>
										<div class="field">
											<input type="text" required="required" value="Senior Web Adviser" />
										</div>
									</div>
									
									<div class="field_container">
										<label>School or Unit</label>
										<div class="field static-value">
											Communications and Marketing, Central Services
										</div>
									</div>
								</fieldset>

								<fieldset>
									<h3>Research expertise</h3>

									<div class="field_container">
										<label class="form_checkbox"><input type="checkbox" selected="selected">Show my research interests in the staff directory and directory of research expertise.</label>
									</div>
									
									<div class="field_container">
										<label>Research area</label>
										<div class="field">
											<select id="rg-subject-area" name="q178490:q21">
												<option value="" selected="selected" disabled="disabled">Select a research area…</option>
												<option value="" disabled="disabled"></option>
												<option value="Accountancy">Accountancy</option>
												<option value="Anthropology">Anthropology</option>
												<option value="Applied Finance">Applied Finance</option>
												<option value="Applied Linguistics">Applied Linguistics</option>
												<option value="Architecture">Architecture</option>
												<option value="Art History">Art History</option>
												<option value="Asian Languages">Asian Languages</option>
												<option value="Biology">Biology</option>
												<option value="Biomedical Science">Biomedical Science</option>
												<option value="Biotechnology">Biotechnology</option>
												<option value="Building Management">Building Management</option>
												<option value="Building Science">Building Science</option>
												<option value="Business Administration">Business Administration</option>
												<option value="Cell and Molecular Bioscience">Cell and Molecular Bioscience</option>
												<option value="Chemistry">Chemistry</option>
												<option value="Chinese">Chinese</option>
												<option value="Classical Studies">Classical Studies</option>
												<option value="Classical Studies, Greek and Latin">Classical Studies, Greek and Latin</option>
												<option value="Commercial Law">Commercial Law</option>
												<option value="Communications Studies">Communications Studies</option>
												<option value="Comparative Literature">Comparative Literature</option>
												<option value="Computer Science">Computer Science</option>
												<option value="Conservation">Conservation</option>
												<option value="Conservation Biology">Conservation Biology</option>
												<option value="Conservation Science">Conservation Science</option>
												<option value="Cook Islands Maori">Cook Islands Maori</option>
												<option value="Creative Writing">Creative Writing</option>
												<option value="Criminology">Criminology</option>
												<option value="Cultures and Languages">Cultures and Languages</option>
												<option value="Deaf Studies">Deaf Studies</option>
												<option value="Design">Design</option>
												<option value="Development Studies">Development Studies</option>
												<option value="Digital Media Design">Digital Media Design</option>
												<option value="Early Childhood Teacher Education">Early Childhood Teacher Education</option>
												<option value="Earth Sciences ">Earth Sciences </option>
												<option value="Ecological Restoration">Ecological Restoration</option>
												<option value="Ecology and Biodiversity">Ecology and Biodiversity</option>
												<option value="Ecology and Health">Ecology and Health</option>
												<option value="E-Commerce">E-Commerce</option>
												<option value="Economics">Economics</option>
												<option value="Education">Education</option>
												<option value="Electronic and Computer System Engineering">Electronic and Computer System Engineering</option>
												<option value="Engineering">Engineering</option>
												<option value="English as a Second Language">English as a Second Language</option>
												<option value="English Literature">English Literature</option>
												<option value="Environmental Studies">Environmental Studies</option>
												<option value="Executive Development">Executive Development</option>
												<option value="Film">Film</option>
												<option value="Financial Mathematics">Financial Mathematics</option>
												<option value="French">French</option>
												<option value="Gender and Women's Studies">Gender and Women's Studies</option>
												<option value="Geography">Geography</option>
												<option value="Geology">Geology</option>
												<option value="Geophysics">Geophysics</option>
												<option value="German">German</option>
												<option value="Health">Health</option>
												<option value="History">History</option>
												<option value="Human Resource Management and Industrial Relations">Human Resource Management and Industrial Relations</option>
												<option value="Industrial Design">Industrial Design</option>
												<option value="Information Management">Information Management</option>
												<option value="Information Studies">Information Studies</option>
												<option value="Information Systems">Information Systems</option>
												<option value="Information Technology">Information Technology</option>
												<option value="Information Technology and Computer Science">Information Technology and Computer Science</option>
												<option value="Interior Architecture">Interior Architecture</option>
												<option value="International Business">International Business</option>
												<option value="Italian">Italian</option>
												<option value="Japanese">Japanese</option>
												<option value="Landscape Architecture">Landscape Architecture</option>
												<option value="Law">Law</option>
												<option value="Legal Studies">Legal Studies</option>
												<option value="Leisure Studies">Leisure Studies</option>
												<option value="Library and Information Studies">Library and Information Studies</option>
												<option value="Linguistics">Linguistics</option>
												<option value="Logic">Logic</option>
												<option value="Logic and Computation">Logic and Computation</option>
												<option value="Management">Management</option>
												<option value="Māori Business">Māori Business</option>
												<option value="Māori Education">Māori Education</option>
												<option value="Māori Research">Māori Research</option>
												<option value="Māori Studies">Māori Studies</option>
												<option value="Marine Biology">Marine Biology</option>
												<option value="Marketing">Marketing</option>
												<option value="Mathematics">Mathematics</option>
												<option value="Mathematics Education">Mathematics Education</option>
												<option value="Mathematics, Statistics and Operations Research">Mathematics, Statistics and Operations Research</option>
												<option value="Media Studies">Media Studies</option>
												<option value="Microbiology">Microbiology</option>
												<option value="Midwifery">Midwifery</option>
												<option value="Modern Languages">Modern Languages</option>
												<option value="Money and Finance">Money and Finance</option>
												<option value="Museum and Heritage Studies">Museum and Heritage Studies</option>
												<option value="Music">Music</option>
												<option value="New Zealand Literature">New Zealand Literature</option>
												<option value="New Zealand Studies">New Zealand Studies</option>
												<option value="Nursing">Nursing</option>
												<option value="Nursing and Midwifery">Nursing and Midwifery</option>
												<option value="Operations Research">Operations Research</option>
												<option value="Pacific Studies">Pacific Studies</option>
												<option value="Petroleum Geoscience">Petroleum Geoscience</option>
												<option value="Philosophy">Philosophy</option>
												<option value="Physical Geography">Physical Geography</option>
												<option value="Physics">Physics</option>
												<option value="Political Science and International Relations">Political Science and International Relations</option>
												<option value="Psychology">Psychology</option>
												<option value="Public Administration">Public Administration</option>
												<option value="Public History">Public History</option>
												<option value="Public Management">Public Management</option>
												<option value="Public Policy">Public Policy</option>
												<option value="Recreation and Leisure">Recreation and Leisure</option>
												<option value="Religious Studies">Religious Studies</option>
												<option value="Samoan Studies/Fa'asamoa">Samoan Studies/Fa'asamoa</option>
												<option value="Second Language Education">Second Language Education</option>
												<option value="Sexuality Studies">Sexuality Studies</option>
												<option value="Social Policy">Social Policy</option>
												<option value="Social Science Research">Social Science Research</option>
												<option value="Sociology">Sociology</option>
												<option value="Sociology, Social Policy and Social Science">Sociology, Social Policy and Social Science</option>
												<option value="Spanish">Spanish</option>
												<option value="Statistics">Statistics</option>
												<option value="Statistics and Operations Research">Statistics and Operations Research</option>
												<option value="Strategic Studies">Strategic Studies</option>
												<option value="Teaching (Primary and Secondary)">Teaching (Primary and Secondary)</option>
												<option value="Technology">Technology</option>
												<option value="Theatre">Theatre</option>
												<option value="Tourism">Tourism</option>
												<option value="Tourism Management">Tourism Management</option>
												<option value="Writing (Academic and Professional)">Writing (Academic and Professional)</option>
											</select>
										</div>
									</div>
									
									<div class="field_container">
										<label for="rg-keywords">Research keywords</label>
										<div class="field">
											<textarea id="rg-keywords" name="rg-keywords" rows="4" placeholder="e.g. materials science, biomaterials, bioplastics"></textarea>
											<p class="form_help">Enter some keywords that describe your research interests, separated by commas.</p>
										</div>
									</div>
								</fieldset>
								
								<fieldset>
									<h3>Media Guide</h3>
									<p>The <a href="/mediaguide">Media Guide</a> is a public directory of Victoria staff who are willing to speak to journalists and their areas of expertise.</p>
									
									<div class="field_container">
										<label class="form_checkbox"><input type="checkbox" selected="selected">List me in the Media Guide.</label>
									</div>
									
									<p class="form_help">
										You can also include your home and/or mobile phone number in the Media Guide if you are happy for journalists to contact you outside office hours.
									</p>
									
									<div class="field_container">
										<label>Home phone</label>
										<div class="field">
											<input type="text" pattern="[0-9 -+]+" class="small" placeholder="04 123 4567" />
										</div>
									</div>
									
									<div class="field_container">
										<label>Mobile phone</label>
										<div class="field">
											<input type="text" pattern="[0-9 -+]+" class="small" placeholder="021 123 4567" />
										</div>
									</div>
									
									<p>If you'd like to know more about the Media Guide, contact the Communications team:</p>
									
									<ul itemtype="http://schema.org/ContactPoint" itemscope="" class="contacts_list">
												<li><a href="mailto:communications@vuw.ac.nz" itemprop="email">communications@lists.vuw.ac.nz</a></li>
												<li><a href="tel:044636017" itemprop="telephone">Phone: 04 4636017</a></li>
									</ul>
	
								</fieldset>
			
								<div class="field_container form_actions">
									<div class="field">
										<input type="submit" class="button secondary" value="Save my details">
										<input type="reset" class="button tertiary" value="Reset form">
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
