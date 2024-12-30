<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
   
    $message = htmlspecialchars($_POST['message']);

    $to = "franckjunior849@gmail.com"; // Remplacez par votre adresse email
    $subject = "Nouveau message de contact";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

 
    $body = "Nom: $nom\n";
    $body = "Prenom: $prenom\n";
    $body .= "Email: $email\n\n";
   
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message. Nous vous répondrons bientôt.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }
} else {
    echo "Accès non autorisé.";
}
?>
