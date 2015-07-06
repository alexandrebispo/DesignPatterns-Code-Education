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

    use Education\Interfaces\FormFieldInterface;

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

        /**
        *  Na indução de tipo, apenas coloque a barra invertida (\) quando o tipo for class;
        */ 
	    public function addElement(FormFieldInterface $field)
	    {
	        $this->elements[] = $field;
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