<?php 

	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

	namespace Education\Interfaces;

	use Education\Interfaces\FormFieldInterface;


	interface FormInterface
	{	

		public function addElement(\Education\Interfaces\FormFieldInterface $field);

		public function render();
	}
?>