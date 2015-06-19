<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Interfaces;

    interface SelectInterface
    {

        function getValue();

        function addOptions($value);

        function getElement();
    }

 ?>