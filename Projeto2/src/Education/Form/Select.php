<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Form;

    use Education\Interfaces\SelectInterface;
    use Education\Interfaces\FormElementInterface;


    class Select implements SelectInterface, FormElementInterface
    {
    	protected $values = array();

    	public function __construct()
    	{

    	}

    	public function getValue()
    	{
    		return $this->values;
    	}

    	public function addOptions($value)
    	{
    		$this->values[]	= $value;
    	}

    	public function getElement()
    	{
    		$select = "<select>";
    			foreach ($this->values as $key => $value) {
    				$select .= "<option value='". $value ."'>". $value ."</option>";
    			}
    		$select .= "</select>";

    		return $select;
    	}
    }