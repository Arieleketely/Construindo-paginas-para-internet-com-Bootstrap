<?php

declare(strict_types=1);

$pdo=require 'connect.php';
$sql='select * from pessoa';

echo '<h3>Pessoas:</h3>';

foreach($pdo->query($sql) as $key=>$value){
    echo  'id:'.$value['idpessoa']
    .'<br>Nome:'.$value['nome'].
    '<br>Telefone:'.$value['telefone'].
    
    
    '<hr>';
 
}