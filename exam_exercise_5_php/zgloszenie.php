<?php
	$zespol=$_POST['zespol'];
	$dysp=$_POST['dyspozytor'];
	$adres=$_POST['adres'];
	$date=date("H:d:s");
	
	
	$con=mysqli_connect("localhost", "root", "", "ratownictwo") or die("<br><br> Nieudane połaczenie");
		
	$q="INSERT INTO zgloszenia VALUES (NULL, '$zespol', '$dysp', '$adres', 0, now())";
	
	$wynik_q=mysqli_query($con, $q) or die("<br><br>Nieudany zapyt");
	
	if ($wynik_q) echo "<h1>Udane zgłoszenie</h1>";
	
	mysqli_close($con);
?>