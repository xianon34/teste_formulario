<?php
$dbhost ='LocalHost';
$dbUsername ='root';
$dbPassword ='';
$dbName ='teste_formulario';

$conexao= new mysqli ($dbhost,$dbUsername,$dbPassword,$dbName);
IF($conexao->connect_errno)
{
    echo "erro";
}
else
{
    echo "Conectado";
}
 ?>