<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <h1>Contactez-nous</h1>
    <p>Pour toute demande, remplissez le formulaire ci-dessous.</p>

    <form method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="sujet" placeholder="Sujet" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <input type="submit" value="Envoyer le message">
    </form>

<?php
//Si le formulaire a été soumis

ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);
ini_set('sendmail_from', 'matarilungungu@gmail.com');

if (isset($_POST["message"])) {
    $message = "Ce message a été envoyer via la page du site voilaevents.com
    Nom : " . $_POST["nom"] . "
    Email : " . $_POST["email"] . "
    Message : " . $_POST["message"];

    $retour = mail("matarilungungu@gmail.com", $_POST["sujet"], $message, "From:contact@voilaevents.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
    if ($retour) {
        echo "<p>L'email a bien été envoyé.</p>";
    }
}
?>
    
</body>
</html>
