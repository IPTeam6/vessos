<div class="row">
		<div class="col-xs-12">
				<h2 class="dntoggle {dayNight}">Send message to VES(s):</h2>
		</div>
</div>
<?php echo validation_errors('<div class="error" style="color: red">','</div>' ); ?>

<form action='{incident_id}' method='post' class="dntoggle {dayNight}">		
	<div class="form-group">
				<div class="form-group">
						<label for="Se_subject">Select VES(s) to send message to:</label>
						<table class="ves_list dntoggle {dayNight}">

						{agencies}
						<tr>
                        <td>
						<div>
							<input type="checkbox" id="{agency_desc}" name="agencies[]" value="{agency_email}" >
							<label for="{agency_desc}"><span></span>{agency_desc}</label>
						</div>
						</td>
						<tr>
						{/agencies}
						</table>
				</div>
		</div>
		<div class="form-group">
				<div class="form-group">
						<label for="message_subject">Subject:</label>
						<input type="text" class="form-control dntoggle {dayNight}" name="message_subject" value="<?php echo set_value('message_subject'); ?>">
				</div>
		</div>
		<div class="form-group">
				<label for="message_body">Message:</label>
				<textarea class="form-control dntoggle {dayNight}" rows="5" name="message_body" value="<?php echo set_value('message_body'); ?>"></textarea>
		</div>
		<div class="form-group">
				<input type="checkbox" id="attach_details" name="attach_details">
				<label for="attach_details"><span></span>Attach incident details</label>
		</div>
		<button type="submit" class="btn btn-submit dntoggle {dayNight}">Send</button>
</form>