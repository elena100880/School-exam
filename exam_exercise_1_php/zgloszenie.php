<?php
	$con=mysqli_connect("localhost", "root", "", "wedkarstwo") or die ("<br><br>Nieudane połączenie");
	
	$lowisko=$_POST['lowisko'];
	$data=$_POST['data'];
	$sedzia=$_POST['sedzia'];
	
	$q="INSERT INTO zawody_wedkarskie VALUES (NULL, 0, '$lowisko', '$data', '$sedzia')";
	
	$dodanie=mysqli_query($con, $q) or die ("<br><br>Rejestracja nie powiodła się");
	
	mysqli_close($con);
?>