<?php 
require_once 'classes/Pessoa.class.php';
require_once 'dados_array.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Lista de clientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	

<div class="container">
	
	<div class="col-md-12" style="margin:10px 0 0 0;">
		<table class="table table-bordered table-striped">
		<tr>
			<th>Lista geral 
			<form action="<?php echo $url;?>" method="get" enctype="multipart/form-data">
				<select name="ordem" class="">
					<option selected="" value="desc">Ordenação</option>
					<option value="asc" name="asc">Ascendente</option>
					<option value="desc" name="asc">Descrescente</option>
				</select>
				<button type="submit" class="btn btn-xs btn-default">OK</button>
				</form>
			</th>
		</tr>
			<?php 
				$contar = sizeof($dadosPessoa['Nome']); // conta quantas pessoas tem

				if(!isset($_GET['ordem']) || $_GET['ordem'] == 'asc'){
					for($i = 0; $i < $contar; $i++){					
						$pessoa = new Pessoa($dadosPessoa['Nome'][$i], $dadosPessoa['CPF'][$i]);
						$pessoa->listaClientes();
					}
				}elseif(isset($_GET['ordem']) || $_GET['order'] == 'desc'){
					for($i = 9; $i > 0; $i--){					
						$pessoa = new Pessoa($dadosPessoa['Nome'][$i], $dadosPessoa['CPF'][$i]);
						$pessoa->listaClientes();
					}
				}
			?>
		</table>
	

		<?php 
			if(isset($_GET['indice'])){
				$indice = $_GET['indice'];
			?>
			<table class="table table-bordered table-striped"> 
				<tr>
					<th colspan="2">Detalhes do cliente:</th>
				</tr>
			<?php
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
	


</body>
</html>

