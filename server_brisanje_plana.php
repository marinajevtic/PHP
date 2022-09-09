<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$plan = trim($_POST['plan']);

if($broker->obrisiPlan($plan)){
    echo "Uspesno brisanje plana";
}else{
    echo "Doslo je do greske";
}
