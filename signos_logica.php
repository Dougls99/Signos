<?php

// carregando arquivo xml
$xml = simplexml_load_file('signos.xml');

$vNome = $_POST["nome"];
$vData_nasc = strtotime($_GET['data_nasc']);
$vData_nasc = date('m/d', $vData_nasc);

$signosUsuario = [];

foreach($xml->signo as $signo) {

  $compararDatas = compararDatas($signo->dataInicio, $signo->dataFim, $dataUsuario);

  if($compararDatas) {
    $signosUsuario = [
      'nome' => $signo ->signoNome,
      'descricao' => $signo->descricao,
      'dataInicio' => $signo->dataInicio,
      'dataFim' => $signo->dataFim
    ];
  }

  function compararDatas(string $dataInicio, string $dataFim, string $dataUsuario): bool {
    $dataUsuario = strtotime($dataUsuario);
    $dataInicio = converterDataSigno($dataInicio);
    $dataFim    = converterDataSigno($dataFim);

    $condInicio = $dataUsuario >= $dataInicio;
    $condFinal = $dataUsuario <= $dataFim;

    $retorno = false;

    if($dataInicio > $dataFim){
      $retorno = $condInicio || $condFinal;
    } else {
      $retorno = $condInicio && $condFinal;
    }
    return $retorno;
  }

  function converterDataSigno(string $date): int
    {
      $exDate = explode('/', $date);
      $invertDate = $exDate[1] . '/' . $exDate[0];
      return strtotime($invertDate);
    } 
}
include 'resultado.php';
?>