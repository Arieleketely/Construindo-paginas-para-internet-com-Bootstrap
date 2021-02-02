<?php
$nome = $_GET['nome'];
if(strlen($nome)<=1){
echo "Preencha o nome com no mínimo 2 caracteres.";
}else{
echo "Seu nome \"$nome\" tem ".strlen($nome)." caracteres.";
}
?>