<!DOCTYPE html>
<html lang="pl">
	<meta charset="utf-8">
	<title>Nasz sklep komputerowy</title>
	<link rel="stylesheet" href="styl8.css">
</html>
<body>
	<div id="menu">
		
	</div>
	
	<div id="logo">
		<h2>Artykułe biurowe</h2>
	</div>
	<div style="clear:both"></div>
	
	<div id="glowny1">
		<p>Ceny artykuluw</p>
		<table>
			<?php
				$con=mysqli_connect("localhost", "root", "", "sklep");
				
				$q="SELECT nazwa, cena FROM towary LIMIT 4";
				$rez=mysqli_query($con, $q);
				
				while($row=mysqli_fetch_row($rez)) {
					echo "<tr>
								<td>$row[0]</td> <td>$row[1]</td>
						  </tr>";
				}
			?>
		</table>
	</div>
	<div id="glowny2">
		<h3>Ile beda kosztowac twoje zakupy</h3>
		
		<form method="POST">
			Wybierz artykul  <select name="wyb">
				<option value="1">zeszyt 60kr</option>
				<option value="2">zesz 32</option>
				<option value="3">cyrk</option>
				<option value="4">lin 30</option>
				<option value="5">ekierka</option>
				<option value="6">lin 50</option>
			</select><br>
			Liczba sztuk:<input type="number" name="il"><br>
			<input type="submit" value="OBLICZ"><br>
		</form>
		<?php
			if (isset($_POST['wyb'])) 
			{
				if (empty($_POST['il']))
				{
					echo "<br>Nie podales liczby";
				}
				else 
				{
					$tow=$_POST['wyb'];
					$il=$_POST['il'];
					
					$q2="SELECT round(cena*$il, 1) FROM towary WHERE id=$tow";
					$rez=mysqli_query($con, $q2) or die ("zapyt");;
					
					$row=mysqli_fetch_row($rez);
					
					echo "<br>$row[0] zl";
				}
					
			}	
		?>
	</div>
	
	<div id="glowny3">
		<img src="zakupy2.png" alt="promocje na procesory" id="z" align="left">
		<h3>Kontakt</h3>
		<p>Telefon<br>111222333<br>e-mail:<br></p>
		<a href="mailto:hurt@wp.pl">hurt@wp.pl</a>
	</div>
	
	<div style="clear:both"></div>
	
	<div id="stopka1">
		<img src="scalak.jpg" alt="promocje na procesory">
	</div>
	
	<div id="stopka2">
		<h4>Nasz sklep:</h4>
		<a href="http://www.edata.pl"target="_blank"><p>Współpracujemy z hurtownią edata</p></a>
	</div>
	
	<div id="stopka3">
		<p>zadzwoń 601 602 603</P>
	</div>
	
	<div id="stopka4">
		<p>Stronę wykonał: lapka</p>
	</div>
	<div style="clear:both"></div>
	
</body>