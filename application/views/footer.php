		 
				</div> <!-- close page container -->
				
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
				<script type="text/javascript">
				
				function getCookie(cname) {
						var name = cname + "=";
						var decodedCookie = decodeURIComponent(document.cookie);
						var ca = decodedCookie.split(';');
						for(var i = 0; i <ca.length; i++) {
								var c = ca[i];
								while (c.charAt(0) == ' ') {
										c = c.substring(1);
								}
								if (c.indexOf(name) == 0) {
										return c.substring(name.length, c.length);
								}
						}
						return "";
				}

				$('#daynightswitch').click(function(){					
					if($(".dntoggle").hasClass( "night" )){
						$( ".dntoggle" ).removeClass( "night" );
						$( ".dntoggle" ).addClass( "day" );
						//If night class present - set night cookie						
						document.cookie = "nightCookie=;path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;'";						
						
					}else { 
						$( ".dntoggle" ).removeClass( "day" );
						$( ".dntoggle" ).addClass( "night" );
						//Backdate expirey removes cookie 						
						var d = new Date();
						var nightCookieValue = $(".dntoggle").hasClass( "night" );					
						d.setTime(d.getTime() + (2*24*60*60*1000)); //Cookie expres in 2 days 
						var expires = "expires="+ d.toUTCString();
						document.cookie = "nightCookie=" + nightCookieValue + ";" + expires + ";path=/";						
					}
					//$('.dntoggle').toggleClass('night day');						
					
				});
				
				$( document ).ready(function() {	
					var nightCookieValue = getCookie("nightCookie");					
					if ( nightCookieValue != "" ) {				
						$('#daynightswitch').prop('checked', true);
					} 
				});


    </script>
    </body>

</html>