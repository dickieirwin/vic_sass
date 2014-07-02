<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_body_class'] = 'theme-study';
$GLOBALS['_html_title'] = 'Postgraduates';

includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/pages/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Future Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Programmes &amp; Courses</a></li>
                    <li><a href=''>Build your dream job</a></li>
                    <li><a href=''>Why choose Victoria?</a></li>
                    <li><a href='/section-admissions.php'>Admissions &amp; Enrolment</a></li>
                    <li><a href=''>Financing your study</a></li>
                    <li><a href=''>Services &amp; Support</a></li>
                </ul><!-- /section_tree -->
            </nav><!-- /nav_tertiary -->
            <div class='additional_complementary' >
                <h2>Contact the research office</h2>
                <p>
                    PO Box 600, Wellington 6140,<br /> New Zealand
                    Fax: 04 463 5199<br />
                    Phone: 04 463 5620
                </p>
                <h2>Faculty of graduate research</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /complementary -->
    <div id='content'>

        <section role='main' class='primary'>
            
            <div class='entry'>
				<h1 class="page_title">Postgraduates</h1>
				<div class="intro"><p>Victoria offers an exceptionally wide range of postgraduate programmes to suit most learning needs. Whatever your aspirations, there’s a qualification for you.</p></div>


<h2>Find the programme that suits you</h2>

    <div class="widget widget_large highlight highlight_secondary" id="postgraduate_liaison">
<form id="form_course_search" action="">
            <fieldset>
              <label for="">Search courses</label><div class="field_container">

                  <div class="form_left_col">
                  <select name="" id="">
                    <option value="all">Search courses</option>
                    <option value="Undergrad">Undergraduate</option>
                    <option value="Postgrad" selected="selected">Postgraduate</option>
                    <option value="Diploma">Diploma and certificates</option>
                  </select>
                  </div>
                  <div class="field form_search">
                  <input id="" name="q" type="text" class="form_text" autocomplete="off" placeholder="" value="">
                  <input type="submit" class="button" value="Go">
                </div>
</fieldset>
</form>
<form id="form_subjects" action="http://new.victoria.ac.nz/redirect" class="auto_submit">
            <fieldset>
              <div class="field_container">

                <label for="subject_url">or choose a subject</label>
                <div class="field"><select name="url" id="subject_url" class="as_trigger">
<option value="">Select...</option>
<option value="http://new.victoria.ac.nz/subjects/architectural-studies">Accounting</option>
</select></div>
             </div>
<input type="submit" value="View subjects" id="subject_form_submit" class="js_hide" />
</fieldset>
</form>

<form id="form_degrees" action="http://new.victoria.ac.nz/redirect" class="auto_submit">
            <fieldset>

              <div class="field_container">

                <label for="degree_url">or choose a degree</label>

                <div class="field">        
                    
                <select name="url" id="degree_url" class="as_trigger">
<option value="">Select...</option>
<option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/architectural-studies">Bachelor of Architectural Studies</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/arts">Bachelor of Arts</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/biomedical-sciences">Bachelor of Biomedical Sciences</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/building-science">Bachelor of Building Science</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/commerce">Bachelor of Commerce</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/design-innovation">Bachelor of Design Innovation</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/early-childhood-education">Bachelor of Education (Teaching) Early Childhood</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/engineering">Bachelor of Engineering with Honours</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/laws">Bachelor of Laws</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/music">Bachelor of Music</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/science">Bachelor of Science</option><option value="http://new.victoria.ac.nz/study/programmes-courses/undergraduates/bachelors-degrees/tourism-management">Bachelor of Tourism Management</option>
</select></div>
              </div>
<input type="submit" value="View degrees" id="degree_form_submit" class="js_hide" />
            
</fieldset>
</form>
<hr class="light thin" />
<form id="form_faculties" action="http://new.victoria.ac.nz/redirect" class="auto_submit">
            <fieldset>
              
              <div class="field_container">

                <label for="">Browse by faculty</label>

                <div class="field">        
                    <select name="subjects" id="" class="as_trigger">
                        <option value="">Select...</option>
                        <option value="">Accounting</option>
                        <option value="">Adult literacy and numeracy</option>
                        <option value="">Anthropology</option>
                        <option value="">Applied Linguistics</option>
                        <option value="">Applied Physics</option>
                        <option value="">Architecture</option>
                        <option value="">Architecture History and Theory</option>
                        <option value="">Art History</option>
                        <option value="">Asian Studies</option>
                        <option value="">Biology</option>
                        <option value="">Biomedical science</option>
                        <option value="">...to infinity</option>
                    </select>
                </div>
              </div>
            </fieldset>
<input type="submit" value="View faculty" id="faculties_form_submit" class="js_hide" />
        
        </form>
</div>


<a class="promo highlight highlight--link" href="#">
    Browse our <b>Research expertise</b> pages to find areas of interest for Master&#39;s by Theses, PhD or other doctoral degrees.
</a>

<h4><strong>&nbsp;</strong><strong>Browse by Qualification:</strong></h4>

<p>&lt;drop down box - &nbsp;links to subpages&gt;</p>

<p>&gt; Certificates &nbsp;&gt; Graduate Certificates &gt;Graduate Diplomas &nbsp;</p>

<p>&gt; Postgraduate Certificates &gt;Postgraduate Diplomas</p>

<p>&gt; Honours &gt; Masters &gt;PhD&nbsp;</p>

<h4><strong>Browse by Faculty:</strong></h4>

<p>&lt;Drop down box - these link through to Faculty p/g pages&gt;</p>

<p>&gt; Faculty of Architecture and Design &nbsp; &gt;&nbsp;Victoria Business School<br />
&gt; Faculty of Education &gt;&nbsp;Faculty of Engineering<br />
&gt; Faculty of Humanities and Social Sciences&nbsp;&gt; New Zealand School of Music<br />
&gt; Faculty of Law &nbsp;&gt; Faculty of Science &nbsp;</p>



<div id="programmes_&_events">
<h2><br /></h2>

</div>

<div class="bleed highlight_secondary" id="postgraduate_liaison">
<h2><br /></h2>

</div>
<h2>Postgraduate admissions</h2>

<h3><a id="enrolment" name="enrolment"></a></h3>

<p>Go to <a href="http://new.victoria.ac.nz/future-students/admissions-and-enrolment/postgraduate-admissions">admissions</a> for information on applying and enrolling.&nbsp;</p>

<p><strong>Application deadlines</strong></p>

<h3><a id="application-deadlines" name="application-deadlines"></a></h3>

<ul>
  <li>PhD applications are due by 1 March, 1 July and 1 November, please see the <a href="http://www.victoria.ac.nz/fgr/prospective-phds/applying">Faculty of Graduate Research website</a> for further details.</li>

  <li>Other application deadlines vary, check the individual <a href="http://www.victoria.ac.nz/home/study/subjects/catprint">course programme information</a>.&nbsp;</li>
</ul>

<div>
  <h2>Guide to postgraduate study &lt;put this as aux content in RHS as download&gt;</h2>

  <h3><a id="guide-to-pg-study" name="guide-to-pg-study"></a></h3>

  <p>The&nbsp;<em>Guide to Postgraduate Study&nbsp;</em>is a general guide for prospective postgraduate students. Download the most recent edition of the Guide can be downloaded below.</p>

  <h1 class="page_title" style="line-height: 0.97; font-family: National, &#39;Segoe WP Semibold&#39;, &#39;Nimbus Sans L&#39;, Arial, &#39;Helvetica Neue&#39;, Helvetica, sans-serif; -webkit-font-smoothing: antialiased; color: rgb(100, 166, 89); margin: 0px 0px 0.3em; font-size: 3.42857em; letter-spacing: -0.03em; padding-right: 32.09375px;"></h1>

  <h2><a href="http://new.victoria.ac.nz/future-students/programmes-and-courses/postgraduates2/postgraduate-prospectuses">Postgraduate prospectuses</a></h2>

  <p>Find out more about what you could study as a postgraduate by reading about options in the different schools and faculties across Victoria.&nbsp;</p>
</div>

<h2>Scholarships</h2>

<h3><a id="scholarships" name="scholarships"></a></h3>

<p>Victoria has a range of postgraduate scholarships available. Please visit <a href="http://new.victoria.ac.nz/students/manage-your-studies/scholarships">Scholarships</a> to find out more.</p>

<h2>Unsure about what to study?&nbsp;</h2>

<p>If you are unsure about which postgraduate option would suit you best please contact Charlotte Deans, our Postgraduate Liaison Officer. If you are a domestic student (a New Zealander or Australian citizen or permanent resident) she can assist you with information on postgraduate study options, give you general information about enrolment and get you in touch with the right people, for example, the relevant postgraduate coordinator.</p>

<p><strong>Phone:</strong>&nbsp;<a href="tel:6444636667">+64-4-463 6667</a>&nbsp;or 0800 VICTORIA (Option 4)<br />
<strong>Email:</strong>&nbsp;<a href="mailto:postgrad-enquiries@vuw.ac.nz">postgrad-enquiries@vuw.ac.nz&nbsp;</a></p>

<p>International students should contact <a href="http://www.vuw.ac.nz/international/">Victoria International</a>.</p>

            </div>
        </section>

    </div>

<?php
includeFile('footer.php');
