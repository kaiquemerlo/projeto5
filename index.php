<?php 
require_once 'classes/Pessoa.class.php';

$dadosPessoa = array(
	'Nome' => array(
		"Kaique",
		"Jose",
		"Maria",
		"Joao",
		"Alfredo",
		"Carlos",
		"Henrique",
		"Murilo",
		"Fernando",
		"Felipe"
	),
	'CPF' => array(
		"42652039814",
		"56789782323",
		"90987987241",
		"92839293813",
		"78346723444",
		"31245643144",
		"97236495867",
		"79772389575",
		"96743654892",
		"58654684536"
	),
	'RG' => array(
		"444513139",
		"313123131",
		"313155453",
		"088273237",
		"083826542",
		"841855469",
		"874163442",
		"894065165",
		"946547154",
		"954284294"
	),
	'Peso' => array(
		50,
		60,
		70,
		80,
		90,
		100,
		110,
		120,
		130,
		140,
	),
	'Idade' => array(
		20,
		22,
		24,
		26,
		27,
		28,
		29,
		30,
		32,
		34
	),
	'Endereco' => array(
		"Rua Sao Sebastiao, 40",
		"Rua Marechal Osorio, 1930",
		"Rua Riskallah Abib, 400",
		"Avenida Kennedy, 4000",
		"Avenida Vergueiro, 500",
		"Rua Atlantida, 70",
		"Rua Senador Alfredo, 900",
		"Avenida Princesa Isabel, 90",
		"Avenida Dom Pedro II, 72",
		"Avenida Castro da Cunha, 667"
	)
);
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Lista de clientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	

<div class="container">
	
	<div class="col-md-12">
		<table class="table table-bordered table-striped">
			<?php 

				$contar = sizeof($dadosPessoa['Nome']); // conta quantas pessoas tem

				for($i = 0; $i < $contar; $i++){
					$pessoa = new Pessoa($dadosPessoa['Nome'][$i], $dadosPessoa['CPF'][$i]);
					$pessoa->listaClientes();
				}

				
				if(isset($_GET['indice'])){
					$indice = $_GET['indice'];
					for($i = 0; $i < $contar; $i++){
						if($indice == $i){
							$pessoa = new Pessoa($dadosPessoa['Nome'][$i], $dadosPessoa['CPF'][$i], $dadosPessoa['RG'][$i], $dadosPessoa['Peso'][$i], $dadosPessoa['Idade'][$i], $dadosPessoa['Endereco'][$i]);
							$pessoa->dadosCliente();
						}
					}
				}

 			?>
		</table>
	</div>

</div>

            <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>
            <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <h3>Modal Body</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
              </div>
            </div>
	


</body>
</html>

