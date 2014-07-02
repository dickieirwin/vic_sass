<meta name="viewport" content="width=device-width, user-scalable=no">

<style type="text/css">
	html {
	    font-size: 100%;
	    -webkit-text-size-adjust: 100%;
	    -ms-text-size-adjust: 100%;
	    margin: 0;
	    padding: 0;
	    -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);
	    overflow-wrap: break-word;
	    word-wrap: break-word;
	}
	body {
	    font-family:"Segoe WP", "Nimbus Sans L", Arial, "Helvetica Neue", "Helvetica", sans-serif;
	    font-weight: 400;
	    font-size: 14px;
	    color: #444;
	    line-height: 1.5;
	    background: #fff;
	    margin: 0 auto;
	    height: 0;
	}
	p {
	    margin: 0;
	}
	fieldset {
	    border: 0;
	    padding: 1.5em 0 0;
	}
	input, textarea, select {
	    -webkit-border-radius: 0;
	    -moz-border-radius: 0;
	    -ms-border-radius: 0;
	    -o-border-radius: 0;
	    border-radius: 0;
	    border-style: solid;
	    border-width: 2px;
	    border-color: #ddd;
	}
	input {
	    display: inline-block;
	    padding: 4px 7px;
	    width: 80%;
	    font-size: 100%;
	    margin: 0;
	    vertical-align: baseline;
	}
	input:invalid, textarea:invalid {
	    background-color: #f0dddd;
	}
	.error input {
	    border-color: #cc328e;
	}
	input:focus {
	    border-color: #3468B0;
	    outline: medium none;
	}
	label, .form__field--inline>label {
	    height: 18px;
	    padding-top: 4px;
	    padding-bottom: 4px;
	    font-weight: bold;
	}
	.form_error {
	    color: #cc328e;
	    margin-top: 0.5em;
	}
	#content {
	    margin-left: auto;
	    margin-right: auto;
	    max-width: 55em;
	    width: 100%;
	}
	.highlight {
	    background-color: #eee;
	}
	.highlight_tertiary {
	    display: block;
	    padding: 3%;
	    margin-top: 1.5em;
	    margin-bottom: 1.5em;
	}
	.intro {
	    font-family:"Nimbus Roman No 9 L", "FreeSerif", "Georgia", serif;
	    color: #666;
	    font-size: 1.285em;
	    margin-bottom: 1.2em;
	}
	a.button.large:focus {
	    -moz-box-shadow: 0 0 3px 1px #ccc;
	    -webkit-box-shadow: 0 0 3px 1px #ccc;
	    box-shadow: 0 0 3px 1px #ccc;
	}
	.wifi_header_bar {
	    width: auto;
	    height: 5.75em;
	    background-color: #1d2624;
	    border-bottom: 5px solid #115737;
	    margin-top: 15%;
	    background: url(/assets/images/logo_desktop.png) no-repeat #1d2624 20px 50%;
	    background-size: 192px 48px;
	}
	.button.primary {
	    width: 33%;
	    background-color: #3468b0;
	    color: #ffffff;
	    text-align: center;
	    cursor: pointer;
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    -webkit-border-radius: 2px;
	    -moz-border-radius: 2px;
	    -ms-border-radius: 2px;
	    -o-border-radius: 2px;
	    border-radius: 2px;
	    font-size: 1.14286em;
	    font-weight: bold;
	    text-decoration: none !important;
	    white-space: nowrap;
	    border: 0 none;
	    padding: 0.35714em 0.64286em;
	    height: 1.35714em;
	    line-height: 1.3em;
	    margin-right: 0.28571em;
	    margin-top: .5em;
	    display: inline-block;
	    -webkit-box-sizing: content-box;
	    -moz-box-sizing: content-box;
	    box-sizing: content-box;
	    -webkit-transition: background-color 100ms ease-in-out;
	    -moz-transition: background-color 100ms ease-in-out;
	    -o-transition: background-color 100ms ease-in-out;
	    transition: background-color 100ms ease-in-out;
	}
	a.button.primary.large:hover {
	    background-color: #146999;
	}
	.login_form {
	    margin-top: 0;
	    padding-top: 2em;
	}
	.form_large {
	    padding-top: 3%;
	}
	.form_actions {
	    border-style: solid;
	    border-width: 1px 0 0 0;
	    border-color: #ddd;
	    padding: 1.5em 0 0;
	    margin-top: 1.5em;
	}
	.field_container {
	    margin-bottom: 1em;
	}
	.field_container>label, .field_container .form_left_col {
	    width: 30%;
	    float: left;
	}
	.field_container .field {
	    width: 67%;
	    float: right;
	}
	.field_container:after, .form_field:after, .form__field--inline:after {
	    content:"";
	    display: table;
	    clear: both;
	}
	@media all and (max-width : 990px) {
	    #content {
	        max-width: 100%;
	    }
	}
	@media all and (max-width: 759px) {
	    html {
	        background-color: #2f2f2f;
	        background-image: url(/assets/images/crest.png);
	        background-repeat: no-repeat;
	        background-position: 50% 140px;
	        background-attachment: fixed;
	        background-size: 50% auto;
	    }
	    .field_container .field {
	        width: 100%;
	        display: table;
	    }
	    .field_container {
	        margin-bottom: 0.75em;
	    }
	    .field_container .form_error {
	        margin-bottom: .5em;
	        display: table-header-group;
	    }
	    .field_container input[type="text"], .field_container input[type="password"] {
	        height: 38px !important;
	        -webkit-box-sizing: border-box;
	        -moz-box-sizing: border-box;
	        box-sizing: border-box;
	        width: 100%;
	        font-size: 15px;
	    }
	    .field.wifi {
	        width: 100%;
	    }
	    .field.wifi a {
	        display: block;
	        width: auto;
	        box-sizing: border-box;
	        height: 33px;
	        margin-right: 0;
	        margin-top: 0;
	    }
	    .entry form fieldset label {
	        display: block;
	        float: none;
	        width: auto;
	        margin: 0 0 5px 0;
	    }
	    .wifi_header_bar {
	        height: 50px;
	        margin-top: 0;
	        background-color: #1d2624;
	        background: url(/assets/images/vic-logo-mobile.png) no-repeat #1d2624 10px 60%;
	        background-size: 128px 17px;
	    }
	}
</style>

<div id='content'>
    <div class="wifi_header_bar"></div>
    <div class="entry highlight highlight_tertiary  login_form">
        <div class="intro">
            <p>Welcome to Victoria. Login with your student or staff account to access our wifi.</p>
        </div>
        <p>If you don't have a student or staff account, connect to the
            <code>Victoria_Guest</code>network for guest access.</p>
        <form class="form_large highlight" action>
            <fieldset>
                <div class="field_container">
                    <label for="user_name">User name</label>
                    <div class="field error">
                        <input type="text" name="user_name" autofocus="autofocus" required="required" tabindex="1" />
                        <p class="form_error">That username doesn't seem to be correct. Please try again.</p>
                    </div>
                </div>
                <div class="field_container">
                    <label for="password">Enter your password</label>
                    <div class="field error">
                        <input type="password" name="password" required="required" tabindex="2" />
                        <p class="form_error">That password doesn't seem to be correct. Please try again.</p>
                    </div>
                </div>
                <div class="field_container form_actions">
                    <div class="field wifi">
                        <a href="#" class="button primary large">Login</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
