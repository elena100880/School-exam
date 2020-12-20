<!DOCTYPE HTML>
<html>
	<head lang="pl">
		<meta charset="utf-8">
		<title>Wędkujemy</title>
		<link rel="stylesheet" href="styl_1.css">
	</head>

	<body>
		<div id="baner">
			<h1>Portal dla wędkarzy</h2>
		</div>
		
		<div id="lewy">
			<h2>Ryby drapieżne naszych wód</h2>
			<ul>
				<?php
					$pol= mysqli_connect("localhost", "root", "", "wedkowanie") or die ("Nieudane polaczenie z baza");
					
					$zap=mysqli_query($pol, "SELECT nazwa, wystepowanie FROM Ryby WHERE styl_zycia=1") or die ("Niepoprawne zapytanie");
					
					while ($wiersz=mysqli_fetch_row ($zap))
						{
						echo "<li>$wiersz[0], występowanie: $wiersz[1]</li>";
						}
							
					mysqli_close ($pol);
				?>
			</ul>
				
		</div>
		
		<div id="prawy">
			<img src="ryba1.jpg" alt="Sum" title="Sum"><br>
			<a href="kwerendy.txt">Pobierz z kwerendy</a>
		</div>
		<div style="clear:both"></div>
		
		<div id="stopka">
			<p>Stronę wykonał: 10081980123123</p>
		</div>
		
	</body>
</html>




