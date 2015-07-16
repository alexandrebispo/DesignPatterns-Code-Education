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
			margin: 5% auto;
			font-family: sans-serif;
			font-size: 14px;
			color: #444;
		}

		form{
			margin: 5% 0 0 0;
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
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<?php 
			$request = new Education\Http\Request();
			$validator = new Education\Validation\Validator($request);
			$form = new Education\Form\Form($validator);

				$field2 =	$form->createField('input');
							$field2->setName('Input Nome');
							$field2->setType('text');
							$field2->setValue('');
							$field2->setPlaceholder('Nome');

				$field1 =	$form->createField('input');
							$field1->setName('Input Sobrenome');
							$field1->setType('text');
							$field1->setValue('');
							$field1->setPlaceholder('Sobrenome');

				$field3 =	$form->createField('input');
							$field3->setName('Enviar Form');
							$field3->setType('submit');
							$field3->setValue('Enviar');
							

					$formulario = new Education\Form\Fieldset('Fieldset Personalizado:');
					$formulario->add($field2->getElement());
					$formulario->add($field1->getElement());
					$formulario->add($field3->getElement());
					
						echo $form->openForm();
							echo $formulario->getElement();
						echo $form->openForm();
		?>
			</div>
		</div>
			

	</div>
</body>
</html>


