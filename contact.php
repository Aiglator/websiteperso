<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "contact@rayanchattaoui.com"; // Remplace par ton adresse email
    $subject = "Nouveau message du formulaire de contact";

    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    // Protection simple anti-injection de header
    if (preg_match("/[\r\n]/", $email)) {
        die("Adresse email invalide");
    }

    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
