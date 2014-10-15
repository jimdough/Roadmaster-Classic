<!-- Begin Short Form Validation Include -->

<style type="text/css">
label { width: 10em; float: left; font-size:11px;}
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
  <script>
  $(document).ready(function(){
    $("#quickLeadForm").validate({
		  rules: {
   			 ZipCode: {
     			 required: true,
     			 digits: true,
				 maxlength: 5,
				 minlength: 5
   				  },
			
			Phone: {
  			     required: true,
				 minlength: 10,
  			}
  			  }		 		 
});
		 });
  </script>
  
<!-- End Short Form Validation Include -->

<div id="quickFormInfo">
<p>Get started today by<br>filling out this form</p>
<p style="padding-top:5px;">Give Roadmaster a<br>call at 1-800-831-1300</p>
<p style="padding-top:5px;"><a id="youtube" href="http://www.youtube.com/embed/cFDw9kqOmoE">Learn more by watching<br>our overview video</a></p>
</div>

<div id="quickFormForm">

                <form action="/common/form/leadform.php" method="post" id="quickLeadForm">                
                <input type="hidden" name="LeadType" value="RDS"/>
                <input type="hidden" name="SuccessPage" value="/confirmationShort.php"/>
                <input type="hidden" name="ErrorPage" value="/error.php"/>
                <input type="hidden" name="EmailOptIn" value="1"/>
                
                <div class="label">First Name </div><div class="input"><input name="FirstName" type="text" id="FirstName" size="14" class="required"/></div>
                <div class="label">Last Name </div><div class="input"><input name="LastName" type="text" id="LastName" size="14" class="required" /></div>
                <div class="label clear">Phone </div><div class="input"><input name="Phone" type="text" id="Phone" size="14" maxlength="14" class="required" /></div>
                <div class="label">E-Mail </div><div class="input"><input name="EmailAddress" type="text" id="EmailAddress" size="14" maxlength="40" class="required email"/></div>
                <div class="label clear">Zip Code </div><div class="input"><input name="ZipCode" type="text" id="ZipCode" size="10" maxlength="10" class="ZipCode"/></div>
                <!--<div class="labelFull"><input id="Checkbox1" type="checkbox" checked name="EmailOptIn"/><span style="font-size:10px;">Send me correspondence and/or texts (SMS)</span></div>-->
                <div style="font-size:11px; line-height:12px; clear:both;">By submitting this form you are expressly consenting to our <a style="text-decoration:underline;" href="terms-of-use.php" target="_blank">Terms of Use</a> and that you may<br> be contacted by a representative via telephone, email or SMS Text</div>
                <div class="submit clear"><input name="Submit" type="image" value="Submit" src="/images/submit.png" /></div>
                </form>
                </div>
       