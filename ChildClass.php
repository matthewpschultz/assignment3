<?php
	// this file extends ParentClass.php
	class Vampire extends Monster {
		function __construct() {
       parent::__construct();
		}
		function __get($alignment)
		{
			return $this->alignment;
		}
		public function boss_battle ($time) {
			$outcome = "You encounter Strahd van Zarovich and he eats you!";
			return $outcome;
		}
	}
?>
