#Formulário básico
==================

Nessa fase, você deverá criar uma classe(s) que seja responsável por gerar um formulário HTML de forma totalmente dinâmica.

Uma vez que você criar o objeto de seu formulário, você poderá chamar métodos para adicionar um novo campo, especificando seu tipo, entre outros;

Essa classe deverá possuir um método chamado render, esse método terá o objetivo de gerar o código HTML do formulário, baseado nos campos adicionados anteriormente.

Não deixe de tentar utilizar os conceitos de patterns e design aprendidos até o momento, para que o projeto possa evoluir de forma mais estruturada.


Formas de usar:
--------------
	Instancie um objeto do tipo form.
	Instacie objeto do tipo label, input, select, textarea, button.
		Passando exatamente os paramentos para cada um deles:
			- label: For
			- input: type, name, value, placeholder
			- select: value => O valor e o texto do option serão sempre os mesmos.
			- textarea: cols, name, rows, placeholder
			- button: type, name, value
	Adicionar o objeto do tipo label, input, select, textarea ou button a um metodo addElement do objeto form.
	E por fim, chamar o metodo render() do objeto form


	Como demostrado no exemplo abaixo:

	``````````````````````````````````
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

	`````````````````````````````



