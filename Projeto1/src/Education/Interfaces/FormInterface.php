<?php 

	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

	namespace Education\Interfaces;


	interface FormInterface
	{	

		public function addElement($element);

		public function render();
	}
?>