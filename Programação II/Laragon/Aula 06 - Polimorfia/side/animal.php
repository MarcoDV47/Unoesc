<?php

	abstract class Animal{
		public function falar(){
			echo "mangiare";
		}
	}

	class Cachorro extends Animal{
		public function falar(){
			echo "Au Au";
		}
	}

	class Gato extends Animal{
		public function falar(){
			echo "Miaaaaaau!";
		}
	}

	class Passaro extends Animal{
		public function falar(){
			echo "Piu piu";
		}
	}
?>