<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['message']);

    // Endereço de email para onde a mensagem será enviada
    $to = "seuemail@dominio.com"; // Substitua pelo seu endereço de email
    $subject = "Nova mensagem de contato de $nome";
    $message = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Envia o email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição não suportado.";
}
?>
