<div class="sdb_holder">
<?php
	//Fetch All Data from table
	$query = mysql_query('SELECT * FROM blog ORDER BY id DESC');
  
 ?>
        
		<div class="mediaplay"><h6>LATEST BLOGS</h6></div>
		            <marquee behavior="scroll" speed="" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
         	<ul class="latest_postnav">
			 <?php while($row = mysql_fetch_assoc($query)) { 
             echo '<li>';
               echo '<div class="media-body"><a class="catg_title" href="admin/blog/viewdetails.php?id='.$row["id"].'"> '.$row["title"].'</a></div>';
			echo '</li>';          
			 }
			 
			  ?>
		    </ul>
			</marquee>
      </div>