<?php
    require_once './Veiculo.php';
?>
<?php

class Carro extends Veiculo{
    function ligar_limpador(){
        echo'limpando em 321 o ';
    }
   
}
 $carro = new Carro();
 $carro->modelo="corsa";
 $carro->ano="2018";
 $carro->cor="vermelho";
 $carro->modelo="corsa";
 $carro->ligar_limpador();
 echo $carro->modelo;
