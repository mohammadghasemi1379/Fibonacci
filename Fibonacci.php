<?php
$MAXIMUM = 100;
$x = getopt("x:");
$x = (int) $x['x'] ?? 10;
echo "Your 'x' input is: $x \n";

class Fibonacci{
	private $sqrt5, $phi;

	public function __construct()
	{
		$this->sqrt5 = sqrt(5);
		$this->phi =  (1 + $this->sqrt5) / 2;
	}

	public function fib($n): int
	{
		return (int) round(pow($this->phi, $n) / $this->sqrt5);
	}

}

function showList($max)
{
	$Fibonacci = new Fibonacci();
	for($i = 0; $i <= $max; $i++){
		echo $Fibonacci->fib($i);
		echo $i != $max ? ", " : "";
	}
	echo "\n";
}

if ($x <= $MAXIMUM){
	return ShowList($x);
} else { echo "the maximum posible x is $MAXIMUM \n"; }
?>
