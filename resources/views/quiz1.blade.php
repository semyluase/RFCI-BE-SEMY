<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/quiz1">
		@csrf
		<input type="text" name="input-data" placeholder="Input Deret Angka">
		<button type="submit">Submit</button>
	</form>
	<ul>
		<?php $n = sizeof($angka);
			for ($i=0; $i < $n; $i++) { 
			 	echo '<li>'.$angka[$i].'</li>';
		}?>
	</ul>
	<p>jumlah swap = {{$jumlah}}</p>
	<br>
	<a href="/">home</a>
</body>
</html>