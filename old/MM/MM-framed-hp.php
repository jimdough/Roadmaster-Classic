<?PHP

	include("MM-dbOpen.php"); 

	mysql_select_db ($database,$con);
	
	$count=1;
	$limit=10;
	$rows=0;	
	
	for ($month=ltrim(date('m'), "0"); $month<=12; $month++)	{             // START FOR LOOP - Loop through each month
	
	$record = mysql_query("SELECT * FROM event_em WHERE approvalStatus='1' AND calendarToggle='1' AND eventDate1Year='" . date('Y') ."' AND eventDate1Month = '" . $month . "' ORDER BY eventDate1Day+0") or die(mysql_error());

	while($recordInfo = mysql_fetch_array($record))	 {         //START WHILE LOOP - Loop through each event

	if ($count<=$limit)	{
			
  	$school = mysql_query("SELECT * FROM schools WHERE id=' " . $recordInfo['schoolID'] . " ' ");
	$schoolInfo = mysql_fetch_array($school);
		
	echo "<div class='entry'><span class='eventDate'>" . $recordInfo['eventDate1DayName'] . " " . $recordInfo['eventDate1Month'] . "/" . $recordInfo['eventDate1Day'] . "/" . $recordInfo['eventDate1Year'] ;
	
	if (!empty($recordInfo['eventDate2DayName']))
	echo " to ";

	 if (!empty($recordInfo['eventDate5DayName']))
	  	echo $recordInfo['eventDate5DayName'] . " " . $recordInfo['eventDate5Month'] . "/" . $recordInfo['eventDate5Day'] . "/" . $recordInfo['eventDate5Year'];

	 elseif (!empty($recordInfo['eventDate4DayName']))
		echo $recordInfo['eventDate4DayName'] . " " . $recordInfo['eventDate4Month'] . "/" . $recordInfo['eventDate4Day'] . "/" . $recordInfo['eventDate4Year'];
		
	 elseif (!empty($recordInfo['eventDate3DayName']))
		echo $recordInfo['eventDate3DayName'] . " " . $recordInfo['eventDate3Month'] . "/" . $recordInfo['eventDate3Day'] . "/" . $recordInfo['eventDate3Year'];
		
	 elseif (!empty($recordInfo['eventDate2DayName']))
		echo $recordInfo['eventDate2DayName'] . " " . $recordInfo['eventDate2Month'] . "/" . $recordInfo['eventDate2Day'] . "/" . $recordInfo['eventDate2Year'];
		
	  echo "</span><span class='schoolName'><a href='" . $schoolInfo['schoolURL'] .  "'>" . $schoolInfo['schoolName'] . "</a></span>";
	  echo "<span class='eventName'><a href='MM/MM-event-view.php?eventID=" . $recordInfo['id'] .  "'>" . $recordInfo['eventName'] . "</a></span>";
	  echo "<span class='cta'><a href='MM/MM-event-view.php?eventID=" . $recordInfo['id'] .  "'>Details</a></span>";
	  echo "</div>";
				  
	  $count++;	
		    	}    // END IF LOOP
		    	
		    		}  // END IF AND WHILE LOOP

		 }     // CLOSE FOR LOOP
		 


	 ///// BEGIN NEXT YEAR /////
	
	$year=date('Y')+1;
		    
	 for ($month=1; $month<=12; $month++)	{      // START FOR LOOP - Loop through each month
	 
			$record = mysql_query("SELECT * FROM event_em WHERE approvalStatus='1' AND calendarToggle='1' AND eventDate1Year='" . $year ."' AND eventDate1Month = '" . $month . "' ORDER BY eventDate1Day+0") or die(mysql_error()); 

			while($recordInfo = mysql_fetch_array($record))	 {   //START WHILE LOOP - Loop through each event
			
			if ($count<=$limit)	{
	  	
		  	$school = mysql_query("SELECT * FROM schools WHERE id=' " . $recordInfo['schoolID'] . " ' ");
			$schoolInfo = mysql_fetch_array($school);
	
			echo "<div class='entry'><span class='eventDate'>" . $recordInfo['eventDate1DayName'] . " " . $recordInfo['eventDate1Month'] . "/" . $recordInfo['eventDate1Day'] . "/" . $recordInfo['eventDate1Year'] ;
	
			if (!empty($recordInfo['eventDate2DayName']))
			echo " to ";
		
			 if (!empty($recordInfo['eventDate5DayName']))
			  	echo $recordInfo['eventDate5DayName'] . " " . $recordInfo['eventDate5Month'] . "/" . $recordInfo['eventDate5Day'] . "/" . $recordInfo['eventDate5Year'];
		
			 elseif (!empty($recordInfo['eventDate4DayName']))
				echo $recordInfo['eventDate4DayName'] . " " . $recordInfo['eventDate4Month'] . "/" . $recordInfo['eventDate4Day'] . "/" . $recordInfo['eventDate4Year'];
				
			 elseif (!empty($recordInfo['eventDate3DayName']))
				echo $recordInfo['eventDate3DayName'] . " " . $recordInfo['eventDate3Month'] . "/" . $recordInfo['eventDate3Day'] . "/" . $recordInfo['eventDate3Year'];
				
			 elseif (!empty($recordInfo['eventDate2DayName']))
				echo $recordInfo['eventDate2DayName'] . " " . $recordInfo['eventDate2Month'] . "/" . $recordInfo['eventDate2Day'] . "/" . $recordInfo['eventDate2Year'];
					 
	  echo "</span><span class='schoolName'><a href='" . $schoolInfo['schoolURL'] .  "'>" . $schoolInfo['schoolName'] . "</a></span>";
	  echo "<span class='eventName'><a href='MM/MM-event-view.php?eventID=" . $recordInfo['id'] .  "'>" . $recordInfo['eventName'] . "</a></span>";
	  echo "<span class='cta'><a href='MM/MM-event-view.php?eventID=" . $recordInfo['id'] .  "'>Details</a></span>";
	  echo "</div>";
			  
			  $count++;	
		    		}    // END IF LOOP
			  
			  }  // END WHILE LOOP

		    }     // CLOSE FOR LOOP

	If($count == 1) {
		echo "<div class='entry' style='text-align:center;'>There are no additional events currently scheduled</div>";
		}
		    
 include("MM-dbClose.php"); ?>
	
