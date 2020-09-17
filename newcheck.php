<?php
if(isset($_POST['submit']))
	
	{
		
		$image=$_FILES['image'];
		
		echo "File name is ".$image['name']."<br>";
		echo "File size is ".$image['size']."<br>";
		echo "Temp Dir is ".$image['tmp_name']."<br>";
		echo "File Type is ".$image['type']."<br>";
		
		move_uploaded_file($image['tmp_name'],"school_images/".$image['name']);
	}
	
	
	?>