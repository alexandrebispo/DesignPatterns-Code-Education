<?php 

	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

	namespace Education\Interfaces;

	use Education\Interfaces\FormElementInterface;


	interface FormInterface
	{	

		public function addElement(\Education\Interfaces\FormElementInterface $field);

		public function openForm();
		
        public function endForm();

		public function render();
	}
?>