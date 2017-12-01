<div class="row">
		<div class="col-xs-12">
				<h3 class="dntoggle {dayNight}">Message from<br>Principal Response Agency</h3>
				<table class="table table-striped message dntoggle {dayNight}">
						<tbody>
								<tr>
										<td>Date</td>
								</tr>
								<tr>
										<td>14:03</td>
								</tr>
								<tr>
										<td>From</td>
								</tr>
								<tr>
										<td>Will Smith<br><span class="pra">An Garda Síochána</span></td>
								</tr>
								<tr>
										<td>Subject</td>
								</tr>
								<tr>
										<td>Car crash</td>
								</tr>
								<tr>
										<td>Message</td>
								</tr>
								<tr>
										<td><p>Message goes here. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p></td>
								</tr>
						</tbody>
				</table>
				<h3 class="dntoggle {dayNight}">Incident details</h3>
				<table class="table table-striped message dntoggle {dayNight}">
						<tbody>
								
								<tr>
										<td>Incident name</td>
								</tr>
								<tr>
										<td>Car crash</td>
								</tr>
								<tr>
										<td>Incident type</td>
								</tr>
								<tr>
										<td>Transport (People)</td>
								</tr>
								<tr>
										<td>Incident location</td>
								</tr>
								<tr>
										<td>Exit 9 on M8 motorway</td>
								</tr>
								<tr>
										<td>Incident GPS coordinates</td>
								</tr>
								<tr>
										<td>52.505907, -7.875680</td>
								</tr>
								<tr>
										<td>Incident EIRCODE</td>
								</tr>
								<tr>
										<td>-</td>
								</tr>
								<tr>
										<td>Hazards - present and potential</td>
								</tr>
								<tr>
										<td>Oil leak</td>
								</tr>
								<tr>
										<td>Access / egress routes</td>
								</tr>
								<tr>
										<td>From R692</td>
								</tr>
								<tr>
										<td>Number and type of casualties</td>
								</tr>
								<tr>
										<td>No casualties</td>
								</tr>
						</tbody>
				</table>
		</div>
</div>
<div class="row">
		<div class="col-xs-12">
		<hr>
		</div>
</div>
<div class="row">
		<div class="col-xs-12">
				<form>
						<div class="form-group text-left dntoggle {dayNight}">
										<label for="message_subject">Subject:</label>
										<input type="text" class="form-control dntoggle {dayNight}" id="message_subject">
						</div>
						<div class="form-group text-left dntoggle {dayNight}">
								<label for="message">Message:</label>
								<textarea class="form-control dntoggle {dayNight}" rows="5" id="message"></textarea>
						</div>
						<button type="submit" class="btn btn-submit">Send</button>
				</form>            

		</div>
</div>

<script>
	$(document).ready(function() {    
		$("#message_subject").val("Re: Car crash"); 
	});
</script>
