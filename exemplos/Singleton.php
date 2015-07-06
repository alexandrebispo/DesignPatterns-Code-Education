<?php 

	/**
	* PATTERNS CRIACIONAL
	*/
	class Singleton 
	{
		protected static $instance;
		
		//Construtor travado, não é possivel estanciar esta classe
		private function __construct()
		{
			
		}

		//este metodo obrigatoriamente é estatico.
		static function getInstance()
		{
			//garante que não seja criada mais de um objeto, nunca.
			if (static::$instance === null) {

				//instancia objeto
				static::$instance = new PDO();
			}

			//retorna a instancia
			return static::$instance;
		}

	}
 ?>