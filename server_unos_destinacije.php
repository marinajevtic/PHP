<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$destinacija = trim($_POST['destinacija']);
$zemlja = trim($_POST['zemlja']);

if($broker->unesiDestinaciju($destinacija, $zemlja)){
    echo "Uspesno uneta nova destinacija";
}else{
    echo "Doslo je do greske";
}
