<?php 

	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Form;

	use Education\Interfaces\FormInterface;

    class Form implements FormInterface
    {

	    protected $elements = array();
	    protected $action;
	    protected $method;

	    public function __construct($action = "", $method = "post")
     	{
            $this->action = $action;
            $this->method = $method;
     	}   

	    public function addElement($element)
	    {
	        $this->elements[] = $element;
	    }

	    public function render()
    	{
         $form = "<form action=\"{$this->action}\" method=\"{$this->method}\">";
          foreach($this->elements as $element) {
              $form .= $element->getElement();
         }
         $form .= "</form>";

        echo $form;
    	}

    }

 ?>