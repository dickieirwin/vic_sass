<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'search_page has_big_search no_section_menu no_sidebar';
$GLOBALS['_html_title'] = 'Search results page';

includeFile("MLD-header.php");

?>

<style type="text/css">

    /*--------Setting width wider for larger screen sizes-------*/
    .no_section_menu #page.corpus_width_large {
        max-width: 100em;

    }

    #page.corpus_width_large {
        padding-left: 1%;
        padding-right: 1%;

    }
    
    .no_sidebar #content.corpus_width_large {
        max-width: 100em;
        padding-top: 1em;
    }

    /*--------Styling the big search in the large width space-------*/
    #page .big_search {
        max-width: 70em;
        margin-right: auto;
        margin-left: auto;
    }
    .search_page #page .big_search_form .big_search_fields {
        width: 80%;
        

    }



    /*---------Button styling----------*/

    .search_results .button {
        display: inline-block;
    }
    
    .corpus_link {
        float: right;
        top: -0.85em;
        position: relative;
    }
 
    
    /*----Table styling------------------*/
    .corpus_results {
        table-layout: fixed;
        width: 100%;
        border: 1px solid #ddd;
        margin: 0;
        padding: 5px;
    }

    .corpus_result:nth-of-type(even) {
        background: #eeeeee;
    }
    
    .corpus_result:hover {
        background-color: lightblue;
        transition: background-color 0.3s 0 ease-in-out;
    }



    .mld_result_link{
        width: 8%;
        white-space: nowrap;         /* force single line */
    }

   .mld-tooltip {
        background-color: palegreen;
   }

    .mld-tooltip td {
        padding: 5px;
   }


    .date {
        width: 8%;
        white-space: nowrap;         /* force single line */
    }

    .main_word {
        text-align: center;
        width: auto;
        white-space: nowrap;

    }

    .pre_collocate {                /*for the over flow text*/
        width: 35%;
    }

     .pre_collocate p {                /*for the over flow text*/
        -o-text-overflow:  clip;  /* Opera */
        text-overflow:   ellipsis clip;     /* IE, Safari (WebKit) */
        overflow: hidden;            /* don't show excess chars */
        white-space: nowrap;         /* force single line */
        direction: rtl;
    }

     .post_collocate {
        width: 35%;
    }


    .post_collocate p {                /*for the over flow text*/
        -o-text-overflow: ellipsis;  /* Opera */
        text-overflow: ellipsis;     /* IE, Safari (WebKit) */
        overflow: hidden;            /* don't show excess chars */
        white-space: nowrap;         /* force single line */
    }




</style>

<form class="big_search big_search_form" action="http://new.victoria.ac.nz/search">
    <div id="big_search_fields" class="big_search_fields">
        <label for="big_search_query" class="js_hide">Search the dictionary...</label>
        <input class="field_placeholder live_search" id="big_search_query" autocomplete="off" type="text" name="q" placeholder="Search the dictionary..." />
        <input type="submit" value="Go" id="search_btn">
    </div>
</form>

<div id='content' class='corpus_width_large'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a>
            </li>
        </ul>

        <div class='' id="placeholder">

        </div>
        <!-- /entry -->
    </section>
    <!-- /main -->
</div>
<!-- /content -->



<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/history.js/1.8/bundled-uncompressed/html4+html5/jquery.history.js"></script>
<script type="text/javascript">"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"</script>
<script>
$(function() {



    (function render(_data, _template) {
        //_data = translate(_data);
        //console.info(JSON.stringify(_data));
        console.info(_data);
        var partials = {
            //'corpus-results-template': $('#corpus-results-template').html()
        };
        var output = Mustache.render(_template, _data, partials);
        $('#placeholder').html(output);
    })({
        "results": {
            "start": "1",
            /*named for consistency with dictionary search API*/ "count": "100",
            "totalhits": "24774",
            "samplerate": "1",
            "fakeloop": (function(count) {
                var _ = [];
                for (; count-- > 0;) {
                    _.push(count)
                };
                return _;
            })(100),
            /*:)*/ "matches": [{
                "meta": { /*named for consistency w/ document metadata API*/
                    "dictcode": "BIM1517",
                    "startdate": "1898",
                    /*the following two are present in the UI mockups but
                      not in current freelex search, should we do more/less? */
                    "title": "Native Lands Frauds Prevention Act...",
                    "description": "Native Lands Frauds Prevention Act...",
                },
                "context": {
                    "pre": 'Tenderloin shoulder salami landjaeger ham hock ground round short loin spare ribs capicola t-bone venison brisket leberkas.',
                    /*"left" part of context*/ "term": "tikanga",
                    "post": "Tenderloin shoulder salami landjaeger ham hock ground round short loin spare ribs capicola t-bone venison brisket leberkas. " /*"right" part of context*/
                }
            } /*, {...more results...}*/ ]
        },
        "summary": {
            "forms": [{
                "form": "Tikanga",
                "count": "1343"
            } /*, {...more observed forms...}*/ ],
            "lcep": [ /*"left collocates excluding particles"*/ {
                "word": "raro",
                "freq": "2567",
                "salience": "10426.200"
            } /*, {...more words...}*/ ],
            "lcip": [ /*same syntax as lcep*/ ],
            "rcep": [ /*ditto*/ ],
            "rcip": [ /*...*/ ]
        }
    }, $('#corpus-results-template').html());


});


</script>


<script type="text/javascript">


    // var $this = $('.mld_result_link');
    // $('.mld_result_link').insertAfter($(this).closest('tr')).html('<tr>test</tr>').addClass('open').show();

      


     $('#page').on('click', '.mld_result_link', function(e){

        var $this = $(this);

        if ($this.hasClass('open')){
            $this.removeClass('open').closest('tr').next('tr').hide();
            return(false);
        }

        var $tooltip = $('<tr class="mld-tooltip"></tr>');

        var _data = {
            "fakeid": $this.data('source'),
            "url":"https://vuwunicolegweb1.ods.vuw.ac.nz/lm/freelex/dbcbrowse?wid=338",
            "extract":"Lorem Ipsum Ā, ki taku whakaaro e hē ana te tuku ohorere mai o tēnei Pire ki te Whare i te mea kāhore anō ngā tāngata e pāngia ana e tēnei Ture [kia] mātau noa ki ōna tikanga...",
            "wid":"338", /*no need for "url" if documents are all hosted internally*/
            "dictcode":"Mc39-51",
            "idkeyid":"Donald McLean (Speeches, letters etc) ",
            "number":"1",
            "categoryid":"02 - Maori community generated language",
            "startdate":"1839",
            "finishdate":"1851",
            "doctypeid":"Correspondence",
            "title":"Donald McLean Letters",
            "description":"Letters from Māori to Native Minister Donald McLean ",
            "workmodeid":"Various items with more than one mode",
            "writer":"various",
            "pages":"510",
            "words":"95106",
            "sendtoetc":" ",
            "permittedvocab":"YES",
            "copyrightpermission":"YES",
            "nzetctitle":" ",
            "digitisationfile":"McLLett"
        };


        $tooltip.insertAfter($this.closest('tr')).html(Mustache.render($('#tooltip-template').html(), _data)).show();

        $this.addClass('open');

        e.preventDefault();
        return false;

    });


</script>

<script type="text/template" id="tooltip-template">
<td colspan="5">"{{title}}", {{startdate}}{{#finishdate}}-{{finishdate}}{{/finishdate}}, {{writer}}
{{description}}
<!--{{fakeid}}-->
<em>{{doctypeid}}, {{workmodeid}}</em>
<!--{{idkeyid}}-->
{{extract}}

<a href="#">Full text &gt;&gt;</a>

</td>
</script>

<script type="text/template" id="corpus-results-template">


{{#results}}
    <p class="left">Showing results {{start}} - {{count}} of {{totalhits}} results</p>

    <a href="#" class="button tertiary  corpus_link">View results alphabetically</a>
    <a href="#" class="button tertiary  corpus_link">View results by Year</a>


    
<table width="100%" class="corpus_results"  border="0" cellspacing="0" cellpadding="0" >
    {{#fakeloop}} {{#matches}}
    <tr class="corpus_result">
        <td class="mld_result_link">
            <a href="#">{{meta.dictcode}}</a>
        </td>
        <td class="date">
            <p>{{meta.startdate}}</p>
        </td>
        <td class="pre_collocate">
            <a href="mld-entry.php">
                <p>{{context.pre}}</p>
            </a>

        </td>
        <td class="main_word">
            <a href="mld-entry.php">
                <mark>{{context.term}}</mark>
            </a>

        </td>
        <td class="post_collocate">
            <a href="mld-entry.php">
                <p>{{context.post}}</p>
            </a>

        </td>
    </tr>
    {{/matches}} {{/fakeloop}}
</table>


{{/results}}

</script>



<?php
includeFile("MLD-footer.php");
