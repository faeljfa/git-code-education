<?php
#Eu ainda não havia visto a parte do curso referente à criação de tags.
#O formulário para o envio está disponível no item projeto fase 1 na seção
#anterior.


//Criando um código qualquer no arquivo.
$array = array("a"=>"a", "b"=>"b", "c"=>"c", "d"=>"d");

foreach ($array as $chv=>$dado) {
    echo $chv . " - " . $dado."<br />";
}

//Criando mais qualquer coisa no arquivo.
$array = array("1"=>"Bisão", "2"=>"Elefante", "3"=>"pato", "4"=>"Urso");

foreach ($array as $chv=>$dado) {
    echo $chv . " - " . $dado."<br />";
}
