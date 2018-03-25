<?php
require_once 'Color.class.php';

Class Vertex {

	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;
	static $verbose = false;

	public function getX() {
		return ($this->_x);
	}
	public function setX($x) {
		$this->_x = $x;
	}
	public function getY() {
		return ($this->_y);
	}
	public function setY($y) {
		$this->_y = $y;
	}
	public function getZ() {
		return ($this->_z);
	}
	public function setZ($z) {
		$this->_z = $z;
	}
	public function getW() {
		return ($this->_w);
	}
	public function setW($w) {
		$this->_w = $w;
	}
	public function getColor() {
		return ($this->_color);
	}
	public function setColor($color) {
		$this->_color = $color;
	}
	function __construct(array $kwargs) {
		$this->setX($kwargs['x']);
		$this->setY($kwargs['y']);
		$this->setZ($kwargs['z']);
		if (array_key_exists('w', $kwargs))
			$this->setW($kwargs['w']) ;
		else
			$this->setW(1.0) ;
		if (array_key_exists('color', $kwargs) && $kwargs['color'] instanceof Color)
				$this->setColor($kwargs['color']) ;
		else
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255)) ;
		if (SELF::$verbose)
			printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed".PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
	}
	function __destruct() {
		if (SELF::$verbose)
			printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed".PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
	}
	static function doc() {
		if (file_exists('Vertex.doc.txt'))
			return (file_get_contents('Vertex.doc.txt'));
		else
			return ("Documentation inexistente");
	}
	public function __tostring() {
		if (SELF::$verbose)
			return(sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d ) )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue));
		else
			return(sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
	}
}
?>
