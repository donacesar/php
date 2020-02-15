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



/*$camera["market1"]["row1"][0] = "продукты";
$camera["market1"]["row1"][1] = "сумка";
$camera["market2"]["row2"][0] = "апельсин";
$camera["market2"]["row2"][1] = "фотоаппарат";
$camera["market2"]["row2"][2] = "телефон";*/

$camera = array(
	"market1"=>array(
		"row1"=>array(
			"продукты", "сумка"
		),
		"row2"=>array(
			"апельсин", "фотоаппартат", "телефон"
		)
	),
	"market2"=>array(
		"row1"=>array(
			"продукты", "сумка"
		),
		"row2"=>array(
			"апельсин", "фотоаппартат", "телефон"
		)
	)
);

echo "<pre>";
print_r($camera);
echo "</pre>";
foreach ($camera as $key => $value) {
	foreach ($value as $key2 => $value2) {
		foreach ($value2 as $key3 => $value3) {
			echo $value3;
		}
		
	}
}

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





