<?php

class Tyrion {
	public function sleepWith($k) {
		if ($k instanceof Jaime || $k instanceof Cersei)
			print("Not event if I'm drunk !" . PHP_EOL);
		else if ($k instanceof Sansa)
			print("Let's do this." . PHP_EOL);
	}
}
?>
