<?php 
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
$url = $_SERVER['REQUEST_URI'];
$url = str_replace("/", '', $url);
 ?>
