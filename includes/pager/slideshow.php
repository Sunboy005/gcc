<?php
	//Fetch All Data from table
	$query = mysql_query('SELECT * FROM slider ORDER BY id DESC limit 0,5');
  
 ?>
 <div class="slideshow-container">
	<?php while($row = mysql_fetch_assoc($query)) { 
          
	echo '<div class="mySlides fade">';
	echo '<img src="admin/images/slides/'.$row['image'].'" style="width:100%">';
	?>
<center><b>
<?php 
	echo '<div class="text">'.$row["caption"].'</div>';
	echo '</div>';
			}
	?>
	</b></center>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>