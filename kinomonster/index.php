<?php 

	define("DBNAME", "kinomonster");
	$nickname = "Sergey";
	$balance = 0;
	$addBalance1 = 10;
	$addBalance2 = 35;

	$balance = $addBalance1 + $addBalance2;
	

	$svetofor = "red";

	if($svetofor == "green") {
		echo "Светофор зеленый, я перехожу дорогу.";
	} else {
		echo "жду когда загорится зеленый";
	}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div><!-- Привет,  --><?php /*echo $nickname;*/ ?></div>

	<?php
	 	/*echo "<div>".$balance."</div>";*/
	 	/*echo DBNAME;*/
	 ?>
	
</body>
</html>





