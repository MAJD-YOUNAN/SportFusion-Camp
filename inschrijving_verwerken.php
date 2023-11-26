<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $kampKeuze = $_POST["kamp_keuze"];
    $naamKamp = $_POST["naam_kamp"];
    $naamDeelnemer = $_POST["naam_deelnemer"];
    $geboortedatum = $_POST["geboortedatum"];
    $medischeGeschiedenis = $_POST["medische_geschiedenis"];
    $naamOuder = $_POST["naam_ouder"];
    $emailOuder = $_POST["email_ouder"];
    $telefoonOuder = $_POST["telefoon_ouder"];

    // Construct the email message
    $subject = "Inschrijvingsformulier - $naamDeelnemer";
    $message = "Soort Kamp: $kampKeuze\n";
    $message .= "Naam Kamp: $naamKamp\n";
    $message .= "Naam Deelnemer: $naamDeelnemer\n";
    $message .= "Geboortedatum: $geboortedatum\n";
    $message .= "Medische Geschiedenis: $medischeGeschiedenis\n";
    $message .= "Naam Ouder: $naamOuder\n";
    $message .= "E-mail Ouder: $emailOuder\n";
    $message .= "Telefoon Ouder: $telefoonOuder\n";

    // Set additional email headers
    $headers = "From: webmaster@example.com"; // Replace with your email address

    // Send the email
    $success = mail("majd2000younan@gmail.com", $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($success) {
        header("Location: thank_you.php");
        exit;
    } else {
        echo "Error sending email. Please try again later.";
    }
}
?>
