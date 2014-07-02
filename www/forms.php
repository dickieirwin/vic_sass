<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students';
$GLOBALS['_html_title'] = 'Form Styles - Vic';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Current Students</span></div>
        <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href=''>Current Students</a></h2>
            <ul class='section_tree'>
                <li><a href=''>Manage your studies</a></li>
                <li><a href=''>Manage your money</a></li>
                <li><a href=''>Services and support</a></li>
                <li><a href=''>On Campus</a></li>
                <li><a href=''>New Students</a></li>
                <li><a href=''>Get Involved</a></li>
            </ul>
        </nav>
        <div class='additional_complementary' >
            <h2>Student Services</h2>
            <ul class='bullet_list divider_list'>
                <li><a href=''>Accommodation</a></li>
                <li><a href=''>Advocacy &amp; equity</a></li>
                <li><a href=''>Bookshop</a></li>
                <li><a href=''>Careers &amp; employment</a></li>
                <li><a href=''>Chaplains</a></li>
                <li><a href=''>Childcare</a></li>
            </ul>
        </div>
        </div>
    </aside>

    <div id='content'>
    <section role='main' class='primary'>
        <div class='entry'>
            <h1 class='page_title'>Forms</h1>
            <div class='intro'>
                <p>All forms elements are controlled from forms.scss. There is a shared codebase between all inputs with some specific styling for narrow forms in widgets.</p>
            </div>

            <h2>Standard Forms</h2>
            <p>Basic form styling for full width longer format forms.</p>

            <form class='highlight highlight_tertiary form_large' action='/'>
                <h2>Apply online</h2>
                <p>This has been given a class of <code>.highlight_teritiary</code> to provide the grey background and indentation. Typically this paragrpagh would be used to disclose any important details to the application eg. &ldquo;You&rsquo;ll need to have your Student ID number handy!&rdquo;.</p>
                <fieldset>
                    <!-- <legend>Personal details</legend> -->
                    <div class='field_container'>
                        <label for='first_name'>First name(s) <em>(required)</em></label>
                        <div class='field'>
                            <input type='text' id='first_name' aria-required='true' class="validation_error" />
                            <p class='form_error'>This error message shows above the field on mobile. That way it's not covered by the keyboard.</p>
                        </div>

                    </div>
                    <div class='field_container'>
                        <label for='last_name'>Last name <em>(required)</em></label>
                        <div class='field'>
                            <input class='medium' type='text' id='last_name' required='required' />
                            <p class='form_help'>This is help text under the form field.</p>
                        </div>
                    </div>
                    <div class='field_container half'>
                        <label for='dob'>Date of Birth</label>
                        <div class='field'>
                                <input type='date' id='dob' class='form_text small' placeholder='DD/MM/YYYY' />
                        </div>
                    </div>

                    <div class='field_container'>
                        <label for='dob'>Disabled field</label>
                        <div class='field'>
                                <input type='text' id='dob' class='form_text small disabled' disabled />
                        </div>
                    </div>

                    <div class='field_container'>
                        <label for='dob'>Disabled select box</label>
                        <div class='field'>
                                <select class='small disabled' disabled id='gender'>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                
                        </div>
                    </div>

                    <div class='field_container half'>
                        <label for='gender'>Gender</label>
                        <div class='field'>
                                <select class='small' id='gender'>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <!-- <legend>Contact details</legend> -->
                    <div class='field_container'>
                        <label for='email'>Email</label>
                        <div class='field'>
                            <input type='email' id='email' class='form_text' />
                        </div>
                    </div>


                    <div class='field_container'>
                    </div>
                </fieldset>
                <fieldset>
                    <!-- <legend>About you</legend> -->
                    <div class='field_container'>
                        <label for='url'>URL</label>
                        <div class='field'>
                            <input type='url' id='url' class='form_text' placeholder='http://yourdomain.com' />
                        </div>
                    </div>
                    <div class='field_container'>
                        <label for='bio'>Bio</label>
                        <div class='field'>
                            <textarea id='bio'></textarea>
                        </div>
                    </div>

                </fieldset>

                <fieldset>
                    <!-- <legend>Subscriptions</legend> -->
                    <div class='field_container'>
                         <label for='subject'>Subject</label>
                         <div class='field'>
                                <select name='' id='subject'>
                                    <option>All subjects</option>
                                    <option>Design</option>
                                    <option>Development</option>
                                </select>
                        </div>
                    </div>
                    <div class='field_container'>
                        <label for='notifications'>Notifications</label>
                        <div class='field'>
                            <ul class='radio_list validation_error'>
                                <li><label class='form_radio'><input type='radio' required=required name='notifications' /> Send me email</label></li>
                                <li><label class='form_radio'><input type='radio' name='notifications' /> Don't send me email</label></li>
                                <li><label class='form_radio'><input type='radio' name='notifications' /> Send me flowers</label></li>
                            </ul>
                            <p class='form_error'>This error message shows above the field on mobile. That way it's not covered by the keyboard.</p>
                        
                        </div>
                    </div>

                </fieldset>
                <fieldset>
                    <!-- <legend>Terms and conditions</legend> -->
                    <div class='field_container'>
                        <div class='field'>
                            <label class='form_checkbox' for='terms_agree'>
                                <input type='checkbox' id='terms_agree' />I accept the terms of service and agree that you can get in touch from time to time with things related to this application.
                            </label>
                        </div>
                    </div>
                    <div class='field_container form_actions'>
                        <div class='field'>
                            <input type='submit' value='Submit' class='button primary' />
                        </div>
                    </div>

                </fieldset>
            </form>

            <div class='intro'>
                <p>Inputs and textareas with different widths.</p>
            </div>

            <form class='form_large' action='/'>

                <fieldset>
                    <!-- <legend>About you</legend> -->
                    <div class='field_container'>
                        <label for='url'>Your website</label>
                        <div class='field'>
                            <input type='url' id='url' class='form_text' placeholder='http://yourdomain.com' />
                            <p class='form_help'>Use placeholders where they add value. Make sure to use correct types where possible to trigger relevant mobile keyboards.</p>
                        </div>
                    </div>
                    <div class='field_container'>
                        <label>Collection</label>
                        <div class='field form_input_collection'>
                            <input type='text' class='form_text small' placeholder='first' />
                            <input type='text' class='form_text small' placeholder='second' />
                            <input type='text' class='form_text small' placeholder='third' />
                            <p class='form_help'>These inputs are grouped with a single label.</p>
                        </div>
                    </div>
                    <div class='field_container'>
                        <label for='subject'>Small</label>
                        <div class='field'>
                            <select name='' class='small' id='subject'>
                                <option>All subjects</option>
                                <option>Design</option>
                                <option>Development</option>
                            </select>
                        </div>
                    </div>

                    <div class='field_container'>
                        <label for='bio'>Large</label>
                        <div class='field'>
                            <textarea class='' id='bio'></textarea>
                        </div>
                    </div>

                </fieldset>

            </form>

            <h2 class="rule">Inline form elements</h2>
            <p>Styles for basic form elements that exist outside of larger form areas, used for in page filters etc.</p>
            
            <form method="get" class="form">
                <div class="form__field--inline">
                    
                    <label for="club-categories">Filter</label>
                                    
                    <!-- <div class="form__input"> -->
                        <select id="club-categories" name="cat" class="form__input">
                            <option value="">Show all</option>
                            <option value="196875">Business</option>
                            <option value="197405">Communication</option>
                            <option value="204897">Environmental</option>
                            <option value="197199">Faculty based</option>
                            <option value="196920">Film</option>
                            <option value="196921">Games </option>
                            <option value="204868">International</option>
                            <option value="196938">Language and culture</option>
                            <option value="197392">Māori and Pasifika</option>                            
                            <option value="204855">Miscellaneous</option>
                            <option value="146608">Performing and wellbeing</option>
                            <option value="146609">Political and humanitarian</option>
                            <option value="197268">Religion</option>
                            <option value="146607">Sports</option>
                            <option value="146616"> - Court sports</option>
                            <option value="146615"> - Field sports</option>
                            <option value="146618"> - Martial arts</option>
                            <option value="146619"> - Other sports</option>
                            <option value="146617"> - Water sports</option>
                        </select>
                        <input class="form__button secondary" id="club-categories-go-button" type="submit" value="Go" />
                    <!-- </div> -->
                </div> 

                <div class="form__field--inline">
                    
                    <label for="club-categories">Label</label>
                                    
                    <input type="url" id="url" class="form__input" placeholder="http://yourdomain.com">
                            
                    <input class="form__button secondary" id="club-categories-go-button" type="submit" value="Go" />
                    
                </div>
                
            </form>


            <h2 class="rule">Widgets</h2>
            <p>Forms with a class of <code>.widget</code> within a <code>.col</code> or with an additional class of <code>.widget_narrow</code> will pickup the specific small styling.</p>

            <div class="columns columns2">
                <div class='col'>
                    <div class='widget highlight highlight_secondary widget_to_col'>
                        <h2>Course Finder</h2>
                        <form action=''>
                            <fieldset>
                                <div class='field_container'>
                                    <label for='term'>Year/Trimester</label>
                                        <select name='' id='term'>
                                            <option>2012 - all trimesters</option>
                                            <option>2012 - Summer</option>
                                            <option>2012 - Winter</option>
                                        </select>
                                </div>
                                <div class='field_container'>
                                    <label for='course_level'>Level</label>
                                        <select name='' id='course_level'>
                                            <option>Undergraduate - Level 100</option>
                                            <option>Undergraduate - Level 50</option>
                                            <option>Undergraduate - Level 25</option>
                                            </select>
                                </div>
                                <div class='field_container'>
                                    <label for='subject'>Subject</label>
                                        <select name='' id='subject'>
                                            <option>All subjects</option>
                                            <option>Design</option>
                                            <option>Development</option>
                                        </select>
                                </div>
                            </fieldset>
                            <input class='button primary' type='submit' value='Show Courses'>
                            <a class='button secondary' href=''>Course A-Z</a>
                        </form>
                    </div><!-- /widget -->
                </div>
                <div class='col'>
                    <div class='widget highlight highlight_secondary widget_to_col'>
                        <h2>Course Finder</h2>
                        <form action=''>
                            <fieldset>
                                <div class='field_container'>
                                    <label for='term'>Year/Trimester</label>
                                        <select name='' id='term'>
                                            <option>2012 - all trimesters</option>
                                            <option>2012 - Summer</option>
                                            <option>2012 - Winter</option>
                                        </select>
                                </div>
                                <div class='field_container'>
                                    <label for='course_level'>Level</label>
                                        <select name='' id='course_level'>
                                            <option>Undergraduate - Level 100</option>
                                            <option>Undergraduate - Level 50</option>
                                            <option>Undergraduate - Level 25</option>
                                        </select>
                                </div>
                                <div class='field_container'>
                                    <label for='subject'>Subject</label>
                                        <select name='' id='subject'>
                                            <option>All subjects</option>
                                            <option>Design</option>
                                            <option>Development</option>
                                        </select>
                                </div>
                            </fieldset>
                            <input class='button primary' type='submit' value='Show Courses'>
                            <a class='button secondary' href=''>Course A-Z</a>
                        </form>
                    </div><!-- /widget -->
                </div><!-- /col -->
            </div><!-- /columns -->



            <div class='widget widget_large highlight highlight_secondary'>
                <!-- <h2>Search</h2> -->
                <form action=''>
                    <fieldset>
                        <div class='field_container'>
                            <div class='form_left_col'>
                                    <select name='' id='researcher'>
                                        <option value=''>Find a researcher</option>
                                        <option value='People'>People</option>
                                        <option value='Centres and Institutes'>Centres &amp; Institutes</option>
                                        <option value='Publications'>Publications</option>
                                    </select>
                            </div>
                            <div class='field form_search'>
                                <input type='text' class='form_text' placeholder='Name or area of expertise'>
                                <input class='button primary' type='submit' value='Go'/>
                            </div>
                        </div>
                    </fieldset>
                    <p class='widget_description'>Do you require an expert to comment? <a href=''>See our media guide</a></p>
                </form>
            </div><!-- /widget -->


        </div><!-- /content -->





    </section>

</div>


<?php
includeFile('footer.php');
