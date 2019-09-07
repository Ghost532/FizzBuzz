<?php

$chamando = new Metodo();
$chamando->Funcao();

class Metodo {

private $F = "fizz";
private $B = "buzz";
private $FB = "fizzbuzz";

public function Funcao() {
	for($i=1; $i<=100; $i++) {

	if ($i % 3 == 0 && $i % 5 == 0) {
		echo $this->FB;
		echo '<hr>';
	}
	elseif ($i % 3 == 0) {
		echo $this->F;
		echo '<hr>';
	}
	elseif ($i % 5 == 0) {
		echo $this->B;
		echo '<hr>';
	}
	else {
		echo $i;
		echo '<hr>';
	}
	}
}
}

