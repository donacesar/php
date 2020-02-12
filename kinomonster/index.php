<?php 

$i = 1;

/*while($i <=10) {
	echo $i."<br>";
	$i++;
}
*/
/*do {
	echo $i."<br>";
	$i++;
} while($i <=10);
*/

/*for($i = 0; $i <=10; $i++) {
	echo $i."<br>";
}*/

/*$arr["product"] = "продукты";
$arr["water"] = "бутылка с водой";*/

/*for ($i=0; $i < count($arr); $i++) { 
	echo $arr[$i]."<br>";*/

/*$arr = array('produkt' => "продукты", "water" => "вода" );*/

$arr = ["продукты", "вода"];

/*unset($arr[0]);*/

array_push($arr, "яблоко");
array_unshift($arr, "апельсин");
array_push($arr, "апельсин");

$arr = array_unique($arr);
// $arr = array_reverse($arr);

/*sort($arr);*/
/*shuffle($arr);
*/
$arr2 = array("кокос", "арбуз");

$newarr = array_merge($arr, $arr2);

foreach ($newarr as $key => $value) {
	echo "ключ: ".$key." значение: ".$value."<br>";
}
/*$str = implode(", ", $newarr);
echo $str;*/
$str = "продукты, бутылка с водой, кокос";
$strtoarr = explode(", ", $str);

echo "<pre>";
print_r($strtoarr);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

		
</body>
</html>





