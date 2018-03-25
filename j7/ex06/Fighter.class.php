<?php

class Fighter {

	private $_name;
	public function __construct($n) {
		$this->_name = $n;
	}

	public function getName() {
		return ($this->_name);
	}
}
?>
