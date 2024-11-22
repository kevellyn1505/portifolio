<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Validação simples (pode ser melhorada)
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    // Enviar a mensagem para um e-mail (para teste, envia para o próprio e-mail)
    $to = "seuemail@dominio.com"; // Coloque o e-mail de destino
    $subject = "Mensagem de Contato - Portfólio";
    $message = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar mensagem.";
    }
} else {
    echo "Método inválido.";
}
?>
