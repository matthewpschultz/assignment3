<?php
	// This is the file for the parent class
	// Create a monster
	class Monster {

		var $flies;
		var $fangs;
		var $hair;
		private $alignment;

		function __construct ($flies, $fangs, $hair, $alignment)
		{
			$this->flies = $flies;
			$this->fangs = $fangs;
			$this->hair = $hair;
			$this->alignment = $alignment;
		}

		// return its private attirbute alignment
		function __get($alignment)
		{
			return $this->alignment;
		}

		function has_fangs()
		{
			return $this->fangs;
		}
}

?>
