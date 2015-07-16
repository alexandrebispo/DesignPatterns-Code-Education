<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

	namespace Education\Validation;

	use Education\Http\Request;

	
	class Validator
	{
		private $request;

		public function __construct(Request $request)
		{
			$this->request = $request;
		}
	}
?>