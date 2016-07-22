PASSO A PASSO:

#Criacional
-----------

Factory Method
==============
1 - Criar interface com metodos comuns as duas maneiras de implementar.

2 - Criar classes com as duas maneiras de implementar, exemplo(FormField, Form)

3 - Criar uma classe abstract para estender as duas classes,
	com metodo abstrato para CriarForm sem implementação
	e um outro metodo getForm que retorna um CriarForm da propria intancia

4 - Criar um factory para cada classe de implementação, ex(FormFieldFactory, FormFactory)
	Com as impletações da class abstract, 
	no metodo Criar Form retorna o construtor da factory Criada 
	e o getForm retorna o metodo CriarForm do mesmo objeto

Para instaciar o obejto de form agora eu intacio a factory e uso os metodos da classe criada;
	exemplo:
		$factory = new FormFieldFactory;

		$form = $factory->getForm;

Repare que ainda que eu mude o metodo

OBS: verificar se o problema poderia ser resolvido apenas implementando uma interface.



#Estrutural
-----------

Adapter
=======
Resolve o seguinte problema, vc tem duas classes que contém métodos diferentes que executam a mesma tipo taferefa;

1 - Criar Interface com o nome tipo comun + Adapter (ex: class FaceApi, class TwitterApi e Interface ApiAdapter), com os metodos que devem ser comuns.
2 - Criar classe com o nome da classe a ser adaptada + Adapter (ex: FaceApiAdapter, TwitterApiAdapter), implementando a Interface criada no passo 1, nestes metodos devem fazer exatamente o que é feito na classe que esta sendo adaptada, porém deve ser chamada pelo obeto passado pelo construtorno passo 3.
3 - No construtor das classes Adapter é preciso passar o objeto do tipo da classe adaptada, ex:
		//na classe FaceApiAdapter
		__construct(\FaceApi $api)
		{	$this->api = $api	}

		//na classe TwitterApiAdapter
		__construct(\TwitterApi $api)
		{	$this->api = $api;	}