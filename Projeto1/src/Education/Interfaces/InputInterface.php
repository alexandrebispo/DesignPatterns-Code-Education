<?php 
	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

    namespace Education\Interfaces;

    interface InputInterface
    {

        function setType($type);

        function setName($name);

        function setValue($value);

        function setPlaceholder($placeholder);

        function getType();

        function getName();

        function getValue();

        function getPlaceholder();
     
    }

 ?>