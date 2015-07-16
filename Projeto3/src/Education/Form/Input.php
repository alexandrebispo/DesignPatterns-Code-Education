<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Form;

    use Education\Interfaces\InputInterface;
    use Education\Interfaces\FormElementInterface;

    /**
    * Cria Objeto Input
    */
    class Input implements InputInterface, FormElementInterface
    {
    	protected $type;
    	protected $name;
    	protected $value;
    	protected $placeholder;


    	public function __construct($type, $name, $value, $placeholder)
    	{
    		$this->type 		= $type;
    		$this->name 		= $name;
    		$this->value 		= $value;
    		$this->placeholder 	= $placeholder;
    	}

        public function setType($type)
        {
        	$this->type = $type;
        }

        public function setName($name)
        {
        	$this->name = $name;
        }

        public function setValue($value)
        {
        	$this->value = $value;
        }

        public function setPlaceholder($placeholder)
        {
        	$this->placeholder = $placeholder;
        }

        public function getType()
        {
        	return $this->type;
        }

        public function getName()
        {
        	return $this->name;
        }

        public function getValue()
        {
        	$this->value;
        }

        public function getPlaceholder()
        {
        	$this->placeholder;
        }

        public function getElement()
    	{
    		return "<input type='". $this->type ."' name='". $this->name ."' value='". $this->value ."' placeholder='". $this->placeholder ."' /><br>";
    	}
    }
?>