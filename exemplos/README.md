PASSO A PASSO:

Factory Method


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