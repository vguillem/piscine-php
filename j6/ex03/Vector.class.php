<?php
require_once 'Color.class.php';

Class Vector {

	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_dest;
	private $_orig;
	static $verbose = false;

	public function getX() {
		return ($this->_x);
	}
	public function getY() {
		return ($this->_y);
	}
	public function getZ() {
		return ($this->_z);
	}
	public function getW() {
		return ($this->_w);
	}
	function __construct(array $kwargs) {
		$this->_dest = $kwargs['dest'];
		$this->_x = $this->_dest->getX();
		$this->_y = $this->_dest->getY();
		$this->_z = $this->_dest->getZ();
		$this->_w = $this->_dest->getW();
		if (array_key_exists('orig', $kwargs) && $kwargs['orig']instanceof Vertex)
			$this->_orig = $kwargs['orig'];
		else
			$this->_orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
		if (SELF::$verbose)
			printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f ) constructed".PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w );
	}
	function __destruct() {
		if (SELF::$verbose)
			printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f ) destructed".PHP_EOL, $this->_x, $this->_y, $this->_z, $this->_w );
	}
	public function magnitude() {
		return ((float)sqrt($this->_x * $this->_x + ($this->_y * $this->_y) + ($this->_z * $this->_z)));
	}
	public function normalize() {
		$len = $this->magnitude();
		if ($len == 1)
			return clone $this;
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_x / $len, 'y' => $this->_y / $len, 'z' => $this->_z / $len)))));
	}
	public function add($rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_x + $rhs->getX(), 'y' => $this->_y + $rhs->getY(), 'z' => $this->_z + $rhs->getZ())))));
	}
	public function sub($rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_x - $rhs->getX(), 'y' => $this->_y - $rhs->getY(), 'z' => $this->_z - $rhs->getZ())))));
	}
	public function opposite() {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_x * -1, 'y' => $this->_y * -1, 'z' => $this->_z * -1)))));
	}
	public function scalarProduct($sca) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_x * $sca, 'y' => $this->_y * $sca, 'z' => $this->_z * $sca)))));
	}
	public function dotProduct($rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_x * $rhs->getX(), 'y' => $this->_y * $rhs->getY(), 'z' => $this->_z * $rhs->getZ())))));
	}
	public function cos($rhs) {
		return (float)(($this->_x * $rhs->getX() + $this->_y * $rhs->getY() + $this->_z * $rhs->getZ()) / ($this->magnitude() * $rhs->magnitude()));
	}
	public function crossProduct($rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->_y * $rhs->getZ() - $this->_z * $rhs->getY(), 'y'  => $this->_z * $rhs->getX() - $this->_x * $rhs->getZ(), 'z' => $this->_x * $rhs->getY() - $this->_y * $rhs->getX())))));
	}
	static function doc() {
		if (file_exists('Vertex.doc.txt'))
			return (file_get_contents('Vertex.doc.txt'));
		else
			return ("Documentation inexistente");
	}
	public function __tostring() {
		if (SELF::$verbose)
			return("verbose");
		return("ok");
	}
}
?>
