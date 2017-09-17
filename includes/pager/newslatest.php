    <div class="news"> 
<!-- #############################Latest News Modules Start############# -->
	  
	<?php
	//Fetch All Data from table
	$query = mysql_query('SELECT * FROM news ORDER BY id DESC limit 0,10');
  
 ?>	 <!-- ################################################################################################ -->
      <div class="mediaplay"><h6>CHURCH NEWS</h6></div>
      <nav class="sdb_holder">
        
		<div class="latest_post_container">
		<div id="next-button"><i class="fa  fa-chevron-up"></i></div>
            <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
         	<ul class="latest_postnav">
			 <?php while($row = mysql_fetch_assoc($query)) { 
             echo '<li>';
               echo '<div class="media-body"><a class="catg_title" href="viewdetails.php?id='.$row["id"].'"> '.$row["title"].'</a></div>';
			 echo '</div>';
            echo '</li>';          
			 }
			 
			  ?>
		    </ul>
			</marquee>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>

      </nav></div>