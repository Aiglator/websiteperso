<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "contact@rayanchattaoui.com"; // Ton adresse
    $subject = htmlspecialchars($_POST["subject"] ?? "Nouveau message du formulaire");
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    if (preg_match("/[\r\n]/", $email)) {
        die("Adresse email invalide.");
    }

    $body = "Nom: $name\nEmail: $email\nObjet: $subject\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.php?success=" . urlencode("Message envoyé avec succès."));
    } else {
        header("Location: index.php?success=" . urlencode("Erreur lors de l'envoi du message."));
    }
    exit;
} else {
    echo "Méthode non autorisée.";
}
?>
