<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		//2. Arrays
		echo "Topic: SAP products<br>";
		$a=array();
		print_r($a);
		$b=empty($a);
		echo "<br>Die Funktion empty() gibt zurück: " . $b . "<br>";
		$a[0]="ERP";
		$c=empty($a);
		echo "Die Funktion empty() gibt zurück: " . $c . "<br>";
		print_r($a);
		unset($a);
		$c=empty($a);
		echo "<br>Die Funktion empty() gibt zurück: " . $c . "<br>";
		if(empty($a)){
			echo "Das Array ist leer.<br>";
		} else {
			echo "Das Array ist nicht leer.<br>";
		}
		$d=5;
		echo 'Der Variablen $d ist ein Wert zugewiesen: ' . empty($d) . "<br>";
		unset($d);
		echo 'Der Variablen $d ist ein Wert zugewiesen: ' . empty($d) . "<br>";
		$d=1999;
		print($d);
		$a[0]="CRM";
		$f = is_array($a);
		echo '<br>$a is an array: ' . $f . "<br>";
		$g = is_array($d);
		echo '$d is an array: ' . $g . "<br>";
	?>
	
	<p>************************************************</p>
	<p><strong>Quellen PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>