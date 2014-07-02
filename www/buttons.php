<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students';
$GLOBALS['_html_title'] = 'Content page - Vic';

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

    <div  id='content'>
        <section role='main' class='primary'>
            <div class='entry'>
                <h1 class='page_title'>Buttons</h1>
    
                <p class="intro">The button suite should be consistent across anchors, inputs and button elements. There are 4 style options and 3 size options, x-large remains unused at this stage but may prove useful.</p>
                <h2 class="rule">Anchors</h2>
                <p>The standard <code>.button</code> without other classes is the default primary action. There is no inheritance logic to change styling simply add <code>.secondary</code>, <code>.tertiary</code>, or <code>.transparent</code> to modify. Buttons with <code>.transparent</code> look like simple links but behave as buttons and maintain the large hit state - they should stack nicely next to other more important actions.</p>
                <p>
                <a class='button'>Primary</a>
                <a class='button secondary'>Secondary</a>
                <a class='button tertiary'>Tertiary</a>
                </p>
                <p>
                <a class='button large'>Primary large</a>
                <a class='button secondary large'>Secondary large</a>
                <a class='button tertiary large'>Tertiary large</a>
                </p>
                <p>
                <a class='button x_large disabled'>Primary x-large</a>
                <a class='button secondary x_large'>Secondary x-large</a>
                <a class='button tertiary x_large'>Tertiary x-large</a>
                </p>
                <div class="highlight highlight_tertiary">
                <p>A standard pattern may look a bit like this:</p>
                <p>
                <a class='button'>Next Step</a>
                <a class='button tertiary'>Skip this</a>
                <a class='button transparent'>Hold up, go back</a>
                </p>
                </div>
                <p>It's probably worth reserving .secondary buttons for an alternative to primary blue buttons rather than a companion. Use it for other non-core actions on a page like sidebar or footer interactions.</p>
                <h2 class='rule'>Inputs</h2>
    
                <input type='submit' class='button' value='Primary'>
                <input type='submit' class='button secondary' value='Secondary'>
                <input type='submit' class='button tertiary' value='Tertiary'> <br>
                <input type='submit' class='button disabled' disabled value='Primary'>
                <input type='submit' class='button secondary disabled' disabled value='Secondary'>
                <input type='submit' class='button tertiary disabled' disabled value='Tertiary'> <br>
                <input type='submit' class='button large' value='Primary large'>
                <input type='submit' class='button secondary large' value='Secondary large'>
                <input type='submit' class='button tertiary large' value='Tertiary large'> <br>
                <input type='submit' class='button x_large' value='Primary x-large'>
                <input type='submit' class='button secondary x_large' value='Secondary x-large'>
                <input type='submit' class='button tertiary x_large' value='Tertiary x-large'>
    
                <h2 class='rule'>Buttons</h2>
    
                <button>Primary</button>
                <button class='secondary'>Secondary</button>
                <button class='tertiary'>Tertiary</button> <br>
    
                <button class='large'>Primary large</button>
                <button class='secondary large'>Secondary large</button>
                <button class='tertiary large'>Tertiary large</button> <br>

                <button class='large disabled' disabled>Primary large</button>
                <button class='secondary large disabled' disabled>Secondary large</button>
                <button class='tertiary large disabled' disabled>Tertiary large</button> <br>
    
                <button class='x_large'>Primary x-large</button>
                <button class='secondary x_large'>Secondary x-large</button>
                <button class='tertiary x_large'>Tertiary x-large</button>
    
            </div><!-- /content -->
        </section><!-- /main -->
    </div>


<?php
includeFile("footer.php");
