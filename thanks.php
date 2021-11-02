<?php

require_once 'form.php';

$lastNameErr = $firstNameErr = $emailErr = $telErr = $subjectErr = $messageErr = "";
$lastName = $firstName = $email = $tel = $subject = $message = "";

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_lastname"])) {
        echo $lastNameErr = "Veuillez renseigner votre nom <br>";
    } else {
        $lastName = test_input($_POST["user_lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            echo $lastNameErr = "Nom : Seuls les espaces et les lettres sont autorisés <br>";
        }
    }
    if (empty($_POST['user_firstname'])) {
        echo $firstNameErr = "Veuillez renseigner votre prénom <br>";
    } else {
        $firstName = test_input($_POST["user_firstname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            echo $firstNameErr = "Prénom : Seuls les espaces et les lettres sont autorisés <br>";
        }
    }
    if (empty($_POST["mail"])) {
        echo $emailErr = "Veuillez renseigner une adresse e-mail <br>";
    } else {
        $email = ($_POST["mail"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $emailErr = "Email : Format invalide <br>";
        }
    }
    if (empty($_POST["tel"])) {
        echo $telErr = "Veuillez renseigner un  numéro de téléphone <br>";
    } else {
        $tel = ($_POST["tel"]);
        if (!preg_match("/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/", $tel)) {
            echo  $telErr = "Téléphone : Format invalide <br>";
        }
    }
    if (empty($_POST["subject"])) {
        echo $subjectErr = "Veuillez sélectionner un sujet <br>";
    } else {
        $subject = test_input($_POST["subject"]);
    }
    if (empty($_POST["message"])) {
        echo $messageErr = "Veuillez renseigner un message <br>";
    } else {
        $message = test_input($_POST["message"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $message)) {
            echo $messsageErr = "Seuls les espaces et les lettres sont autorisés <br>";
        }
    }
}

if (isset($_POST['submit']) && $lastName && $firstName && $email && $tel && $subject && $message) {

    echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['subject'] .
        ". Un de nos conseillers vous contactera soit à l’adresse " . $_POST['mail']  . " ou par téléphone au " . $_POST['tel'] .
        " dans les plus brefs délais pour traiter votre demande : " . $_POST['message'];
}
