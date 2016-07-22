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
			$request = new Education\Http\Request();
			$validator = new Education\Validation\Validator($request);

			$form1 = new Education\Form\Form($validator);
			$inputNome = new Education\Form\Input(['type' => 'text', 'name' => 'nome']);
			$inputValor = new Education\Form\Input(['type' => 'text', 'name' => 'valor']);
			$inputdesc = new Education\Form\Input(['type' => 'text', 'name' => 'descricao']);
			$inputSubmit = new Education\Form\Input(['type' => 'submit','name' => 'Enviar', 'value' => 'Enviar']);
			//$button = new Education\Form\Button(['type' => 'submit', 'text' => 'enviar', 'value' => 'enviando', 'name' => 'botao']);
			$select = $form1->createField('select', ['name' => "categoria"]);


			$form1->addField($inputNome);
			$form1->addField($inputValor);
			$form1->addField($inputdesc);


			$db = Education\Model\Connect::getInstance();
			$selectDb = new Education\Model\Select($db);
			$op = $selectDb->getOptions();

			foreach ($op as $key => $value) {
				$option = $form1->createField('option', ['value' => $value['id'], 'text' => $value['select']]);
				$select->addOption($option);
			}

			$form1->addField($select);

			$form1->addField($inputSubmit);
			//$form1->addField($button);

			$fieldDefs = array(
			    'nome' => 'Alexandre',
			    'valor' => '35',
			    'descricao' => 'Sapato preto',
			);
			
			$form1->populate($fieldDefs);
			$form1->getValidator()->addRule(array('element' => $inputNome, 'rules' => array(array('rule' => 'is_required'))));
			$form1->getValidator()->addRule(array('element' => $inputValor, 'rules' => array(array('rule' => 'is_numeric'))));
			$form1->getValidator()->addRule(array('element' => $inputdesc, 'rules' => array(array('rule' => 'max_length', 'params' => array('max' => 200)))));
			$form1->render();

	`````````````````````````````


	OBS:

	- Na indução de tipo, apenas coloque a barra invertida (\) quando o tipo for class;
	
========================================================================================================


#Funcionalidades
----------------

Agora que você criou um formulário que é montado dinâmicamente, vamos adicionar mais funcionalidades nele:

- Para cada campo adicionado ao formulário, deve ser possível renderiza-lo separadamente. Você deve criar um método “createField()” e este deve receber parâmetros para a criação do campo (poderemos ter vários tipos de campos).

- Todos os nossos forms agora deverão depender de uma classe chamada “Validator”, que será responsável pela validação dos dados do formulário. Esta classe dependerá de outra classe chamada de “Request”, que representará uma requisição do usuário.

- Crie 4 instancias deste form com os campos que você quiser e renderize. Implementaremos as classes “Validator” e “Request” em exemplos posteriores.

	Restrições & dicas

		- Toda a implementação deve ser feita usando OO (sem uso de funções)
		- Não é permitido usar métodos e atributos estáticos
		- Não é permitido usar os patterns Singleton e/ou Registry
		- Procure fazer classes pequenas.
		- Classes com +300 linhas não serão permitidas
		- Procure fazer métodos pequenos. Métodos com +100 linhas não serão permitidos
		- Use muitas interfaces para confiar na comuniçação/contrato dos seus objetos.
		- Separe as classes em namespaces.

===============================================================================================================================================================================

#Fieldsets
----------

Agora que seu form possui elementos que são renderizados separadamente, vamos fazer o mesmo para um elemento em especial: o fieldset.

Você deve ser capaz de criar um formulário onde chamando o método "createField()" da fase anterior, seja possível você criar fieldsets e popular esses fieldsets com campos, usando mesmo método. 

===============================================================================================================================================================================

#Populate

Nessa fase você deve criar um formulário de cadastro de produto contendo os seguintes campos:

Nome: Texto
Valor: Texto
Descrição: Texto
Categoria: Select, com as opções vindo dinâmicamente de um banco de dados sqlite.

Você deverá ser capaz de popular esse formulário com dados vindo de um array, no momento da exibição do formulário.

Algo como: $form->popular($dados);

Ao popular o formulário você deve exibir mensagens de erro para as seguintes situações:

- Caso o nome do produto não esteja no array ou esteja vazio;
- Caso o valor do produto não seja numérico
- Caso a descrição contenha +200 caracteres.

No seu formulário também deve ser permitido exibir os erros ao topo do formulário em forma de lista (ul) OU cada erro anexado ao campo que ele se refere OU mostrar os erros em forma de lista ao rodapé do formulário.

Estas mensagens de erro devem ser exibidas assim que o formulário é populado.

Recomendacoes:

- Procure usar todos os patterns que foram ensinados até agora para que seu código fique mais organizado
- Faça métodos e classes pequenos


####FALTA TERMINAR o class SELECT#######