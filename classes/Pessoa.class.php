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
	public function listaClientes($odem=null){
		self::$indice ++;
		$i = self::$indice - 1;
		echo "<tr><td><a href='index.php?indice=$i'>$this->nome</a></td></tr>";
	}

	// Método responsavel por listar os dados gerais dos clientes
	public function dadosCliente(){
		$layout = <<<EOF
		<tr>
			<td>Nome:</td>
			<td>$this->nome</td>
		</tr>
		<tr>
			<td>CPF:</td>
			<td>$this->cpf</td>
		</tr>
		<tr>
			<td>RG:</td>
			<td>$this->rg</td>
		</tr>
		<tr>
			<td>Peso:</td>
			<td>$this->peso</td>
		</tr>
		<tr>
			<td>Idade:</td>
			<td>$this->idade</td>
		</tr>
		<tr>
			<td>Endereco:</td>
			<td>$this->endereco</td>
		</tr>
EOF;

		echo $layout;
	}

}



 ?>