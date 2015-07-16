<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Interfaces;

    interface ButtonInterface
    {
    	function setType($type);

        function setName($name);

        function setValue($value);

        function getType();

        function getName();

        function getValue();

    }
 ?>