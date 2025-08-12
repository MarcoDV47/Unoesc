<?php
	require_once './side/produto.php';
	require_once './side/carro.php';
	require_once './side/aluno.php';
	require_once './side/contaBancaria.php';
	require_once './side/calculadora.php';
	require_once './side/contato.php';
	require_once './side/retangulo.php';
	require_once './side/funcionario.php';
	require_once './side/carrinhoCompras.php';
	require_once './side/livro.php';
	require_once './side/conversorTemperatura.php';

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
			echo "Meu nome e $this->nome";
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

	// 1
	echo "<br><br> <strong>Exercicio 1:</strong> <br><br>";

	$meuCarro = new Carro("Volkswagen", "Gol", 2020);  
	$meuCarro->exibirInfo();

	// 2
	echo "<br><br><br> <strong>Exercicio 2:</strong> <br><br>";

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
	echo "<br><br><br> <strong>Exercicio 3:</strong> <br><br>";

	$conta1 = new ContaBancaria("Marco", 100);
	$conta1->getSaldo();
	$conta1->addSaldo(500);
	echo "<br>";
	$conta1->removeSaldo(100);
	$conta1->getSaldo();

	// 4
	echo "<br><br><br> <strong>Exercicio 4:</strong> <br><br>";

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
	echo "<br><br><br> <strong>Exercicio 5:</strong> <br><br>";

	$contatos = [
		new Contato("Marco", 493537, "@gmail.com"),
		new Contato("Lucia", 493638, "@gmail.com"),
		new Contato("Claudia", 499151, "@yahoo.com")
	];

	for ($i = 0; $i < count($contatos); $i++){
		echo $contatos[$i]->getInfo();
	}

	// 6
	echo "<br><br> <strong>Exercicio 6:</strong> <br><br>";

	echo "Quadrado 10 de largura e 5 altura. <br>";
	$retangulo1 = new Retangulo(10, 5);
	echo "Area : ";
	echo $retangulo1->calcularArea();
	echo ".<br>";
	echo "Perimetro: ";
	echo $retangulo1->calcularPerimetro();
	echo ".";

	// 7 
	echo "<br><br><br> <strong>Exercicio 7:</strong> <br><br>";

	$funcionario1 = new Funcionario("Claudio", 3000);
	echo "Claudio comecou com 3000 e agora tem: ";
	echo $funcionario1->ajustarSalario(1.5);

	// 8
	echo "<br><br><br> <strong>Exercicio 8:</strong> <br><br>";
	
	$carrinho1 = new Carrinho();
	$carrinho1->adicionarItem(new Item("Sabao", 10));
	$carrinho1->adicionarItem(new Item("Sabonete", 20));
	$carrinho1->adicionarItem(new Item("Saboneteira", 5));

	echo "Sabao 10 + Sabonete 20 + Saboneteira 5 = ";
	echo $carrinho1->somarValorTotal();

	// 9
	echo "<br><br><br> <strong>Exercicio 9:</strong> <br><br>";

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
	echo "<br><br> <strong>Exercicio 10:</strong> <br><br>";
	
	$conversorTemperatura = new conversorTemperatura();
	echo "100 Celcius para Fahrenheit: ";
	echo $conversorTemperatura->converterParaFahrenheit(100);
	echo "<br>";
	echo "300 Fahrenheit para Celcius: ";
	echo $conversorTemperatura->converterParaCelcius(300);
?>