<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Form;

    use Education\Interfaces\TextAreaInterface;

    /**
    * @ Text Area
    */
    class TextArea implements TextAreaInterface
    {
    	protected $cols;
    	protected $name;
    	protected $rows;
    	protected $placeholder;
    	
    	public function __construct($cols, $name, $rows, $placeholder)
    	{
    		$this->cols 		= $cols;
    		$this->name 		= $name;
    		$this->rows 		= $rows;
    		$this->placeholder 	= $placeholder;
    	}

    	public function setCols($cols)
    	{
    		$this->cols = $cols;
    	}

        public function setName($name)
        {
        	$this->name = $name;
        }

        public function setRows($rows)
        {
        	$this->rows = $rows;
        }

        public function setPlaceholder($placeholder)
        {
        	$this->placeholder = $placeholder;
        }

        public function getCols()
        {
        	return $this->cols;
        }

        public function getName()
        {
        	return $this->name;
        }

        public function getRows()
        {
        	return $this->rows;
        }

        public function getPlaceholder()
        {
        	return $this->placeholder;
        }

        public function getElement()
        {
        	return "<br><textarea cols='". $this->cols ."' name='". $this->name ."' rows='". $this->rows ."' placeholder='". $this->placeholder ."'></textarea>";
        }
    }