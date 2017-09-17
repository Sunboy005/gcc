  <div id="announcement" class="hoc clear">
  <?php
	//Fetch All Data from table
	$query = mysql_query('SELECT * FROM announcements ORDER BY id DESC');
  
 ?>
<b><i>
<div id="label" class="fl_left">ANNOUNCEMENTS</div>
<div id="notice" class="fl_right"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
<li><?php while($output = mysql_fetch_assoc($query)) { 
             echo '';
			 echo $output['content'];
			 echo ' FROM ';
			 echo $output['announcer'];
			 echo '  -------   ';
			  }
			 echo '</li>';
				
            		
			           
			?>
</marquee>
</div></i></b></div>