<?php 

	class Human {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		
		public function say() {
			echo "Меня зовут ".$this->name." и ";
		}
	}

	class Man extends Human {
		public function beard() {
			echo "у меня растет борода";			
		}
	}

	class Women extends Human {
		public function bearChildren() {
			echo "я рожаю детей";
		}
	}

	$man = new Man("Sergey");
	$man->say();
	$man->beard();

	echo "<br>";

	$women = new Women("Maria");
	$women->say();
	$women->bearChildren();
 ?>