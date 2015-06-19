<?php 

	/**
    *
    * @author: Alexandre Bispo
    * @email: alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    */

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	
	define('CLASS_DIR', '../src');
	set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
	spl_autoload_register();

	$form = new Education\Form\Form();
		$label1 = new Education\Form\Label("Pessoa Fisica ");
		$input1 = new Education\Form\Input("radio", "fisica", "pessoa fisica", "Pessoa Física");
	$form->addElement($label1);
	$form->addElement($input1);
		$label2 = new Education\Form\Label("Pessoa Juridica ");
		$input2 = new Education\Form\Input("radio", "Juridica", "pessoa jurídica", "Pessoa Jurídica");
	$form->addElement($label2);
	$form->addElement($input2);
		$label3 = new Education\Form\Label("Nome: ");
		$input3 = new Education\Form\Input("text", "Nome", "", "Nome");
	$form->addElement($label3);
	$form->addElement($input3);
		$label4 = new Education\Form\Label("Sobrenome: ");
		$input4 = new Education\Form\Input("text", "Sobrenome", "", "Sobrenome");
	$form->addElement($label4);
	$form->addElement($input4);
		$label5 = new Education\Form\Label("E-mail: ");
		$input5 = new Education\Form\Input("text", "email", "", "E-mail");
	$form->addElement($label5);
	$form->addElement($input5);	
		$label6 = new Education\Form\Label("CPF/CNPJ: ");
		$input6 = new Education\Form\Input("text", "cpf_cnpj", "", "digite aqui seu cpf ou cnpj");
	$form->addElement($label6);
	$form->addElement($input6);	
		$label7 = new Education\Form\Label("Sexo: ");
		$select1 = new Education\Form\Select();
			$select1->addOptions("Indefinido");
			$select1->addOptions("Masculino");
			$select1->addOptions("Feminino");
	$form->addElement($label7);
	$form->addElement($select1);
		$textArea1 = new Education\Form\TextArea(33, "texto_de_cadastro", 10, "Escreva Aqui!");
	$form->addElement($textArea1);
?>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<style>
		body{
			margin: 0;
			padding: 0;

		}

		form{
			margin: 25% 0 0 50%;
			font-family: sans-serif;
			font-size: 14px;
			color: #444;
		}

		input{
			margin-bottom: 10px;
		}

		select{
			margin-bottom: 08px;
		}
	</style>
</head>
<body>
	<?php $form->render(); ?>
</body>
</html>


