<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$destinacija = trim($_POST['destinacija']);
$opis = trim($_POST['opis']);
$cena = trim($_POST['cena']);

if($broker->unesiPlan($opis, $cena , $destinacija)){
    echo "Uspesno unet novi plan";
}else{
    echo "Doslo je do greske";
}
