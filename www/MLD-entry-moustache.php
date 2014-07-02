<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'search_page has_big_search no_section_menu no_sidebar';
$GLOBALS['_html_title'] = 'Search results page';

includeFile("MLD-header.php");

?>

    <!--<div class="big_search_fields">
        <form id="big_search_form" class="">
            <input class="" id="" autocomplete="off" type="text" value="derctor">
            <input type="submit" value="Go">
        </form>
        
    </div>-->

    <form class="big_search big_search_form" action="http://new.victoria.ac.nz/search">
        <div id="big_search_fields" class="big_search_fields">
          <label for="big_search_query" class="js_hide">Search the dictionary...</label>
          <input class="field_placeholder live_search" id="big_search_query" autocomplete="off" type="text" name="q" placeholder="Search the dictionary..." />
          <input type="submit" value="Go" id="search_btn">
        </div>
        <!-- <div class="search_filters">
          <div id="big_search_filter">
            <label for="search_everything"><input type="radio" name="site" value="global_search_collection" id="search_everything" checked=""> Everything</label>
            <label for="search_courses"><input type="radio" name="site" value="course_search_collection" id="search_courses"> Courses</label>
            <label for="search_people"><input type="radio" name="site" value="people_search_collection" id="search_people"> People</label>
          </div>
        </div> -->
    </form>

    <div id='content'>
    <section role='main' class='primary'>
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->

    <style type="text/css">
            ul p, ol p {margin: 0 0 1em;}
            .entry .mld-entry-list, .entry .mld-subentry-list {margin:0;}
            .nested_gloss {font-weight: bold; font-family: "Segoe WP", "Nimbus Sans L", Arial, "Helvetica Neue", "Helvetica", sans-serif; font-size: 14px;}
            .nested_variant {list-style-type:decimal;}
            .entry .sense,
            .entry .nested_variant {
                margin-top: 0; 
            }
            .entry .sense + .sense {
                margin-top: 1.5em;
            }
            .entry .nested_variant + .nested_variant {
                margin-top: 0.5em;
            }
            .icon.document {
                width: 20px;
                height: 22px;
                float:left;
                background: url("/assets/images/icon-document.png") no-repeat 0 0;
                background-size: 100%;
                margin-right: 0.5em;
            }
            .corpus_link {/*position:absolute;right:0;top:5em;*/color:#333!important;}
            .tm_block {position: relative;}
            .tm_link { font-style: italic;position:absolute; bottom:0.5em; right:1em;font-size:80%;}
            .mld-essay {}
            .mld-example {font-style: italic;}
            .mld-also {font-style: italic;}

           /* html body #mld-tooltip {position: absolute;margin:0;padding:0;background:#fff;
                display:none;
                position:absolute;
                padding:6px;
                padding:0.7em;
                text-shadow:0 0 1px white;
                border:1px solid #FBE5CF;
                background-color: #FDF3E9;
                color:#5b5316;
                -moz-border-radius:4px;
                -webkit-border-radius:4px;
                border-radius:4px;
                max-width: 30em;
                box-shadow: 0 0 10px 5px rgba(90, 90, 90, .3);
            }*/
            html body #mld-tooltip pre {margin:0;}

            .twitter-typeahead {
                width: 100%
            }

            .tt-dropdown-menu {
                
                background: #fff;
                box-shadow: 0 5px 10px 1px rgba(90, 90, 90, .3);
                font-size: 18px;
                color: #737373;
                left: 2px !important;
                width: 92.5%;

            }
            
            .tt-dropdown-menu strong {
                color: #444444;
            }

            .tt-suggestion {
    
                padding-left: 5px;
                padding-right: 5px;

            }

            .tt-suggestion.tt-cursor {
                background-color: rgba(0, 0, 0, 0.1);
            }
            
            .mld-source {
                
                background: url('/assets/images/menu-toggle-low.png') no-repeat;
                background-position: right center;
                padding-right: 20px;
                min-height: 16px;
            }

            .open {

                background: url('/assets/images/menu-toggle-active-low.png') no-repeat;
                background-position: right center;
            }


            


    </style>

            <div class='entry ' id="placeholder"></div><!-- /entry -->
        </section><!-- /main -->
    </div><!-- /content -->

<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/history.js/1.8/bundled-uncompressed/html4+html5/jquery.history.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.1/typeahead.jquery.js"></script>
<script>


$(function(){

    var substringMatcher = function(q, cb) {


            $.getJSON('https://vuwunicolegweb1.ods.vuw.ac.nz/lm/ncbin/public_search_lookup?q='+q+'&format=json&callback=?').done(function(data){
                        //data = $.parseJSON(data);
                        //console.log(data.uri);
                        console.log(data);

                var matches, substringRegex;
             
                // an array that will be populated with substring matches
                matches = [];
             
                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');
             
                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(data, function(i, str) {
                  if (substrRegex.test(str)) {
                    // the typeahead jQuery plugin expects suggestions to a
                    // JavaScript object, refer to typeahead docs for more info
                    matches.push({ value: str });
                  }
                });
                
                cb(matches);
                // setTimeout(function(){cb(matches)}, 3000 * Math.random());  //simulate slow bandwidth

            });

    };

$('#big_search_query').typeahead({
  hint: true,
  highlight: true,
  minLength: 3
},{
  displayKey: 'value',
  source: substringMatcher
}).on('typeahead:selected', function(e){
    console.log(e);
    $('#big_search_query').closest('form').submit();
});

// $('#big_search_query').typeahead({
//   minLength: 3,
//   highlight: true,
// },
// {
//   name: 'my-dataset',
//   source: mySource
// });

    History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
        var State = History.getState(); // Note: We are using History.getState() instead of event.state
    });


    function mldSearch(str){
        return mldOmni(str);
        $.getJSON('https://vuwunicolegweb1.ods.vuw.ac.nz/lm/freelex/publicsearch?gloss='+str+'&match=includesword&format=json&callback=?').done(function(data){
            //data = $.parseJSON(data);
            console.log(data.uri);
            console.log(data);
            render(data, $('#search-template').html());
        });
    }

    function mldEntry(str){
        //return mldOmni(str);
        $.getJSON('https://vuwunicolegweb1.ods.vuw.ac.nz/lm/freelex/publicsearch?hw='+str+'&match=includesword&format=json&callback=?').done(function(data){
            //data = $.parseJSON(data);
            console.log(data.uri);
            console.log(data);
            render(data, $('#item-template').html());
        });
    }

    function mldOmni(str){
        $.getJSON('https://vuwunicolegweb1.ods.vuw.ac.nz/lm/freelex/publicsearch?omni='+str+'&match=includesword&format=json&callback=?').done(function(data){
            console.log(data.uri);
            console.log(data);
            if (data.resulttype === 'hw') {
                render(data, $('#item-template').html());
            } else if (data.resulttype === 'gloss') {
                render(data, $('#search-template').html());
            }
        });
    }

    $('#page').on('click', 'a.mld-entry', function(e){
        var _href = $(this).attr('href');
        mldEntry(_href.split('?omni=').pop());

        History.pushState(null, null, _href);
        //document.getElementById('entry').scrollIntoView(true);
        window.scrollTo(0,0);
        e.preventDefault();
        return false;

    });

    $('#page').on('click', 'a.mld-source', function(e){
        //return false;//

        var $this = $(this);

        if ($this.hasClass('open')){
            $this.removeClass('open').closest('p').next('div').hide();
            return(false);
        }
        
        var $tooltip = $('<div id="mld-tooltip"></div>'); // = $('#mld-tooltip');
        // if (!$tooltip.length) {
        //     $tooltip = $('<div id="mld-tooltip"></div>');//.appendTo('body');

        // }
        console.log($this.data('source'));
        console.log(e);

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

        // var el = $(this),
        // pos = el.position(),
        // w = el.outerWidth(),
        // newtop = pos.top - tooltip.outerHeight() ,
        // newleft = pos.left + (w/2) - (tooltip.outerWidth()/2);


        $tooltip.insertAfter($this.closest('p')).html(Mustache.render($('#tooltip-template').html(), _data)).addClass('highlight highlight_secondary').show();

        $this.addClass('open');

        e.preventDefault();
        return false;

    });

    //$('.mld-source').after('<div class="toggle"></div>');

    $('#big_search_query').closest('form').submit(function(e){
    //$('#search_btn').click(function(e){
        mldSearch($('#big_search_query').val());
        e.preventDefault();
        return false;
    });

    // window.addEventListener("popstate", function(e) {
    //     console.info(location.pathname);
    //     mldEntry(location.pathname.split('?omni=').pop());
    // });


     mldOmni('tikanga');
    //mldSearch('property');

    function translate(_data){
        var ONLY_ONE_EXAMPLE_PER_ENTRY = true;

        (_data.headword.filter ? _data.headword : [_data.headword]).map(function(_headword){
            var _groupedEntries = []; //_groupedEntries[1] is array of all entries w/ majsense==1...
            var _rootEntries = []; //either majsense

            _headword.entry = (_headword.entry.filter ? _headword.entry : [_headword.entry]).map(function(_entry){

                //usage CUST HIST MID CONT OBS should be provided as an array
                if (_entry.USAGE){
                    _entry.USAGE = _entry.USAGE.toUpperCase().split('/');
                }

                //only one approved example per entry
                //todo: data.headword.entry.examples=[...]
                if (ONLY_ONE_EXAMPLE_PER_ENTRY && _entry.EXAMPLES && _entry.EXAMPLES.example) {
                    _entry.EXAMPLES.example = [_entry.EXAMPLES.example[0]];
                }

                return _entry;

            });

            _headword.entry.filter(function(_entry){
                return _entry.hasOwnProperty('phrasalvariant');
            }).forEach(function(_entry, index, array){
                //_data.headword.entry.find()
                if (!_groupedEntries[_entry.majsense]){
                    _groupedEntries[_entry.majsense] = [];
                }
                _groupedEntries[_entry.majsense].push(_entry);
            });

            _headword.entry = _headword.entry.filter(function(_entry){
                return !_entry.hasOwnProperty('phrasalvariant');
            });

            _headword.entry.forEach(function(_entry, index, array){
                //_data.headword.entry.find()
                if (_groupedEntries[_entry.majsense]) {
                    //jesus, "subentry" is actually a field on some headwords, like "kaupapa here"
                    //_entry.subentry = _groupedEntries[_entry.majsense];
                    _entry.apimocksubentry = _groupedEntries[_entry.majsense];
                }
            });

            _headword.whakamaramatanga = _headword.entry[0].whakamaramatanga || '';

            return _headword;

        });
        
        return _data;
    }

    function rerender(_data){

        render(_data, $('#item-template').html());

    }


    function render(_data, _template){
        //_data = translate(_data);
        //console.info(JSON.stringify(_data));
        console.info(_data);
        var partials = {
            'major-sense-template': $('#major-sense-template').html(),
            'major-sense-search-template': $('#major-sense-search-template').html(),
            'minor-sense-template': $('#minor-sense-template').html(),
            'sense-template': $('#sense-template').html()
        };
        var output = Mustache.render(_template, _data, partials);
        $('#placeholder').html(output);   
    }


});


</script>

<script type="text/template" id="sense-template">
    <h3>
    {{#phrasalvariant.length}}
        {{&phrasalvariant}} 
    {{/phrasalvariant.length}}

    <b class="nested_gloss">{{&gloss}}</b>

    {{#usage.length}}
        {{#usage}}
        <a class="course_flag flag_pending" href="#">{{.}}</a>
        {{/usage}}
    {{/usage.length}}
    </h3>

    {{#example}}
    <p class="mld-example">{{{content}}}<a href="#{{source}}" class="mld-source" data-source="{{source}}">[{{source}}]</a></p>
    {{/example}}

    {{#essay.length}}
    <p class="mld-essay">{{essay}}</p>
    {{/essay.length}}

    {{#seealso.refentry.length}}
    <p class="mld-also">See also
    {{#seealso.refentry}}
    <a class="mld-entry" href="?omni={{content}}">{{content}}</a>, 
    {{/seealso.refentry}}
    </p>
    {{/seealso.refentry.length}}
</script>


<script type="text/template" id="major-sense-template">
    {{> sense-template}}

    {{#subentry.length}}
    <ul class="mld-subentry-list">
    {{#subentry}}
        <li class="nested_variant">
            {{> minor-sense-template}}
        </li>
    {{/subentry}}
    </ul>
    {{/subentry.length}}
</script>

<script type="text/template" id="minor-sense-template">
    {{> sense-template}}
</script>

<script type="text/template" id="minor-sense-template-bak">
    <h3>{{&phrasalvariant}} <b class="nested_gloss">{{gloss}}</b></h3>
    {{#example}}
    <p class="mld-example">{{{content}}}<a href="#{{source}}" class="mld-source" data-source="{{source}}">[{{source}}]</a></p>
    {{/example}}
    <p class="mld-essay">{{essay}}</p>

    {{#seealso.refentry.length}}
    <p class="mld-also">See also
    {{#seealso.refentry}}
    <a class="mld-entry" href="?omni={{content}}">{{content}}</a>, 
    {{/seealso.refentry}}
    </p>
    {{/seealso.refentry.length}}
</script>



<script type="text/template" id="item-template">
{{#headword}}

    <h1 name="{{&name}}">{{&name}}</h1>

    <!-- <a href="#" class="button large transparent right"><span class="icon document"></span>Find in corpus</a> -->

    {{#whakamaramatanga.length}}
    <div class="highlight highlight_secondary tm_block">{{&whakamaramatanga}}
    <a href="#" class="tm_link">Source: Te Matapunenga</a>
    </div>
    {{/whakamaramatanga.length}}

    <ol class="senses course_page mld-entry-list">

    {{#entry}}
    <li class="sense">
    {{> major-sense-template}}
    </li>
    {{/entry}}
    </ol>
            
{{/headword}}
</script>




<script type="text/template" id="search-template">

<p>Showing results 1 - {{count}} of {{count}} results</p>

<ul class="search_results">
{{#headword}}
    <li class="result result_web">
        <!--<h3 class="result_title"><a href="?omni={{&name}}" class="mld-entry">{{&name}}</a></h3>-->
            

            <!--<ol class="senses course_page mld-entry-list">-->
{{#entry}}
                <!--<li class="sense">-->
{{> major-sense-search-template}}
                <!--</li>-->
{{/entry}}
            <!--</ol>-->
            
{{/headword}}
</ul>
</script>

<script type="text/template" id="major-sense-search-template">

<h4 class="result_titlea"><a href="?omni={{&name}}" class="mld-entry">{{&name}}</a><b class="nested_gloss">{{&gloss}}</b></h4>
<!--<h4><a href="?omni={{&gloss}}" class="mld-entry">{{&gloss}}</a></h4>-->
                    {{#example}}
                    <p class="mld-example">{{{content}}}<!--<a href="#{{source}}" class="mld-source" data-source="{{source}}">[{{source}}]</a>--></p>
                    {{/example}}

                    {{#subentry.length}}
                    <ul class="mld-subentry-list">
                    {{#subentry}}
                        <li class="nested_variant">
                            {{> minor-sense-template}}
                        </li>
                    {{/subentry}}
                    </ul>
                    {{/subentry.length}}
</script>

<script type="text/template" id="minor-sense-template">
                    <h3>{{&gloss}} <b class="nested_gloss">{{phrasalvariant}}</b></h3>
                    <!--<h3><b class="nested_gloss">{{gloss}}</b> {{&phrasalvariant}}</h3>-->
                    {{#example}}
                    <p class="mld-example">{{{content}}}<a href="#{{source}}" class="mld-source" data-source="{{source}}">[{{source}}]</a></p>
                    {{/example}}
                    <p class="mld-essay">{{essay}}</p>

                    {{#seealso.refentry.length}}
                    <p class="mld-also">See also
                    {{#seealso.refentry}}
                    <a class="mld-entry" href="?omni={{content}}">{{content}}</a>, 
                    {{/seealso.refentry}}
                    </p>
                    {{/seealso.refentry.length}}
</script>


<script type="text/template" id="tooltip-template">
<pre>"{{title}}", {{startdate}}{{#finishdate}}-{{finishdate}}{{/finishdate}}, {{writer}}
{{description}}
<!--{{fakeid}}-->
<em>{{doctypeid}}, {{workmodeid}}</em>
<!--{{idkeyid}}-->
{{extract}}

<a href="#">Full text &gt;&gt;</a>

</pre>
</script>

<?php
includeFile("MLD-footer.php");
