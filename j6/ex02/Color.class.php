<?php
Class Color {

	public $red;
	public $green;
	public $blue;
	static $verbose = false;

	function __construct(array $kwargs) {
		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = intval($kwargs['rgb'] / 256 / 256 % 256) ;
			$this->green = intval($kwargs['rgb'] / 256 % 256) ;
			$this->blue = intval($kwargs['rgb'] % 256) ;
		}
		else
		{
			if (array_key_exists('red', $kwargs))
				$this->red = intval($kwargs['red']);
			else
				$this->red = intval(0);
			if (array_key_exists('blue', $kwargs))
				$this->blue = intval($kwargs['blue']);
			else
				$this->blue = intval(0);
			if (array_key_exists('green', $kwargs))
				$this->green = intval($kwargs['green']);
			else
				$this->green = intval(0);
		}
		if ($this->red < 0)
			$this->red = 0;
		if ($this->red > 255)
			$this->red = 255;
		if ($this->green < 0)
			$this->green = 0;
		if ($this->green > 255)
			$this->green = 255;
		if ($this->blue < 0)
			$this->blue = 0;
		if ($this->blue > 255)
			$this->blue = 255;
		if (SELF::$verbose)
			print("Color( red: ".sprintf("%3d, green: %3d, blue: %3d",$this->red, $this->green, $this->blue)." ) constructed.".PHP_EOL);
	}
	function __destruct() {
		if (SELF::$verbose)
			print("Color( red: ".sprintf("%3d, green: %3d, blue: %3d",$this->red, $this->green, $this->blue)." ) destructed.".PHP_EOL);
	}
	static function doc() {
		if (file_exists('Color.doc.txt'))
			return (file_get_contents('Color.doc.txt'));
		else
			return ("Documentation inexistente");
	}
	public function __tostring() {
			return ("Color( red: ".sprintf("%3d", $this->red).", green: ".sprintf("%3d", $this->green).", blue: ".sprintf("%3d", $this->blue)." )");
	}
	function add(Color $tmp) {
		return (new Color(array('red' => $this->red + $tmp->red, 'green' => $this->green + $tmp->green, 'blue' => $this->blue + $tmp->blue)));
	}
	function sub(Color $tmp) {
		return (new Color(array('red' => $this->red - $tmp->red, 'green' => $this->green - $tmp->green, 'blue' => $this->blue - $tmp->blue)));
	}
	function mult($tmp) {
		return("Color( red: ".sprintf("%3d, green: %3d, blue: %3d",$this->red, $this->green, $this->blue).")".PHP_EOL);
	}
}
?>
