<?php
$servidor='localhost';
$usuario='root';
$senha='';
$banco='sistema';

$conexao= new mysqli($servidor,$usuario,$senha,$banco);
if($conexao->connect_error){
    die("Erro ao conectar com o banco de dados!");
} 
if(isset($conexao)){
   /* echo "<script>
        alert('Banco de dados conectado com sucesso!');
        window.location.href = 'index.html';
    </script>";*/
}
?>
