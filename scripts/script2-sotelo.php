<?php
	/**
	* Clase que representa una calculadora de suma y resta.
	*
	*@author Noemi Macarena Sotelo Miguel
	*@version 7.4
	*
	*/
	class Calculadora{
		/**
		* Método para sumar dos números.
		*
		*@access public
		*@param int $num1	Número 1
		*@param int $num2	Número 2
		*@return int		Devuelve la suma de $num1 y $num2
		*
		*@version 7.4.
		*@since 1.0.0.
		*/
		public function Suma($num1, $num2){
			return $num1 + $num2;
		}

		/**
                * Método para restar dos números.
                *
		*@access public
                *@param int $num1       Número 1
                *@param int $num2       Número 2
                *@return int            Devuelve la resta de $num1 y $num2
                *
                *@version 7.4.
		*@since 1.0.0.
                */
		public function Resta($num1, $num2){
			return $num1 - $num2;
		}
	}

	//Inicializamos la clase
	$calc = new Calculadora();
	$numero1=25;
	$numero2=20;

	$resultado_suma= $calc->Suma($numero1, $numero2);
	$resultado_resta= $calc->Resta($numero1, $numero2);

	echo "El resultado de la suma de ".$numero1." y ". $numero2.
	 " ha sido ". $resultado_suma;
	echo "El resultado de la resta de ".$numero1." y ".$numero2.
	" ha sido ". $resultado_resta;
