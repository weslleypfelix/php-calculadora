<?php

class calculadora {
	private $numero1;
	private $numero2;
	private $total;

	function __construct(){
		$numero1 = 0;
		$numero2 = 0;
		$total = 0;
	}

//metodos para setar numeros;

	public function setNumero1($parametro_numero1){
		$this->numero1 = $parametro_numero1;
	}

	public function setNumero2($parametro_numero2){
		$this->numero2 = $parametro_numero2;
	}

//funcoes para calcular os numeros

	public function somar(){
		$this->total = $this->numero1 + $this->numero2; 
	}

	public function subtrair(){
		//validando método de subtração;
		if ($this->numero1 > $this->numero2) {

			$this->total = $this->numero1 - $this->numero2; 		
		}else{
			echo "resultado negativo <br/>";
			$this->total = $this->numero1 - $this->numero2; 
		}
		
	}

	public function multiplicar(){

		$this->total = $this->numero1 * $this->numero2; 
	}

	public function dividir(){

		if ($this->numero2 == 0) {

			echo "Impossível dividir por 0! ";
			
		}				
		else{
			$this->total = $this->numero1 / $this->numero2; 
		}
	}

// trazer a partir do get o total

	public function getTotal(){
		return $this->total;
	}
}

?>