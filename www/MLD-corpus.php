<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'no_section_menu no_sidebar';
$GLOBALS['_html_title'] = 'Corpus';

includeFile("header.php");

?>

    <!--<div class="big_search_fields">
        <form id="big_search_form" class="">
            <input class="" id="" autocomplete="off" type="text" value="derctor">
            <input type="submit" value="Go">
        </form>
        
    </div>-->

    <!-- <form class="big_search_form" action="http://new.victoria.ac.nz/search">
        <div id="big_search_fields" class="big_search_fields">
          <label for="big_search_query" class="js_hide">Search Victoria</label>
          <input class="field_placeholder live_search" id="big_search_query" autocomplete="off" type="text" name="q" placeholder="Search Victoria" value="Search Victoria">
          <input type="submit" value="Go">
        </div>
        <div class="search_filters">
          <div id="big_search_filter">
            <label for="search_everything"><input type="radio" name="site" value="global_search_collection" id="search_everything" checked=""> Everything</label>
            <label for="search_courses"><input type="radio" name="site" value="course_search_collection" id="search_courses"> Courses</label>
            <label for="search_people"><input type="radio" name="site" value="people_search_collection" id="search_people"> People</label>
          </div>
        </div>
    </form> -->

    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->
        <div class='entry '>

            <style type="text/css">
            .nested_gloss {font-weight: normal; font-family: "Segoe WP", "Nimbus Sans L", Arial, "Helvetica Neue", "Helvetica", sans-serif; font-size: 14px; margin-left:0.5em;}
            .nested_variant:before
                {
                    /*content: '\021B3';*/
                }
            .entry .sense, .entry .nested_variant {
                margin-bottom: 2em;
            }
            .icon.document {
                width: 20px;
                height: 22px;
                float:left;
                background: url("/assets/images/icon-document.png") no-repeat 0 0;
                background-size: 100%;
                margin-right: 0.5em;
            }
            .corpus_link {position:absolute;right:0;top:5em;color:#333!important;}
            .tm_block {position: relative;}
            .tm_link { font-style: italic;position:absolute; bottom:0.5em; right:1em;font-size:80%;}

            .filter-control {
                position: relative;
                z-index: 101;
                float: left;
                width: auto;
                height: 48px;
                padding: 0;
                margin: 0 20px 0 0;
                border: none;
                font-size: 1.2em;
            }

            .filter-button {
                position: relative;
                display: block;
                width: auto;
                height: 32px;
                padding: 0 25px 0 10px;
                margin: 0;
                border: 2px solid #c0c0c9;
                background-color: #dcdce2;
                color: #444444;
                font-size: 1.1em;
                font-weight: bold;
                line-height: 32px;
            }

            .filter-control.show .filter-button {
                height: 46px;
                border: 2px solid #c0c0c9;
                border-bottom: none;
                background-color: #FFFFFF;
            }

            .filter-control .filter-button:hover {
                background-color: #FFFFFF;
            }

            .filter-control .filter-button .caret {
                position: absolute;
                top: 14px;
                right: 5px;
                display: block;
                width: 0;
                height: 0;
                border-left: 6px solid transparent;
                border-right: 6px solid transparent;
                border-top: 6px solid #444444;
                border-left-width: 6px;
                border-right-width: 6px;
                border-top-width: 6px;
            }

            .filter-control.show .filter-button .caret {
                position: absolute;
                top: 14px;
                right: 5px;
                display: block;
                width: 0;
                height: 0;
                border-left: 6px solid transparent;
                border-right: 6px solid transparent;
                border-bottom: 6px solid #444444;
                border-left-width: 6px;
                border-right-width: 6px;
                border-bottom-width: 6px;
                border-top-width: 0;
            }

            .filter-control > ul {
                display: none;
            }

            .filter-control.show > ul {
                display: block;
                position: absolute;
                left: 0;
                top: 46px;
                z-index: -1;
                height: auto;
                max-height: 300px;
                width: 400px;
                padding: 3px;
                background-color: #FFFFFF;
                border: 2px solid #c0c0c9;
                -moz-box-shadow: 0 3px 3px rgba(0,0,0,.3);
                -webkit-box-shadow: 0 3px 3px rgba(0,0,0,.3);
                box-shadow: 0 3px 3px rgba(0,0,0,.3);
                overflow-y: scroll;
                font-size: 0.8em;
                margin-top:0;
            }

            .filter-control li {
                line-height: 2.0em;
                padding: 0.4em 0 0.4em 0.1em!important;
                margin-bottom:0.1em!important;
            }

            .filter-control > ul > li {
                text-indent: 5px;
                background-color: #efeff0;
            }

            /*#category-filter-controls > ul > li {
                background-color: #C8C7CB;
                text-indent: 5px;
            }

            #category-filter-controls > ul > li > ul > li {
                background-color: #d4d3d6;
                text-indent: 15px;
            }

            ##category-filter-controls > ul > li > ul > li > ul > li {
                background-color: #e1e0e2;
                text-indent: 30px;
            }

            #category-filter-controls > ul > li > ul > li > ul > li > ul > li {
                background-color: #efeff0;
                text-indent: 45px;
            }

            #category-filter-controls > ul > li > ul > li > ul > li > ul > li > ul > li {
                background-color: #fefefe;
                text-indent: 60px;
            }*/

            .filter-control input {
                vertical-align: middle;
            }

            .filter-control label {
                display: inline;
                font-weight: normal;
            }

            .filter-control > ul > li > label {
                font-weight: bold;
            }

            .filters {margin-bottom:0;}
            .events_search_field {margin-top:0!important;}

            .filter-button.disabled {opacity:0.5;}

            .entry .facet_links {
                float:left;
                clear: both;
                padding:0;
                margin:0;
            }

            .entry .facet_links--inverted li {
                margin-bottom: 0;
            }

            .entry .facet_links--inverted li a {
                background-color: #fff;
                border: 1px solid #c0c0c9;
                padding:0 0.5em 0 0;
                margin-bottom: 0.2em;
                color: #444;
            }

            .entry .facet_links--inverted li a.selected:before {
                content:"\00d7";
                font-weight: bold;
                padding:0.2em 0.5em;
                background-color: #c0c0c9;
                color: #444;
                margin-right: 0.5em;
            }

            </style>

            
                
                <form id="page_calendar_events_search_169320" method="get" action="" class="form_large">
                
                <div class="filters highlight_tertiary toggle toggle_all_sizes">
                    <h2 class="block_caps">Search options</h2><span class="ui_toggle_arrow"></span>
                    <div class="toggle_block">
                        

                        <fieldset>
                            
                            <!-- <h3 class="rule rule--light rule--thin">Documents</h3> -->
                            <h5>Documents in Corpus</h5>

                                    <div id="" class="filter-control">

                                        <a href="#" id="category-filter-button" class="filter-button" title="Select categories to filter the markers by. ">Document type <span class="caret"></span></a>
                                        
                                                
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-178977" value="178977" > <label for="category-check-178977">A document type (34)</label>
                                                              
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-178977" value="178977" checked="checked"> <label for="category-check-178977">Church texts (28)</label>
                                                              
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" > <label for="category-check-179738">A document type (2)</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" > <label for="category-check-179738">A document type (0)</label>
                                            </li>                                            
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" > <label for="category-check-179738">A document type (12)</label>
                                            </li>                                                                                 
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" checked="checked"> <label for="category-check-179738">Treatises (97)</label>
                                            </li>



                                             
                                        </ul>

                                    </div>

                                    <div id="" class="filter-control">

                                        <a href="#" id="category-filter-button" class="filter-button disabled" title="Select categories to filter the markers by. ">Documents <span class="caret"></span></a>
                                        
                                                
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-178977" value="178977" checked="checked"> <label for="category-check-178977">Placenames</label>
                                                              
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" checked="checked"> <label for="category-check-179738">History</label>
                                            </li>

                                             
                                        </ul>

                                    </div>
                                
                           
                                
                            
                        </fieldset>
                        
                        <fieldset>
                            
                            <h5>Time period of Corpus texts</h5>
                            
                            <div class="columns columns2">
                                <div class="col">
                                    <label for="from" class="form__label--block">From</label>
                                    <select id="from" class="">
                                        <option>Select year...</option>
                                        <option>1800</option>
                                    </select> 
                                </div>

                                <div class="col">
                                    <label for="to" class="form__label--block">To</label>
                                    <select id="to" class="">
                                        <option>Select year...</option>
                                        <option>1900</option>
                                    </select> 
                                </div>  
                            </div>  
                                
                        </fieldset>

                        <fieldset>
                            
                                   

                            <div class="columns columns2">
                                <div class="col">
                                    <h5>Writer</h5>
                                    <input type="text" placeholder="Writer contains..." class=""> 

                                </div>

                                <div class="col">
                                    <h5>Major text category</h5>

                                    <div id="" class="filter-control">

                                        <a href="#" id="category-filter-button" class="filter-button" title="Select categories to filter the markers by. ">Category <span class="caret"></span></a>
                                        
                                                
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-178977" value="178977" > <label for="category-check-178977">Crown language (34)</label>
                                                              
                                            </li>
                                            
                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" > <label for="category-check-179738">Community (2)</label>
                                            </li>

                                            <li>
                                                <input type="checkbox" name="category-check" id="category-check-179738" value="179738" > <label for="category-check-179738">Statute language (2)</label>
                                            </li>
                                            
                                             
                                        </ul>

                                    </div>

                                    <ul class="facet_links  facet_links--inverted">
                                        <li><a class="selected" href="?q=filter">Crown language</a></li>
                                        <li><a class="selected" href="?q=filter">Language of Maori governing bodies</a></li>
                                    </ul>

                                </div>  
                            </div>  

                                   
                        </fieldset>

                        
                        
                    
                    </div>
                
                   

                </div>

                <div class="highlight_tertiary events_search_field big_search_fields">
                    
                    <div class="big_search_form">
                        <input class="" id="" autocomplete="off" type="text" value="" placeholder="Enter search term..." >
                        <input type="submit" value="Go">
                    </div>
                    
                </div>
                      
                    

            </form>


			
            
        </div><!-- /content -->
    </section><!-- /main -->
    </div>

    <script type="text/javascript">

    /* Filter button click */
        $('.filter-button').click(function(e) {
            e.preventDefault();
            var $parent = $(this).parent();
            
            /* Show correct filter panel and hide any other visible panels */
            $parent.toggleClass('show').siblings('.show').removeClass('show');
        });

    </script>
<?php
includeFile("footer.php");
