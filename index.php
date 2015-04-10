<?php
#Eu ainda não havia visto a parte do curso referente à criação de tags.
#O formulário para o envio está disponível no item projeto fase 1 na seção
#anterior.


//Criando um código qualquer no arquivo.
$array = array("0"=>"a", "1"=>"b", "2"=>"c", "3"=>"d", "4"=>"e", "5"=>"f");

foreach ($array as $chv=>$dado) {
    echo $chv . " - " . $dado."<br />";
}
