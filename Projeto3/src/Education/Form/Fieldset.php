<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

	namespace Education\Form;

	use Education\Interfaces\FieldsetInterface;
	use Education\Interfaces\FormElementInterface;
	use Education\Interfaces\FormFieldInterface;


    class Fieldset implements FieldsetInterface, FormElementInterface
    {
    	protected $elements = [];
    	protected $legend;

    	public function __construct($legend = null)
    	{
    		$this->legend = $legend;
    	}

    	public function add($element)
    	{
    		$this->elements[] = $element;
    	}

    	public function getElement()
    	{
    		$fieldset = "<fieldset>";
    			$fieldset .= "<legend>{$this->legend}</legend>";
    			foreach ($this->elements as $key => $value) {
    				$fieldset .= $value;
    			}

    		$fieldset .= "</fieldset>";

    		echo $fieldset;
    	}

    }