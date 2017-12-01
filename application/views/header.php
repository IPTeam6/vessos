<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>VESS-O-S | {title}</title>

        <!-- Bootstrap -->							
        <?php 
					echo link_tag('css/bootstrap.min.css');
					echo link_tag('css/style.php');
				?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="dntoggle {dayNight}">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-inverse navbar-static-top dntoggle {dayNight}">
                      <div class="nav-container">
                        <div class="navbar-header nav-center dntoggle {dayNight}">
                           <a href="javascript:window.history.go(-1);">
                              <img src="<?php echo base_url();?>img/back_button.svg" class="back_button pull-left">
                          </a>                          
                          <a class="brand" href="<?php echo base_url();?>">
						  <div id="logo" class="dntoggle {dayNight}" ></div>
						  <!--<img src="<?php echo base_url();?>img/logo_white.svg" class="logo">--></a>


                            <button type="button" class="navbar-toggle dntoggle {dayNight}" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar dntoggle {dayNight}"></span>
                            <span class="icon-bar dntoggle {dayNight}"></span>
                            <span class="icon-bar dntoggle {dayNight}"></span> 
                          </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                          <ul class="nav navbar-nav custom dntoggle {dayNight}">
                            <li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                            <li class="sdisabled"><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li class="li-switch dntoggle {dayNight}"><!-- Rounded switch -->Day mode 
                                <label class="switch">
                                  <input type="checkbox" id="daynightswitch">
                                  <span class="slider round"></span>                              
                                </label> Night mode
                              </li>
                            <li class="sdisabled"><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li> 
                            <li><a href="<?php echo base_url();?>message_inbox"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li> 

                          </ul>
                          <ul class="nav navbar-nav custom dntoggle {dayNight}">
                            <li class="sdisabled"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                </div>
            </div>
				
				
        
				