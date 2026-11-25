<?php
include "db.php";

function salvarCEP($cep, $longradouro, $bairro, $localidade, $uf, $estado, $regiao, $ddd)
{
    global $conexao;

    $sql = "INSERT INTO `enderecos`( `cep`, `longadouro`, `bairro`, `localidade`, `uf`, `estado`, `regiao`, `ddd`) VALUES ('$cep','$longradouro','$bairro','$localidade','$uf','$estado','$regiao','$ddd')";

     $resultado = $conexao->query($sql);
}

function buscarTabela($tabela){
    global $conexao;
    $sql = "SELECT * FROM $tabela";
    $resultado = $conexao->query($sql);
     return $resultado;

}
