<?php
class UnholyFactory {

	private $soldier = array();

	public function absorb($target) {
		if ($target instanceof Fighter)
		{
			foreach ($this->soldier as $v)
			{
				if (get_class($v) == get_class($target))
				{
					print("(Factory already absorb a fighter of type " . get_class($target) . ")") . PHP_EOL;
					return ;
				}
			}
			print("(Factory absorb a fighter of type " . get_class($target) . ")") . PHP_EOL;
			$this->soldier[] = $target;
		}
		else
			print("(Factory can't absorb this. it's not a fighter)") . PHP_EOL;
	}
	public function fabricate($f) {
			foreach ($this->soldier as $v)
			{
				if ($f == $v->getName())
				{
					print("(Factory fabricates a fighter of type " . $f . ")" . PHP_EOL);
					return(clone $v);
				}
			}
			print("(Factory hasn't absorbed any fighter of type " . $f . ")" . PHP_EOL);
			return(NULL);
	}
}
