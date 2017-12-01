        <div class="row">
                <div class="col-xs-12">
                    <h1 class="dntoggle {dayNight}">Choose an action</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="<?php echo base_url();?>message_ves/{incident_id}" class="btn btn-lg  btn-send-message dntoggle {dayNight}" role="button">Send message to VES(s)</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="<?php echo base_url();?>resources" class="btn btn-lg btn-check-resources dntoggle {dayNight}" role="button">Check available resources</a>
                </div>
            </div>
            <div class="row request">
                <div class="col-xs-12">
                    <div class="bell dntoggle {dayNight}" ></div>
                    <h2 class="dntoggle {dayNight}">Request assistance by:</h2>
                </div>
                <div class="col-xs-12">
                    <a href="request_by_ves.html" class="btn btn-lg btn-request-by-ves dntoggle {dayNight}" role="button">VES</a>
                </div>
                <div class="col-xs-12">
                    <a href="request_by_incident_type.html" class="btn btn-lg btn-request-by-incident dntoggle {dayNight}" role="button">Incident type</a>
                </div>
                <div class="col-xs-12">
                    <a href="<?php echo base_url();?>resources" class="btn btn-lg  btn-request-by-resource dntoggle {dayNight}" role="button">Resource</a>
                </div>
                <div class="col-xs-12">
                    <a href="request_by_ability.html" class="btn btn-lg  btn-request-by-ability dntoggle {dayNight}" role="button">Ability</a>
                </div>
            </div>
<!--        <div class="row incident_status">
                <div class="col-xs-12">
                    <h3>Incident status:</h3>
                    <p>Resources requested already</p>
                    <p>Resources mobilised to the incident</p>
                    <p>Resources still available</p>
                </div>
            </div>-->
            <div class="row incident_details">
                <div class="col-xs-12">		
								{details}
                    <h2><a data-toggle="collapse" data-target="#incident-details">Show incident details <span class="caret"></span></a></h2>
					<div id="incident-details" class="collapse">
						<h3 class="dntoggle {dayNight}">Incident name:</h3>
						<p class="dntoggle {dayNight}">{incident_name}</p>
						<h3 class="dntoggle {dayNight}">Incident location:</h3>
						<p class="dntoggle {dayNight}">{incident_location}</p>
						<h3 class="dntoggle {dayNight}">Incident status:</h3>
						<p class="dntoggle {dayNight}">{status}</p>										
						<h3 class="dntoggle {dayNight}">Incident GPS coordinates:</h3>
						<p class="dntoggle {dayNight}">{incident_gps_coords}</p>
						<h3 class="dntoggle {dayNight}">Incident hazards:</h3>
						<p class="dntoggle {dayNight}">{incident_hazards}</p>
						<h3 class="dntoggle {dayNight}">Incident access routes:</h3>
						<p class="dntoggle {dayNight}">{incident_access_routes}</p>
						<h3 class="dntoggle {dayNight}">Incident casualties:</h3>
						<p class="dntoggle {dayNight}">{incident_casualties}</p>
						<h3 class="dntoggle {dayNight}">Incident type:</h3>
						<p class="dntoggle {dayNight}">{type}</p>	
					</div>
									{/details}
                </div>
            </div>