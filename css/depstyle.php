<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

?>

body {
    padding: 0px 10px 0px 10px;
	font-family: ;
}

body.night {background-color: #212121; transition: 1s;}
body.day {background-color: #f5f5f5; transition: 1s;}

.container {
    text-align: center;
    padding: 0px !important;
}

td {
    text-align: left;
}

form {
    margin: 20px auto;
}

h1 {
    font-size: 2.4em;
    font-weight: bold;
}
h1.night {color: #ffffff; transition: 1s;}
h1.day {color: #212121; transition: 1s;}

h2 {
    font-size: 1.8em;
    font-weight: bold;
}
h2.night {color: #ffffff; transition: 1s;}
h2.day {color: #212121; transition: 1s;}

h3 {
    font-size: 1.4em;
    font-weight: normal;
    line-height: 1.6em;
}
h3.night {color: #ffffff; transition: 1s;}
h3.day {color: #212121; transition: 1s;}

h4.night {color: #ffffff; transition: 1s;}
h4.day {color: #212121; transition: 1s;}

p.night {color: #ffffff; transition: 1s;}
p.day {color: #212121; transition: 1s;}

hr {
    border-top: 1px solid black;
}

/* NAVBAR START */

#logo {
    width: 180px;
    height: 40px;
    background-repeat: no-repeat;
    background-position: left top;
    display: inline-block;
    margin: 10px auto 0px auto;
}
#logo.night {background-image: url(http://fireandrescue.webelevate.net/img/logo_black.svg); transition: 1s;}
#logo.day {background-image: url(http://fireandrescue.webelevate.net/img/logo_white.svg); transition: 1s;}

.navbar-inverse.night {background-color: #212121; border: 1px solid #212121; transition: 1s;}
.navbar-inverse.day {background-color: #ffffff; border: 1px solid white; transition: 1s;}


.navbar-header {
    float: none;
    padding: 20px;
}
.navbar-header.night {border: 0px solid #212121; transition: 1s;}
.navbar-header.day {border: 0px solid #ffffff; transition: 1s;}


@media only screen and (max-width: 479px) {
    .navbar-header {
    padding: 10px;
    }
}

.navbar-toggle {
    display: inline-block;
    border: 0px;
    margin: 12px 0px 0px 0px;
}
.navbar-toggle.night {background-color: #212121 !important; transition: 1s;}
.navbar-toggle.day {background-color: #ffffff !important; transition: 1s;}

.navbar-collapse.collapse {
    display: none!important;
    border: solid 1px #ffffff;
}

.nav-center {
    text-align: center;
}

.navbar-nav {
    float: none!important;
    font-size: 1.2em;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden;
}

.navbar-nav > li {
    float: none;
    height: 50px !important;
}
.navbar-nav.day > li {border: 1px solid white; transition: 1s;}
.navbar-nav.night > li {border: 1px solid #212121; transition: 1s;}

.navbar-nav > li > a {
    padding-top: 15px !important;
    padding-bottom: 15px !important;
}
.navbar-nav.day > li > a {color: #5a5a5a !important; transition: 1s;}
.navbar-nav.night > li > a {color: #ffffff !important; transition: 1s;}

.navbar-nav.day a:hover {background-color: #f2f2f2 !important;}
.navbar-nav.night a:hover {background-color: #5c5c5c !important;}

.navbar-collapse.collapse.in {
    display: block !important;
}

.navbar-collapse {
    padding: 0px;
    border: 0px solid white !important;
}

.back_button {
    width: 45px;
    margin-top: 5px;
}
.collapse {
    border: 0px !important;
}

.icon-bar.day {background-color:#212121 !important; transition: 1s;}
.icon-bar.night {background-color:#ffffff !important; transition: 1s;}

.custom.day {background-color: #f8f8f8;  transition: 1s;}
.custom.night {background-color: #2a2a2a;  transition: 1s;}

.li-switch {
    padding-top: 11px;
}
.li-switch.day {color: #212121; transition: 1s;}
.li-switch.night {color: #ffffff; transition: 1s;}

/* NAVBAR END */

/* BUTTONS STYLING */

.btn {
    border-radius: 0px;
    padding: 20px 30px 20px 30px;
    font-weight: bold;
    margin: 30px auto 0px auto;
    /* min-width: 400px; */
    color: white;
    border: none;
    min-width: 290px;
}
.btn.day {box-shadow: 5px 5px 5px #9d9d9d;}
.btn.night {box-shadow: 5px 5px 5px #000000;}

.btn:hover, .btn:focus, btn:active {
    color: white;
    transition: 0.3s ease-in-out;
}
.btn.day:hover, .btn:focus, btn:active {box-shadow: 7px 8px 10px #9d9d9d;}
.btn.night:hover, .btn:focus, btn:active {box-shadow: 7px 8px 10px #000000;}

.btn-raise-incident {
    background-color: #e12031;    
    margin: 30px auto;
}
.btn-raise-incident:hover {
    background-color: #f42638;    
}
.btn-submit {
    background-color: #21a1ff;    
    border-radius: 0px;
    min-width: inherit;
}
.btn-submit:hover, .btn-submit:focus, .btn-submit:active {
    background-color: #50b5ff;
    color: white;
}

.btn-send-message {
    background-color: #e12031;    
}
.btn-send-message:hover {
    background-color: #f42638;    
}
.btn-check-resources {
    background-color: #207c49;
}
.btn-check-resources:hover {
    background-color: #259156;
}
.btn-request-by-ves {
    background-color: #e12031;
}
.btn-request-by-ves:hover {
    background-color: #f42638;
}
.btn-request-by-incident {
    background-color: #1765a3;
}
.btn-request-by-incident:hover {
    background-color: #1f76bc;
}
.btn-request-by-resource {
    background-color: #207c49;    
}
.btn-request-by-resource:hover {
    background-color: #259156;    
}
.btn-request-by-ability {
    background-color: #811e54;    
}
.btn-request-by-ability:hover {
    background-color: #952562; 
}

/* BUTTONS STYLING END */

.glyphicon-alert {color: orange;}

.request-assistance-icon {
    margin-top: 30px;
}

.request {
    padding: 20px 0px 20px 0px;
}

.glyphicon-alert {
    margin-bottom: 10px;    
}

.table-incidents {
    margin-top: 20px;
    font-family: 'Roboto', 'Arial', sans-serif;
}
.table-incidents.day {border: 1px solid white; transition: 1s;}
.table-incidents.night {border: 1px solid #212121; transition: 1s;}

.table-incidents > thead > tr > th {
    border: none;
    padding: 15px 7px;
}
.table-incidents.day > thead > tr > th {color: #212121; background-color: #ffffff; transition: 1s;}
.table-incidents.night > thead > tr > th {color: #ffffff; background-color: #434343; transition: 1s;}

.table-incidents > tbody > tr:nth-child(odd) > td, 
.table-incidents > tbody > tr:nth-child(odd) > th  {
    padding: 15px 7px !important;
    border: none;
}
.table-incidents.day > tbody > tr:nth-child(odd) > td, 
.table-incidents.day > tbody > tr:nth-child(odd) > th  {background-color: #f0f0f0; color: #212121; transition: 1s;}
.table-incidents.night > tbody > tr:nth-child(odd) > td, 
.table-incidents.night > tbody > tr:nth-child(odd) > th  {background-color: #383838; color: #ffffff; transition: 1s;}

.table-incidents > tbody > tr:nth-child(even) > td, 
.table-incidents > tbody > tr:nth-child(even) > th  {
    padding: 15px 7px !important;
    border: none;
}
.table-incidents.day > tbody > tr:nth-child(even) > td, 
.table-incidents.day > tbody > tr:nth-child(even) > th  {background-color: #f7f7f7; color: #212121;}
.table-incidents.night > tbody > tr:nth-child(even) > td, 
.table-incidents.night > tbody > tr:nth-child(even) > th  {background-color: #505050; color: #ffffff;}


.table-incidents a {text-decoration: underline;}
.table-incidents.day a {color: #0645AD; transition: 1s;}
.table-incidents.night a {color: #fff500; transition: 1s;}

.table-resources > tbody > tr:nth-child(even) > td, 
.table-resources > tbody > tr:nth-child(even) > th  {
    padding: 1px 15px !important;
}

.inner-table {
    margin: 10px auto;
}

.incident_status {
    background-color: #f8f8f8;
    padding: 20px 0px 20px 0px;
}

.bell {
    width: 40px;
    height: 37px;
    background-repeat: no-repeat;
    display: block;
    margin: 25px auto 0px auto;
}
.bell.night {background:url(../request_assistance_icon.svg); transition: 1s;}
.bell.day {background:url(../request_assistance_icon_black.svg); transition: 1s;}

.incident_details {
    padding: 20px 0px 20px 0px;
}

.incident_details h4 {
	font-size: 1.2em;
}

.incident_details p {
	font-size: 1em;
}

.unread {
    font-weight: bold;
}
.pra {
    font-weight: normal;
    font-style: italic;
}
.message_body {
    text-align: left;
    padding: 0 25px;
}
.message {
    margin: 10px auto;
}

.message > tbody > tr:nth-child(odd) > td, 
.message > tbody > tr:nth-child(odd) > th  {
    background-color: #4d4d4d;
    color: #212121;
    padding: 25px 5px 25px 10px;
    border: none;
    font-weight: bold;
}

.message > tbody > tr:nth-child(even) > td, 
.message > tbody > tr:nth-child(even) > th  {
    color: #212121;
    background-color: #363636;
    padding: 25px 5px 25px 10px;
    border: none;
}

/* RAISE INCIDENT */

.form-group {
    margin: 25px auto;
}

.form-control {
    padding: 20px 10px;
    border-radius: 0px;
    width: 100%;
}

.form_control option {
    padding: 20px 10px;
}

.form-control.day {color: #4d4d4d !important;
    background-color: #ffffff; transition: 1s;}
.form-control.night {color: #ffffff !important;
    background-color: #4d4d4d !important; transition: 1s;}

label {
    color: #212121;
    font-size: 1.2em;
    font-weight: normal;
}

input[type="checkbox"] {
    display:none;
}
input[type="checkbox"] + label span {
    display:inline-block;
    width:50px;
    height:50px;
    margin:-2px 20px 0 0;
    vertical-align: middle;
    background:url(http://fireandrescue.webelevate.net/img/checkbox.svg) left top no-repeat;
    cursor:pointer;
}
input[type="checkbox"]:checked + label span {
    background:url(http://fireandrescue.webelevate.net/img/checkbox.svg) -50px top no-repeat;
	cursor:pointer;
}

.checkbox-label {
    font-size: 1.4em !important;
    color: #212121;
    font-size: 1.2em;
    display: inline;
}

.ves_list {
    margin: 20px auto;
}
form.day label {color: #212121; transition: 1s;}
form.night label {color: white; transition: 1s;}

.ves_list  tr, td {
    padding: 5px 15px!important;
}

.custom-checkbox {
    padding: 20px;
    vertical-align: middle;
}
.word-break {
	word-break: break-all;
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  margin-top:2px;
  width: 45px;
  height: 27px;
  vertical-align: middle;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ffeb00;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 19px;
  width: 19px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #005396;
}

input:focus + .slider {
  box-shadow: 0 0 1px #005396;
}

input:checked + .slider:before {
  -webkit-transform: translateX(18px);
  -ms-transform: translateX(18px);
  transform: translateX(18px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


