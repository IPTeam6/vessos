<div class="row">
		<div class="col-xs-12">
				<a href="raise_incident" class="btn btn-lg btn-danger text-uppercase btn-raise-incident z-depth-4 dntoggle {dayNight}" role="button"><span class="glyphicon glyphicon-plus"> </span> Raise incident</a>
		</div>
</div>
<div class="row">
		<div class="col-xs-12">
				
				<h2 class="dntoggle {dayNight}"><span class="glyphicon glyphicon-alert"></span><br>Ongoing incidents</h2>
				<p class="dntoggle {dayNight}">(click on incident name to see details)</p>
		</div>
</div>
<div class="row">
		<div class="col-xs-12">
				<table class="table table-incidents dntoggle {dayNight}">
					<!--<colgroup>
						<col span="1" style="width: 4%;">
						<col span="1" style="width: 50%;">
						<col span="1" style="width: 35%;">
						<col span="1" style="width: 7%;">
						<col span="1" style="width: 4%;">
                    </colgroup>-->
						<thead>
								<tr><th>Id</th><th>Name</th><th>Location</th><th>Status</th><th>Edit</th></tr>
						</thead>
						<tbody>
							{dbItems}
								<tr>
									<td>{incident_id}</td>
									<td><a href="<?php echo base_url()?>detail_incident/{incident_id}">{incident_name}</a></td>
									<td> {incident_location} </td><td> {incident_status} </td>
									<td><span class="glyphicon glyphicon-cog"></span></td>
								</tr>
							{/dbItems}
						</tbody>
				</table>
		</div>
</div>
