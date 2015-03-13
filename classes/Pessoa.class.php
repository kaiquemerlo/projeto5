<?php 
class Pessoa{
	// Atributos da classe
	static $indice;
	public $nome;
	public $cpf;
	public $rg;
	public $peso;
	public $idade;
	public $endereco;


	// Método construtor, ele é carregado quando a classe é instanciada
	public function __construct($nome, $cpf, $rg=null, $peso=null, $idade=null, $endereco=null){
		$this->nome     = $nome;
		$this->cpf      = $cpf;
		$this->rg       = $rg;
		$this->peso     = $peso;
		$this->idade    = $idade;
		$this->endereco = $endereco;
	}

	// Método responsavel por listar os clientes e seus respectivos links
	public function listaClientes(){
		self::$indice ++;
		$i = self::$indice - 1;
		echo "<tr><td><a href='index.php?indice=$i'>$this->nome</a></td></tr>";
	}

	// Método responsavel por listar os dados gerais dos clientes
	public function dadosCliente(){
		echo $this->nome;
		echo $this->cpf;
		echo $this->rg;
		echo $this->peso;
		echo $this->idade;
		echo $this->endereco;
	}

}



 ?>