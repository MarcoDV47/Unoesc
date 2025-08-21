<?php
	// 8
	require_once './side/produto.php';

	require_once './side/carro.php';
	require_once './side/aluno.php';
	require_once './side/alunoComplexo.php';
	require_once './side/contaBancaria.php';
	require_once './side/calculadora.php';
	require_once './side/contato.php';
	require_once './side/retangulo.php';
	require_once './side/funcionario.php';
	require_once './side/carrinhoCompras.php';
	require_once './side/livro.php';
	require_once './side/livroComplexo.php';
	require_once './side/conversorTemperatura.php';

	// Primeira folha de atividades
	echo "<h2>Primeira Folha de Atividades</h2>";
	// 1
	echo "Ola, Programacao Orientada a Objetos! <br>";

	// 2
	function apresentarJoao(){
		$nome = "Joao";
		$idade = 20;
		echo "Meu nome e $nome e tenho $idade anos. <br>";
	}
	apresentarJoao();

	// 3, 4, 5, 6
	class Pessoa{
		private $nome;
		private $idade;

		function __construct($nome, $idade){
			$this->nome = $nome;
			$this->idade = $idade;
		}

		function apresentar(){
			echo "Meu nome e $this->nome.";
		}

		function getNome(){
			echo $this->nome;
		}
		
		function getIdade(){
			echo $this->idade;
		}

		function aniversario(){
			$this->idade++;
		}
	}

	// 7 

	$produto1 = new Produto("Revolver", 300, 1);
	$produto1->valorTotal();
	echo "<br>";
	$produto1->exibirDetalhes();
	echo "<br>";

	// 10

	$pessoas = [
		new Pessoa("Joao", 20),
		new Pessoa("Claudio", 40),
		new Pessoa("Antedeguemon", 60)
	];

	for ($i = 0; $i < count($pessoas); $i++){
		$pessoas[$i]->apresentar();
		echo "<br>";
	}

	// Segunda folha de atividades
	echo "<hr><h2>Segunda Folha de Atividades</h2>";

	// 1
	echo "<h3>Exercicio 1:</h3>";

	$meuCarro = new Carro("Volkswagen", "Gol", 2020);  
	$meuCarro->exibirInfo();

	// 2
	echo "<h3>Exercicio 2:</h3>";

	$aluno1 = new Aluno("Ana", 8.5);
	$aluno2 = new Aluno("Pedro", 6.0);
	echo $aluno1->getNome() . ": " .
	($aluno1->verificarAprovacao() ?
	"Aprovado" : "Reprovado");
	echo "<br>";
	echo $aluno2->getNome() . ": " .
	($aluno2->verificarAprovacao() ?
	"Aprovado" : "Reprovado");

	// 3
	echo "<h3>Exercicio 3:</h3> ";

	$conta1 = new ContaBancaria("Marco", 100);
	$conta1->getSaldo();
	$conta1->addSaldo(500);
	echo "<br>";
	$conta1->removeSaldo(100);
	$conta1->getSaldo();

	// 4
	echo "<h3>Exercicio 4:</h3> ";

	$calculadora1 = new Calculadora();
	echo "Soma 1 + 10: ";
	echo $calculadora1->somar(1, 10);
	echo "<br>";
	echo "Subtracao 5 - 2: ";
	echo $calculadora1->subtrair(5, 2);
	echo "<br>";
	echo "Multiplicacao 10 * 20: ";
	echo $calculadora1->multiplicar(10, 20);
	echo "<br>";
	echo "Divisao 50 / 5: ";
	echo $calculadora1->dividir(50, 5);

	// 5
	echo "<h3>Exercicio 5:</h3> ";

	$contatos = [
		new Contato("Marco", 493537, "@gmail.com"),
		new Contato("Lucia", 493638, "@gmail.com"),
		new Contato("Claudia", 499151, "@yahoo.com")
	];

	for ($i = 0; $i < count($contatos); $i++){
		echo $contatos[$i]->getInfo();
	}

	// 6
	echo "<h3>Exercicio 6:</h3> ";

	echo "Quadrado 10 de largura e 5 altura. <br>";
	$retangulo1 = new Retangulo(10, 5);
	echo "Area : ";
	echo $retangulo1->calcularArea();
	echo ".<br>";
	echo "Perimetro: ";
	echo $retangulo1->calcularPerimetro();
	echo ".";

	// 7 
	echo "<h3>Exercicio 7:</h3> ";

	$funcionario1 = new Funcionario("Claudio", 3000);
	echo "Claudio comecou com 3000 e agora tem: ";
	echo $funcionario1->ajustarSalario(1.5);

	// 8
	echo "<h3>Exercicio 8:</h3> ";
	
	$carrinho1 = new Carrinho();
	$carrinho1->adicionarItem(new Item("Sabao", 10));
	$carrinho1->adicionarItem(new Item("Sabonete", 20));
	$carrinho1->adicionarItem(new Item("Saboneteira", 5));

	echo "Sabao 10 + Sabonete 20 + Saboneteira 5 = ";
	echo $carrinho1->somarValorTotal();

	// 9
	echo "<h3>Exercicio 9:</h3> ";

	$livros = array(
		new Livro("Crime e Castigo", "Dostoiévski", 1800),
		new Livro("Dom Quixote", "Manuel Sevante de la Mancha", 1700),
		new Livro("Manual do Gaiteiro", "Fabricio", 2016),
		new Livro("Altura", "Quebrick", 2020),
	);

	function exibirLivrosAposData($arrayAlvo, $data){
		for($i = 0; $i < count($arrayAlvo); $i++){
			if ($arrayAlvo[$i]->getAno() > $data) {
				echo $arrayAlvo[$i]->getNome();
				echo "<br>";
			}
		}
	}

	exibirLivrosAposData($livros, 2015);

	// 10
	echo "<h3>Exercicio 10:</h3> ";
	
	$conversorTemperatura = new conversorTemperatura();
	echo "100 Celcius para Fahrenheit: ";
	echo $conversorTemperatura->converterParaFahrenheit(100);
	echo "<br>";
	echo "300 Fahrenheit para Celcius: ";
	echo $conversorTemperatura->converterParaCelcius(300);

	echo "<hr><h2>Aula Classes:</h2>";
	echo "<h3>Exercicio 1:</h3>";

	$conta2 = new ContaBancaria("Marco", 100);
	$conta2->exibirDados();
	$conta2->addSaldo(50);
	echo "<br>";
	$conta2->exibirDados();

	echo "<h3>Exercicio 2:</h3>";

	$alunoComplexo1 = new AlunoComplexo("Marco", 44010);
	$alunoComplexo2 = new AlunoComplexo("Fabricio", 43390);

	$alunoComplexo1->adicionarNota(rand(0, 10));
	$alunoComplexo1->adicionarNota(rand(0, 10));
	$alunoComplexo2->adicionarNota(rand(0, 10));
	$alunoComplexo2->adicionarNota(rand(0, 10));
	echo $alunoComplexo1->situacao();
	echo "<br>";
	echo $alunoComplexo2->situacao();

	echo "<h3>Exercicio 3:</h3>";

	$livroComplexo1 = new LivroComplexo(
		"Brás Cubas",
		"Machado de Assis",
		1890,
		200,
		false
	);
	$livroComplexo1->setTitulo("Dom Casmurro");
	$livroComplexo1->setAutor("Machado de Assis");
	$livroComplexo1->setAnoPublicacao(1899);
	$livroComplexo1->setNumeroPaginas(256);
	$livroComplexo1->setDisponivel(true);
	echo $livroComplexo1->getTitulo();
	echo "<br>";
	echo $livroComplexo1->getAno();
	echo "<br>";
	echo $livroComplexo1->getAutor();
	echo "<br>";
	// Teste de validação
	try {
	 $livroComplexo1->setAnoPublicacao(2030);
	} catch (Exception $e) {
	 echo "Erro: " . $e->getMessage();
}

?>