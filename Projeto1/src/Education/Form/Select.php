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


    class Select implements SelectInterface
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