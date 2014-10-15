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