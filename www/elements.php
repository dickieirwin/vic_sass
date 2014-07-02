<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-default no_sidebar';
$GLOBALS['_html_title'] = 'Content page | Victoria University of Wellington';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Current Students</span></div>
        <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href='/students-hub.php'>Current Students</a></h2>
            <ul class='section_tree'>
                <li><a href=''>Manage your studies</a></li>
                <li class="parent"><a class="" href='/section-money.php'>Manage your money</a>
                    <ul>
                        <li class="current"><a class="current" href="http://new.victoria.ac.nz/students/manage-your-money/fees">Fees</a>
                                
                            <ul>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/calculate-your-fees">Fees calculator</a>
                                        
                                </li>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/domestic-fees">Domestic students fees</a>
                                        
                                </li>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/international-fees">International students fees</a>
                                        
                                </li>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/student-services-levy-faqs">Student services levy FAQs</a>
                                        
                                </li>
                                                          </ul>
                          
                        
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/financial-survival">Financial survival</a>
                                
                        </li>
                                              <li class="external"><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/financial-support-and-advice2">Financial support and advice</a>
                                
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/scholarships">Scholarships</a>
                                
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/student-loans-and-allowances">Student loans and allowances</a>
                                
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/withdrawals-and-refunds">Course withdrawals and refunds </a>
                                
                        </li>
                                          </ul>
                
                </li>
                <li><a href=''>Services and support</a></li>
                <li><a href=''>On Campus</a></li>
                <li><a href='/section-new_students.php'>New Students</a></li>
                <li><a href=''>Get Involved</a></li>
            </ul>
        </nav>
        </div>
    </aside>
    <div id='content'>
    <section role='main' class="primary">

        <ul class='breadcrumb'>
            <li><a href=''>Study at Victoria</a></li>
            <li><a href=''>Apply &amp; Enroll</a></li>
            <li><a href=''>Postgraduate admissions</a></li>
        </ul>


        <div class='entry'>
            <h1 class='page_title'>A &lsquo;bucket-list&rsquo; of page elements</h1>


<style>
.page_title .alternate_language::before { content: '\A'; white-space: pre; }
.page_title .alternate_language { font-size: 0.75em; }
</style>

				<h1 class="page_title">
					Page title in the primary language
					<span class="alternate_language">Page title in an alternate language</span>
				</h1>


            <div class='intro'>
                <p>An introductory div that can contain multiple paragraphs if need be and <a href=''>links</a> and <strong>strongs</strong> and <em>emphasis.</em> However, keep it short &ndash; a standard introduction (a bit like this) takes up quite a lot of real estate on small screens.</p>
            </div>
            <!-- /
            LISTS
            -->

			
            <h3>Unordered Lists</h3>
            <ul>
              <li>three <a href="#">years of full-time</a> study</li>
              <li>360 points in total</li>
              <li>maximum of 180 points at 100 level</li>
              <li>minimum of 180 points at 200/300 level, including at least 75 points at 300 level</li>
              <li>no course numbered 300-399 may be counted towards more than one major or minor</li>
              <li>at least 240 points must be from Part A of the BA Schedule (except that up to 60 approved points from other degree schedules or Part B of the BA Schedule may be included in this total where they are taken to satisfy the requirements of a major listed under the BA, but taught by another faculty)</li>
              <li>must complete at least one listed BA major</li>
              <li>may complete a second major taught by another faculty. You must confirm the requirements with your Student Adviser</li>
              <li>you may choose up to two minors towards your BA.</li>
            </ul>
            <ul>
                <li>list item 1</li>
                <li>list item 1
                    <ul>
                        <li>list item 2</li>
                        <li>list item 2
                            <ul>
                                <li>list item 3</li>
                                <li>list item 3</li>
                            </ul>
                        </li>
                        <li>list item 2</li>
                        <li>list item 2</li>
                    </ul>
                </li>
                <li>list item 1</li>
                <li>list item 1</li>
            </ul>

            <h3>Ordered Lists</h3>
            <ol>
              <li>three years of full-time study</li>
              <li>360 points in total</li>
              <li>maximum of 180 points at 100 level</li>
              <li>minimum of 180 points at 200/300 level, including at least 75 points at 300 level</li>
              <li>no course numbered 300-399 may be counted towards more than one major or minor</li>
              <li>at least 240 points must be from Part A of the BA Schedule (except that up to 60 approved points from other degree schedules or Part B of the BA Schedule may be included in this total where they are taken to satisfy the requirements of a major listed under the BA, but taught by another faculty)</li>
              <li>must complete at least one listed BA major</li>
              <li>may complete a second major taught by another faculty. You must confirm the requirements with your Student Adviser</li>
              <li>you may choose up to two minors towards your BA.</li>
            </ol>

            <ol>
                <li>list item 1</li>
                <li>list item 1
                    <ol>
                        <li>list item 2</li>
                        <li>list item 2
                            <ol>
                                <li>list item 3</li>
                                <li>list item 3</li>
                            </ol>
                        </li>
                        <li>list item 2</li>
                        <li>list item 2</li>
                    </ol>
                </li>
                <li>list item 1</li>
                <li>list item 1</li>
            </ol>
            

			<h3 id="docs">Lists of documents</h3>
			
			<ul class="divider_list document_list">
				<li>
					<a href><em class="result_flag flag_pdf">pdf</em> Draft Collection Donations Policy (213.0&nbsp;KB)</a>
				</li>
				<li>
					<a href><em class="result_flag flag_xls">Excel</em> Draft Appendix A: Donations form (358.2&nbsp;KB)</a>
				</li>
				<li>
					<a href><em class="result_flag flag_doc">Word</em> Commencing Parental Leave checklist (1.0&nbsp;MB)</a>
				</li>
			</ul>
			
			<h3>Paragraph styling</h3>
			
			<p>All <a href="#">domestic applicants are encouraged</a> to enrol online—it means you can track your enrolment progress, receive your conditional Offer of Study and your confirmation all in one place. If you are unable to complete online enrolment, contact the Enrolment Office.</p>
			
			<a href="http://new.victoria.ac.nz/future-students/international-students" class="promo highlight_tertiary highlight--link">
			
				<h2>International students</h2><p>This process is for New Zealand residents only! If you are an international student, please see the international admission instructions for how to apply and enrol.</p>

			</a>
			
			<p>All domestic applicants are encouraged to enrol online—it means you can track your enrolment progress, receive your conditional Offer of Study and your confirmation all in one place. If you are unable to complete online enrolment, contact the Enrolment Office.</p>
			
			<div class="highlight_tertiary bleed" id="declining_an_offer">
			
				<h3 id="decline">Declining an Offer</h3>

				<p>If you decide not to study at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>

			</div>
		<div class="columns columns2 ">
            <div class="col">
            <h2>Really long Heading 2 without link, prolly wraps onto two lines</h2>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>
            
            <h3>Heading 3 without link</h3>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>
            
            <h4>Heading 4 without link</h4>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>

            <h5>Heading 5 without link</h5>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>

            <h6>Heading 6 without link</h6>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>

        </div>
        <div class="col">
			<h2><a href="/">Really long Heading 2 with link wrapping onto two lines</a></h2>

			<p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>
			
			<h3><a href="/">Heading 3 with link</a></h3>

			<p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>
			
			<h4><a href="/">Heading 4 with link</a></h4>

			<p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>

            <h5><a href="/">Heading 5 with link</a></h5>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>

            <h6><a href="/">Heading 6 with link</a></h6>

            <p>Student Learning Support take 20 volunteers each year to be <a href="/">Conversation Leaders</a>, helping international students practice their English and increase their confidence.</p>
            </div>
        </div>

            <h3>Definition Lists</h3>
            <dl>
                <dt>Chemical Products and Processes:</dt>
                <dd>Chemical technologies that are the building blocks of nearly all manufacturing.</dd>
                <dt>Advanced Materials:</dt>
                <dd>A focus on high-tech materials such as those used in micro-electronic materials and as superconductors.</dd>
            </dl>

            <h3 id="baseline">Applying a baseline grid</h3>
            <div class="baseline">

                <div class="row">
                    <div class="col col1">

                        <h1>Heading on<br />
                            two lines...<br />or even three lines!<br />or even four lines!<br />or even five lines!</h1>

                        <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
                        <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>

                         <h2>Really long heading could end up wrapping onto two lines, hopefully not because headings shouldn't be this long.</h2>

                        <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
                        <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
                    </div>
                    
                    
                    
                </div>
                

            </div>

            <div class="columns columns3 baseline">

                <div class="row">
                    <div class="col col1">
                        <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
                        <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
                    </div>
                    
                    <div class="col col1">
                        <h2>Heading on<br />
                                two lines...<br />or even three lines!</h2>
                    </div>
                    <div class="col col1">
                        <h3>Heading on<br />
                        two lines...<br />or even three lines!</h3>

                        <h4>Heading on<br />
                        two lines...<br />or even three lines!</h4>

                        <h5>Heading on<br />
                        two lines...<br />or even three lines!</h5>
                    </div>
                </div>
                

            </div>

            <div class="baseline">
                <span></span>
            <h3>Heading on<br />
                two lines...<br />or even three lines!</h3>

            <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
            <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>

             <h4>Heading on<br />
                    two lines...<br />or even three lines!</h4>

            <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
            <p>Testing basline grid at Victoria, you can decline your Offer of Study online. You can also decline by mail, either by crossing out your printed Offer, signing it, and returning it, or by writing to the Enrolment Office stating that you wish to decline your Offer.</p>
            
            </div>


            <div class="columns columns2 ">
                <div class='additional_complementary col'>
                    <h2>Contacts Block</h2>
                    
                    <ul class="contacts_block">
                        <li itemscope>
                                            <h4>In an emergency</h4>
                                            <a href="tel:044639999">ext. 8888 or 463 9999</a>
                        </li>

                        <li itemscope>
                                            <h4>Reception</h4>
                                            <a href="tel:044721000">ext. 0</a>
                        </li>
                    
                        <li itemscope>
                                            <h4>Campus Care</h4>
                                            <a href="tel:044635398">ext. 5398</a>
                        </li>
                    
                        <li itemscope>
                                            <h4>ITS Service Desk</h4>
                                            <a href="tel:044635050">ext. 5050</a>
                        </li>
                    </ul>
                </div>

                <div class='additional_complementary col'>
                    <h2>Contacts List</h2>
                    <ul itemtype="http://schema.org/ContactPoint" itemscope="" class="contacts_list">
                        <li><a href="mailto:nick.edwards@vuw.ac.nz" itemprop="email">nick.edwards@vuw.ac.nz</a>
                        </li>
                        <li><a href="tel:04 4635766" itemprop="telephone">Phone: 04 4635766</a>
                        </li>
                        <li class="no_link">Room 324, Hunter Bldg Gate 1 Kelburn Pde</li>
                    </ul>
                </div>
            </div>

            <a href=""><div class="promo promo_with_image highlight highlight_boom" itemscope>
                    <img src="http://placekitten.com/400/250" class="promo_img">
                    <div class="promo_text">
                            <h3 itemprop="datePublished">27 February 2014</h6>
                            <h2>A very important announcemet</h2>
                            <p>We would only use this for something we really want absolutely everybody to read: for example, we might use this pattern to announce the appointment of a new Vice-Chancellor.</p>
                            <p>It can have multiple paragraphs. The image is optional. The entire block is a link.</p>
                    </div>
            </div></a>

            <div class="promo highlight highlight_secondary">
                <h3 itemprop="datePublished">27 February 2014</h6>
                <h2 class="promo_headline">A fairly important announcement</h2>
                <p>A reserved parking space in the Hunter Courtyard is available. It will be awarded to the first person to bribe Campus Services with chocolate. This announcement has no link, but if it did it would be either inline or a button, depending on what was appropriate.</p>
            </div>

            


            <div class="columns columns3 ">
                <div class="col">
                    <div class="promo highlight highlight_secondary">
                        <h2 class="promo_headline">A normal announcement</h2>
                        <p>The <em>Bacon and Other Delicious Foodstuffs Policy</em> is out for consultation. <a href="">Read it and tell us what you think</a>.</p>
                        <p>Dates on announcements aren't mandatory if they aren't needed.</p>
                    </div>
                    <h3>Filler to show right bar content</h3>
                    <p>Bacon ipsum dolor sit amet tri-tip spare ribs sirloin chicken turducken. Chicken short ribs beef ribs pig ham jerky prosciutto corned beef tenderloin. Prosciutto chicken kevin pig, tenderloin beef ground round tri-tip flank pancetta tongue beef ribs. Tongue drumstick salami meatloaf, flank shoulder shank doner. Turkey sausage rump, fatback ball tip porchetta leberkas landjaeger flank. Short ribs beef ribs ribeye chicken, tongue frankfurter pancetta strip steak tail ball tip. Leberkas prosciutto shankle bacon flank, chicken swine salami ribeye pork ham jerky pastrami sirloin jowl.</p>
                </div>
                
                <div class="col">
                    <h3>Filler to show right bar content</h3>
                    <p>Bacon ipsum dolor sit amet tri-tip spare ribs sirloin chicken turducken. Chicken short ribs beef ribs pig ham jerky prosciutto corned beef tenderloin. Prosciutto chicken kevin pig, tenderloin beef ground round tri-tip flank pancetta tongue beef ribs. Tongue drumstick salami meatloaf, flank shoulder shank doner. Turkey sausage rump, fatback ball tip porchetta leberkas landjaeger flank. Short ribs beef ribs ribeye chicken, tongue frankfurter pancetta strip steak tail ball tip. Leberkas prosciutto shankle bacon flank, chicken swine salami ribeye pork ham jerky pastrami sirloin jowl.</p>
                </div>  
                   
                <aside role='complementary' class='secondary col'>
                    <article class="feature_message widget highlight highlight_tertiary">
                        <header>
                            <h2>Right bar content</h2>
                        </header>
                        
                        <div class="news_block">
                            <a href>
                                <h3 itemprop="datePublished">24 February 2014</h3>
                                <h4>Budget and Financial Report</h4>
                                <p>Victoria’s 2014 Budget and Financial Report is now available. I encourage you all to take the time to read it.</p>
                            </a>
                        </div>
                        <div class="news_block">
                            <h3 itemprop="datePublished">24 February 2014</h3>
                            <h4><a href>Budget and Financial Report</a></h4>
                            <p>Victoria’s 2014 Budget and Financial Report is now available. I encourage you all to take the time to read it.</p>
                        </div>
                        <footer class="clear">
                            <h5>Professor</h5>
                            <h2>Grant Guilford</h2>
                            <img class="feature_thumb" src="/images/vice-chancellor_Trans.jpg" alt="" style="bottom: 0; height: 100%;">
                        </footer>
                    </article>
                    
                    <div class="widget widget_narrow">
                        <header>
                            <h2>What’s on</h2>
                        </header>
                        <div class="date_block">
                            <h3>28 February 2014</h3>
                            <h6>All day</h6>
                            <h4>Trimester 1 begins</h4>
                            <h6>10:45am–12:45pm</h6>
                            <h4><a href="">Some other thing</a></h4>
                        </div>
                        <div class="date_block">    
                            <h3>3 March 2014</h3>
                            <h6>10:45am–12:45pm</h6>
                            <h4><a href="">And another thing</a></h4>
                            <h6>1pm–2pm</h6>
                            <h4><a href>An event with a very long name to see how it wraps, just in case something strange happens</a></h4>
                        </div>
                        <div class="date_block">    
                            <h3>27 April 2014</h3>
                            <h6>All day</h6>
                            <h4>University closed</h4>
                        </div>
                        <a href class="button tertiary more-items">More events</a>
                    </div>
                </aside>
            </div>    
                        


            <h2>Media</h2>
            <h3>figure</h3>
            <figure>
                <img src="http://placekitten.com/600/300" alt="">
                <figcaption>Figcaption content</figcaption>
            </figure>
            <p>This is a weenie little inline image it shouldn't get blown up in size <a class="add-another-category-link"><img src="/assets/images/icon-add.png"></a></p>

            <h3>Video</h3>
            <p>iframed or embedded content will stretch: we're grabbing the aspect ratio with javascript; wrapping the iframe in a div with classes of .media and .stretchy_embed; making that wrapper flexible; then positioning the embedded content relative to that. Booom!</p>
            <iframe width="853" height="480" src="http://www.youtube.com/embed/vFj2Td_Gzig" frameborder="0" allowfullscreen></iframe>
            <iframe src="http://player.vimeo.com/video/12281245" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

            <h3>Maps</h3>
            <p>Maps stretch as well. One caveat: during resize (only) the content crops rather than remaining centred so large differences in width may see location pins shift off screen) <strong>if</strong> users resize their browsers.</p>
            <iframe width="600" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=victoria+uni+kelburn&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=48.688845,89.912109&amp;t=h&amp;ie=UTF8&amp;hq=victoria+uni&amp;hnear=Kelburn,+Wellington,+New+Zealand&amp;ll=-41.28703,174.769435&amp;spn=0.006449,0.025706&amp;z=15&amp;output=embed"></iframe>

            <h3>Forms</h3>
            <form class='form_basic bleed highlight highlight_secondary' action="/">
                <fieldset>
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form_text" />
                    <p class="form_help">This is help text under the form field.</p>
                </fieldset>

                <fieldset>
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form_text" />
                </fieldset>

                <fieldset>
                    <label for="gender">Gender</label>
                    <select id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </fieldset>

                <label for='subject'>Subject</label>
                <select name='' id='subject'>
                    <option>All subjects</option>
                    <option>Design</option>
                    <option>Development</option>
                </select>

                <fieldset class="radio">
                    <label for="notifications">Notifications</label>
                    <ul>
                        <li><label><input type="radio" name="notifications" /> Send me email</label></li>
                        <li><label><input type="radio" name="notifications" /> Don't send me email</label></li>
                        <li><label><input type="radio" name="notifications" /> Send me flowers</label></li>
                    </ul>
                </fieldset>

                <fieldset>
                    <label for="url">URL</label>
                    <input type="url" id="url" class="form_text" placeholder="http://yourdomain.com" />
                </fieldset>

                <fieldset>
                    <label for="bio">Bio</label>
                    <textarea id="bio"></textarea>
                </fieldset>

                <fieldset class="check">
                    <label><input type="checkbox" /> I accept the terms of service and lorem ipsum.</label>
                </fieldset>

                <fieldset class="form_actions">
                    <input type="submit" value="Submit" />
                </fieldset>
            </form>
            <h3>Tables</h3>
            <p>A simple table with a <code>thead</code>. Small amount of padding is added to <code>:first-child</code> cells</p>
            <table>
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Start</th>
                        <th>End</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>English Language</td>
                        <td>October</td>
                        <td>March</td>
                    </tr>
                    <tr>
                        <td>French</td>
                        <td>February</td>
                        <td>August 2014</td>
                    </tr>
                    <tr>
                        <td>German</td>
                        <td>September 2013</td>
                        <td>January</td>
                    </tr>
                    <tr>
                        <td>Spanish</td>
                        <td>November</td>
                        <td>May</td>
                    </tr>
                </tbody>
            </table>

            <p>A more complex table with many rows and nesting: currently failing (spectacularly on mobile). There's some code targeting cells with a rowspan but ultimately this level of complexity is too tough for a responsive site.</p>

            <table>
                <tbody>
                    <tr><th width="10%" scope="row" title="Course Reference Number">CRN</th><th width="15%" scope="row">From/To</th><th width="15%" scope="row">Days</th><th width="14%" scope="row">Time</th><th width="18%" scope="row">Building [Campus]</th><th width="8%" scope="row">Room</th><th width="20%" scope="row">Instructor</th></tr><tr><td rowspan="2">7539</td>
<td>15&nbsp;Jul –  20&nbsp;Oct&nbsp;2013</td><td>Tue, Thu</td><td>1200 - 1250</td><td>Alan MacDiarmid Building [<a href="http://www.victoria.ac.nz/home/about/maps/campus-kelburn" title="Campus">Kelburn</a>]</td><td>LT105</td><td rowspan="2">&nbsp;</td></tr>
<tr><td>15&nbsp;Jul –  20&nbsp;Oct&nbsp;2013</td><td>Wed</td><td>1310 - 1400</td><td>Alan MacDiarmid Building [<a href="http://www.victoria.ac.nz/home/about/maps/campus-kelburn" title="Campus">Kelburn</a>]</td><td>LT105</td></tr>
</tbody>
            </table>



            <h3>Text-level semantics</h3>
            <address>Address: somewhere, world</address>
            <p>
            The <a href="#">a element</a> example<br>
            The <abbr>abbr element</abbr> and <abbr title="Title text">abbr element with title</abbr> examples<br>
            The <b>b element</b> example<br>
            The <cite>cite element</cite> example<br>
            The <code>code element</code> example<br>
            The <del>del element</del> example<br>
            The <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn> examples<br>
            The <em>em element</em> example<br>
            The <i>i element</i> example<br>
            The img element <img src="http://placekitten.com/16/16" alt=""> example<br>
            The <ins>ins element</ins> example<br>
            The <kbd>kbd element</kbd> example<br>
            The <mark>mark element</mark> example<br>
            The <q>q element <q>inside</q> a q element</q> example<br>
            The <s>s element</s> example<br>
            The <samp>samp element</samp> example<br>
            The <small>small element</small> example<br>
            The <span>span element</span> example<br>
            The <strong>strong element</strong> example<br>
            The <sub>sub element</sub> example<br>
            The <sup>sup element</sup> example<br>
            The <var>var element</var> example<br>
            The <u>u element</u> example
            </p>
            <blockquote cite="">
                <p>The biodiversity that future generations of New Zealanders will inherit depends very much on the decisions that we make now to safeguard our unique species and our country's wealth of marine resources</p>
                <p class='quote_credit'>Professor Gardner</p>
            </blockquote>

            <figure class="quote">
                <blockquote>It is the unofficial force—the Baker Street irregulars.</blockquote>
                <figcaption>Sherlock Holmes, <cite>Sign of Four</cite></figcaption>
            </figure>

            <p>Professor Gardner joined the Science Faculty as lecturer in marine biology at Victoria University in 1994. He was an active member of the South Coast Marine Reserve Coalition, a group that promoted the establishment of a full ‘no take’ marine reserve on Wellington’s South Coast—and eventuated in the creation of the Taputeranga Marine Reserve in 2008.</p>
            <q>Professor Gardner says: “With ever-increasing pressure on marine resources in coastal and oceanic regions, marine protected areas are one way to help conserve biodiversity and to allow heavily fished species to recover from human activities.”</q>
			
			<h3>A-Z navigation</h3>
			
			
			
			<div id="a-z_links_bottom" class="a-z_paging bleed highlight_secondary">
				<ul class="pagination" role="navigation">
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=A"><span>A</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=B"><span>B</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=C"><span>C</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=D"><span>D</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=E"><span>E</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=F"><span>F</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=G"><span>G</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=H"><span>H</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=I"><span>I</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=L"><span>J</span></a></li>
                    <li><span>K</span></li>
                    <li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=L"><span>L</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=M"><span>M</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=N"><span>N</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=O"><span>O</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=P"><span>P</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=Q"><span>Q</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=R"><span>R</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=S"><span>S</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=T"><span>T</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=U"><span>U</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=W"><span>W</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=L"><span>X</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=L"><span>Y</span></a></li>
					<li><a href="http://new.victoria.ac.nz/staff/our-university/policies-and-planning/policies?result_126739_result_page=L"><span>Z</span></a></li>
				</ul>
			</div>
			
        </div><!-- /content -->
    </section>
    <?php //includeFile('complementary-links.php'); ?>
    </div>

<?php
includeFile("footer.php");
