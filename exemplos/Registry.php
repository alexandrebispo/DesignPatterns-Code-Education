<?php 
	
	/**
	* PATTERNS CRIACIONAL
	*/
	class Registry
	{
		//Atributo para armazernar os valores
		protected static $values;

		//Metodo para setar os valores a serem armazenados, metodo obrigatoriamente estatico
		// no lugar de set, poder estar qualquer outro nome
		static function set($index, $valor)
		{
			static::$values[$index] = $valor;
		}

		//Metodo para recuperar os valores armazenados, metodo obrigatoriamente estatico
		// no lugar de get, poder estar qualquer outro nome
		static function get($index)
		{
			//Verifica se o valor esta setado
			if(!isset(static::$values[$index])){
				//caso retorne NULL retorna a exceção
				throw new \InvalidArgumentException("Não há valor cadastrado com indice" . $index);
			}
			//Caso o valor esteja setado retorna o valor aqui
			return static::$values[$index];
		}

	}
?>