<?php
	// This is the file for the parent class

	class Monster {

		var $flies;
		var $fangs;
		var $hair;
		var $alignment;

		function __construct ($flies, $fangs, $hair, $alignment)
		{
			$this->flies = $flies;
			$this->fangs = $fangs;
			$this->hair = $hair;
			$this->alignment = $alignment;
		}

		public function can_fly()
		{
			return $this->flies;
		}

		function has_fangs()
		{
			return $this->fangs;
		}

		public function how_hairy()
		{
			return $this->hair;
		}

		function its_alignment()
		{
			return $this->alignment;
		}

	}
?>
