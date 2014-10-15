<div id="quickform">
			<p>Start your new career in 3-4 weeks!</p>
				<?php include("/shortFormValidation.inc"); ?>

				<form action="contact2.php" method="post" name="quickLeadForm" id="quickLeadForm">

				<input type="hidden" name="LeadType" value="RDS"/>
				<input type="hidden" name="SuccessPage" value="/confirmation.php"/>
				<input type="hidden" name="ErrorPage" value="/error.php"/>

				<div class="label">First Name</div><div class="input"><input name="FirstName" type="text" id="FirstName" size="14" class="required"/></div>
				<div class="label clear">Last Name</div><div class="input"><input name="LastName" type="text" id="LastName" size="14" class="required" /></div>
				<div class="label clear">Phone</div><div class="input"><input name="Phone" type="text" id="Phone" size="14" maxlength="14" class="required" /></div>
				<div class="label clear">E-Mail</div><div class="input"><input name="EmailAddress" type="text" id="EmailAddress" size="14" maxlength="40" class="required email"/></div>
				<div class="label clear">Zip Code</div><div class="input"><input name="ZipCode" type="text" id="ZipCode" size="10" maxlength="10" class="ZipCode"/></div>
				<div class="label clear">CDL Status</div><div class="input">
					<select name="HasCDL" id="HasCDL" class="required">
						<option value="">Please Choose</option>
						<option value="1">Yes I have one</option>
						<option value="0">No I need one</option>
					</select>
				</div>
				<div class="labelFull clear"><input id="Checkbox1" type="checkbox" name="EmailOptIn"/>Send me periodic correspondence</div>
				<div class="submit clear"><input name="Submit" type="submit" value="Submit" /></div>
				<div class="disclaimer">A representative may contact you</div>

				</form>
		</div>
