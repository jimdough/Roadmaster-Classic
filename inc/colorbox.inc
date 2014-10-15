<!-- Colorbox -->
<link type="text/css" media="screen" rel="stylesheet" href="colorbox.css" />
		<script type="text/javascript" src="colorbox/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".youtube").colorbox({opacity:"0.50", iframe:true, width:425, height:344});
				$(".iframe").colorbox({opacity:"0.50", width:"385px", height:"375px", iframe:true});
				$(".inline").colorbox({width:"50%", inline:true, href:"#inline_example1"});
				$(".show").colorbox();
				$(".show2").colorbox();

				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
        <!-- End Colorbox -->