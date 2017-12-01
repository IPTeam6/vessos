        
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="dntoggle {dayNight}">New incident details</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <form action='raise_incident' method='post' class="dntoggle {dayNight}">
										<!-- This PHP snippet comes back with validation errors from the controller -->
											<?php echo validation_errors('<div class="error" style="color: red">','</div>' ); ?>
											
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_name">Incident name:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_name" value="<?php echo set_value('incident_name'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_location">Incident location:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_location" value="<?php echo set_value('incident_location'); ?>">
                            </div>
                        </div>
												
												
												<div class="form-group">
                            <div class="form-group">
                                <label for="incident_ty_cde">Incident type:</label>
                                <select class="form-control dntoggle {dayNight}" name="incident_ty_cde" style="padding-top: 10px;padding-bottom: 10px;height: 42px;">
																		<!--<option value="0" selected="">--------Select Incident Type--------</option>	-->
																		{incident_ty_cdes}
																				<option value="{lookup_id}">{lookup_desc}</option>																
																		{/incident_ty_cdes}
																</select>	
                            </div>
                        </div>												
												
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_gps_coords">GPS coordinates:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_gps_coords" value="<?php echo set_value('incident_gps_coords'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_eircode">Incident EIRCODE:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_eircode" value="<?php echo set_value('incident_eircode'); ?>">
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_hazards">Hazards - present and potential:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_hazards" value="<?php echo set_value('incident_hazards'); ?>">
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_access_routes">Access/egress routes:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_access_routes" value="<?php echo set_value('incident_access_routes'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="incident_casualties">Number and types of casualties:</label>
                                <input type="text" class="form-control dntoggle {dayNight}" name="incident_casualties" value="<?php echo set_value('incident_casualties'); ?>">
                            </div>
                        </div>												
												
                        <input role="button" type="submit" class="btn btn-submit dntoggle {dayNight}">
                    </form>
                </div>
            </div>
        