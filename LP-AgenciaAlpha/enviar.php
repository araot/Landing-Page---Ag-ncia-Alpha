<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    // Verifica se campos estão preenchidos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); history.back();</script>";
        exit;
    }

    // Aqui você pode armazenar em banco de dados ou enviar por e-mail
    // Simulando envio com uma mensagem:
    $sql= 'INSERT INTO cliente (nome, email, mensagem) VALUES (?,?,?)';
    $stmt=$conexao->prepare($sql);
    $stmt->bind_param("sss",$nome, $email,$mensagem);
    
if($stmt->execute()){
echo "<script>
        alert('Mensagem enviada com sucesso! Obrigado, $nome.');
        window.location.href = 'index.html';
    </script>";
} else {
    echo "<script>
        alert('Acesso inválido.');
        window.location.href = 'index.html';
    </script>";
}

}

?>
