<?php 

	/**
	* PATTERNS CRIACIONAL
	*/
	class Prototype
	{
		private $id;
		private $name;
		private $nameCategoria;
		private $nameMarca;

		

		public function setId($id)
		{
			$this->id = $id;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setNameCategoria($nameCategoria)
		{
			$this->nameCategoria = $nameCategoria;
		}

		public function setNameMarca($nameMarca)
		{
			$this->nameMarca = $nameMarca;
		}

	}



	
	//instaciando um objeto normalmente
	$produto = new Prototype();
	$produto->setId(1);
	$produto->setName("algo");
	$produto->setNameCategoria("Tenis");
	$produto->setNameMarca("Nike");

	//usando protype
	$produto2 = clone $produto;
	$produto2->setId(2);
	$produto2->setName("alterado");
	$produto2->setNameCategoria("Chuteira");

	

var_dump($produto, $produto2); exit;
