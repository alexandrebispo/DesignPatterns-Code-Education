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


$request = new Education\Http\Request();
$validator = new Education\Validation\Validator($request);



	$form = new Education\Form\Form($validator);
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

		.container{
			margin: 5% 0 0 0;
			font-family: sans-serif;
			font-size: 14px;
			color: #444;
		}

		form{
			margin: 5% 0 0 43.4%;
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
	

	<div class="container">
		<?php $form->render();	?>
			<hr />
		<?php
			$form1 = new Education\Form\Form($validator);
			echo $form1->openForm();
				echo $label1->getElement(). " " .$input1->getElement(); 
				echo $label2->getElement(). " " .$input2->getElement(); 
				echo $label3->getElement(). " " .$input3->getElement();
				echo $label4->getElement(). " " .$input4->getElement();
				echo $label5->getElement(). " " .$input5->getElement();
				echo $label6->getElement(). " " .$input6->getElement();
				echo $label7->getElement(). " " .$select1->getElement();
				echo $textArea1->getElement();
			echo $form1->endForm();
		?>

		<hr />

		<?php 
			$form2 = new Education\Form\Form($validator);
			echo $form2->openForm();
				$field = $form2->createField('input');
				$field->setName('Input name');
				$field->setType('text');
				$field->setValue('');
				$field->setPlaceholder('Nome');
				echo $field->getElement();

				$field = $form2->createField('input');
				$field->setName('Input name');
				$field->setType('text');
				$field->setValue('');
				$field->setPlaceholder('sobrenome');
				echo $field->getElement();

				$field = $form2->createField('Button');
				$field->setType('button');
				$field->setName('Button');
				$field->setValue('Enviar');
				echo $field->getElement();
			echo $form2->endForm();	
		?>

		<hr />
		<?php 
			$form3 = new Education\Form\Form($validator);
			echo $form3->openForm();
				$field = $form3->createField('input');
				$field->setName('Input email');
				$field->setType('text');
				$field->setValue('');
				$field->setPlaceholder('E-mail');
				echo $field->getElement();

				$field = $form3->createField('textArea');
				$field->setName('Input name');
				$field->setRows(10);
				$field->setCols(33);
				$field->setPlaceholder('preencha seu texto aqui...');
				echo $field->getElement();
				echo '<br />';
				$field = $form3->createField('input');
				$field->setType('submit');
				$field->setName('Submit');
				$field->setValue('Enviar');
				echo $field->getElement();
			echo $form3->endForm();
		?>

		<hr />
		
		<?php 
			$form4 = new Education\Form\Form($validator);
			echo $form4->openForm();
				$field = $form4->createField('Select');
				$field->addOptions('Masculino');
				$field->addOptions('Feminino');
				echo $field->getElement();

				$field = $form4->createField('label');
				$field->setFor('Quais linguagens você programa: ');
				echo '<br />'. $field->getElement() .'<br />';

				$field = $form4->createField('label');
				$field->setFor('PHP: ');
				echo '<br />'. $field->getElement();
				$field = $form4->createField('input');
				$field->setName('PHP');
				$field->setType('checkbox');
				$field->setValue('PHP');
				echo $field->getElement();

				$field = $form4->createField('label');
				$field->setFor('HTML5: ');
				echo '<br />'. $field->getElement();
				$field = $form4->createField('input');
				$field->setName('HTML5');
				$field->setType('checkbox');
				$field->setValue('HTML5');
				echo $field->getElement();

				$field = $form4->createField('label');
				$field->setFor('CSS3: ');
				echo '<br />'. $field->getElement();
				$field = $form4->createField('input');
				$field->setName('CSS3');
				$field->setType('checkbox');
				$field->setValue('CSS3');
				echo $field->getElement();

				$field = $form4->createField('label');
				$field->setFor('Javascript: ');
				echo '<br />'. $field->getElement();
				$field = $form4->createField('input');
				$field->setName('Javascript');
				$field->setType('checkbox');
				$field->setValue('Javascript');
				echo $field->getElement();

			$form4->endForm();
		?>

	</div>
</body>
</html>


