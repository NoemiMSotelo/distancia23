<?php

/**
*Funciones que manejan cadenas de texto.
*/

/**
*Función para obtener la longitud de una cadena.
*
*@param string $cadena Cadena de texto.
*@return int Devuelve la longitud de la cadena.
*
*@version 7.4.
*@since 1.0.0.
*@final
*/
function longitud_cadena($cadena){
	return strlen($cadena);
}

/**
*Función para invertir  una cadena.
*
*@param string $cadena Cadena de texto.
*@return string Devuelve la cadena invertida.
*
*@version 7.4.
*@since 1.0.0.
*@final
*/
function invertir_cadena($cadena){
	return strrev($cadena);
}
