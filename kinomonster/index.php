<?php 

	function sum($a, $b) {
		$result = false;

		if (!is_numeric($a)){
			$result = "Ошибка, значение 'a' не является числом";
		} else if (!is_numeric($b)) {
			$result = "Ошибка, значение 'b' не является числом";
		} else {
			$result = $a + $b;
		}

		return $result;
	}

	function maxSum($sum) {
		$result = false;

		if ($sum > 30) {
			$result = "сумма большуе 30";
		} else {
			$result = "сумма меньше 30";
		}

		return $result;
	}

	echo maxSum(sum(2, 2));
	
?>

