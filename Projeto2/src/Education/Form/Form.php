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
  use Education\Interfaces\FormElementInterface;
  use Education\Validation\Validator;

    class Form implements FormInterface, FormFieldInterface
    {

	    protected $elements = array();
	    protected $action;
	    protected $method;
      protected $validator;

	    public function __construct(Validator $validator, $action = "", $method = "post")
     	{
            $this->action = $action;
            $this->method = $method;
            $this->validator = $validator;
     	}

      public function openForm()
      {
        return "<form action=\"{$this->action}\" method=\"{$this->method}\">";
      }

      public function endForm()
      {
        return "</form>";
      }

        /**
        *  Na indução de tipo, apenas coloque a barra invertida (\) quando o tipo for class;
        */ 
	    public function addElement(FormElementInterface $field)
	    {
	        $this->elements[] = $field;
	    }

	    public function render()
    	{
         $form = $this->openForm();
          foreach($this->elements as $element) {
              $form .= $element->getElement();
         }
         $form .= $this->endForm();

        echo $form;
    	}

      public function createField($field)
      {
        $Element = ucfirst($field);

          switch ($Element){
            case 'Input':
              return new Input('', '', '', '');
              break;

            case 'Label':
              return new Label('');
              break;

            case 'Select':
              return new Select();
              break;

            case 'Button':
              return new Button('', '', '');
              break;

            case 'TextArea':
              return new TextArea('', '', '', '');
              break;
            
            default:
              throw new \InvalidArgumentException("$field is not a valid Field");
              break;
          }
      }

    }

 ?>