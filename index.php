<?php 

require './__class/Api.php';

/**
 * Instacia o objeto passando o parametro que contém o conteudo 
 * de consulta. No exemplo abaixo, o filme Maze Runner está sendo
 * pesquisado.
 */
$text = 'Maze Runner';
$api    = new Api($text);

// Busca dos dados
$data   = $api->getDados();

// Decodificação
$data = json_decode($data);

// Impressão do array de dados
echo '<pre>';
print_r($data);
echo '<pre>';

