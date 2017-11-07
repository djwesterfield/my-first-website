<?php
	
	/* build output */
	$query = 'SELECT show_id, date_starts, stime, venue, url, city, state,
						  DATE_FORMAT(date_starts,\'%b %e\') as ds
				 FROM shows 
				 WHERE date_starts >= NOW()
				 ORDER BY date_starts ASC';
	$result = mysql_query($query,$DATABASE_LINK) or die(mysql_error().': '.$query);
	if(mysql_num_rows($result))
	{
		//heading
		$table = '<div class="show-row">	
						<div class="show-row-dates show-row-head">Dates</div>	
						<div class="show-row-event-venue show-row-head">Event &amp; Venue</div>	
						<div class="show-row-address show-row-head">Address</div>	
						<div class="show-row-time show-row-head">Show Time</div>
						'.($_SESSION['admin'] ? '<div class="show-row-admin show-row-head">Actions</div>' : '').'
						<div class="clear"></div>
					 </div>';
		
		//for every show date
		while($row = mysql_fetch_assoc($result))
		{
			//reset vars
			$address = $dates = $event_venue = '';
			
			//start row
			$table.= '<div class="show-row" id="show-row-'.$row['show_id'].'">';
			
			//show dates
			//$dates = $row['ds'].($row['de'] && $row['de']!= $row['ds'] ? ' - '.$row['de'] : '');
			$dates = $row['ds'];
			$table.= '	<div class="show-row-dates" id="date-'.$row['show_id'].'">'.$dates.'</div>';
			
			//show event/venue
			if($row['url']) { $event_venue.='<a href="'.$row['url'].'">'; }
			//if($row['event']) { $event_venue.= $row['event']; }
			//if($row['event'] && $row['venue']) { echo '<br />'; }
			if($row['venue']) { $event_venue.= $row['venue']; }
			if($row['url']) { $event_venue.='</a>'; }
			$table.= '	<div class="show-row-event-venue" id="venue-'.$row['show_id'].'">'.$event_venue.'</div>';
			
			//build & show address
			//if($row['address']) { $address.= $row['address'].'<br />'; }
			if($row['city']) { $address.= $row['city']; }
			if($row['city'] && $row['state']) { $address.= ', '; }
			if($row['state']) { $address.= $row['state']; }
			//if($row['zip']) { $address.= '  '.$row['zip']; }
			$table.= '	<div class="show-row-address" id="address-'.$row['show_id'].'">'.$address.'</div>';
			
			//show time
			$table.= '	<div class="show-row-time" id="stime-'.$row['show_id'].'">'.($row['stime'] ? $row['stime'] : '&nbsp').'</div>';
			
			//admin?
			if($_SESSION['admin'])
			{
				$table.= '<div class="show-row-admin">
								<a href="update.php?'.$row['show_id'].'" rel="moodalbox 400 400" class="edit-button">Edit</a>
								<a href="javascript:;" onclick="delete_event('.$row['show_id'].');" class="delete-button">Delete</a>
							 </div>';
			}
			
			//end row
			$table.= '<div class="clear"></div>';
			$table.= '</div>';
		}
	}
	else
	{
		//output general message
		$table = '<p>Sorry!  There is no show information available at this time.  Check back soon!</p>';
	}
	
?>
