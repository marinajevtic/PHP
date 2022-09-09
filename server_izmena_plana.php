<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$plan = trim($_POST['plan']);
$cena = trim($_POST['cena']);

if($broker->izmeniCenuPlana($cena , $plan)){
    echo "Uspesno izmenjena cena plana";
}else{
    echo "Doslo je do greske";
}
