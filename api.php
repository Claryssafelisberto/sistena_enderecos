<?php 

function buscarCep($cep){
    if (strlen ($cep) === 8){

        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/"), true);

        if(isset($dados['erro'])){

            return "Cep nao encontrado!!";
        }else{
            return $dados;
        }
    }
}



?>