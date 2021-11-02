<?php

require_once 'form.php';

echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['subject'] .
    ". Un de nos conseillers vous contactera soit à l’adresse " . $_POST['mail']  . " ou par téléphone au " . $_POST['tel'] .
    " dans les plus brefs délais pour traiter votre demande : " . $_POST['message'];
