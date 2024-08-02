<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Validação simples
    if (empty($name) || empty($email) || empty($phone)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    // Configurações do email
    $to = "matheusalmeida387@gmail.com";
    $subject = "Novo contato do site";
    $message = "Nome: $name\nEmail: $email\nTelefone: $phone";
    $headers = "From: $email";

    // Envia o email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
