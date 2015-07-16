<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Form;

    use Education\Interfaces\LabelInterface;
    use Education\Interfaces\FormElementInterface;

    /**
    * Cria Objeto Label
    */
    class Label implements LabelInterface, FormElementInterface
    {
        public $for;

        public function __construct($for)
        {
            $this->for = $for;
        }

        public function setFor($for)
        {
            $this->for = $for;
        }

        public function getFor()
        {
            return $this->for;
        }

        public function getElement()
        {
            $label = "<label for='". $this->for ."'>";
                $label .= $this->for;
            $label .= "</label>";

            return $label;
        }
    }