<?php
	//Fetch All Data from table
	$query = mysql_query('SELECT * FROM news ORDER BY id DESC limit 0,10');
  
 ?>	
 <div class="sdb_holder">
		<div class="mediaplay"><h6>Events to Come</h6></div>
				<div class="latest_post_container">
		<marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
         	<ul class="latest_postnav">
			 <?php while($row = mysql_fetch_assoc($query)) { 
             echo '<li>';
               echo '<div class="media-body"><a class="catg_title" href="viewdetails.php?id='.$row["id"].'"> '.$row["title"].'</a></div>';
			 echo '</li>';          
			 }
			 
			  ?>
		    </ul>
			</marquee>
          </div>
      </div>