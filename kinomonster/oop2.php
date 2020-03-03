<?php 

	interface Say {
		public function say();
	}

	abstract class Human implements Say {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}
	}

	class Man extends Human {
		public function __construct($name) {
			parent::__construct($name);
		}

		public function beard() {
			echo "у меня растет борода";
		}

		public function say() {
			echo "у меня мужской голос, меня зовут ".$this->getName()." и ";
		}
	}

	class Women extends Human {
		public function __construct($name) {
			parent::__construct($name);
		}
		public function bearChildren() {
			echo "я рожаю детей";
		}
		public function say() {
			echo "у меня женский голос, меня зовут ".$this->getName()." и ";
		}

	}

	$man = new Man("Сергей");
	$man->say();
	$man->beard();

	echo "<br>";


	$women = new Women("Мария");
	$women->say();
	$women->bearChildren();



 ?>