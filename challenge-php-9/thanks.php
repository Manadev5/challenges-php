<?php

   switch($_POST){

    case empty($_POST['user_name']) :
        echo " champ Nom vide";
        break;

    case strlen($_POST['user_name']) < 2 :
        echo " le nom n'est pas assez long";
        break;
    
    case empty($_POST['user_email']):
        echo " champ email vide";
    
    case !filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) :
        echo "format email invalid";
        break;

    case empty($_POST['phone_number']):
        echo " champ email vide";
        break;


    case strlen($_POST['phone_number']) < 10 :
        echo " le numero n'est pas assez long";
        break;


    case empty($_POST['user_message']):
        echo " champ message vide";
        break;
        

    default:
        echo "Merci $_POST[user_name] de nous avoir contacté à propos de “$_POST[user_subject]”.

        Un de nos conseiller vous contactera soit à l\'adresse $_POST[user_email] ou par téléphone au $_POST[phone_number] dans les plus brefs délais pour traiter votre demande : 
        
        $_POST[user_message]" ;

   }

    




