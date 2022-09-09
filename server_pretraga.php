<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$destinacija = trim($_GET['destinacija']);
$sortiranje = trim($_GET['sortiranje']);

$planovi = $broker->pretraga($destinacija, $sortiranje);
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Destinacija</th>
            <th>Opis</th>
            <th>Cena</th>
        </tr>
    </thead>
    <tbody>



<?php

foreach ($planovi as $item) {
    ?>
    <tr>
        <td><?= $item->destinacija . "($item->zemlja)"?></td>
        <td><?= $item->opis ?></td>
        <td><?= $item->cena ?></td>
    </tr>
    <?php
}
?>
    </tbody>
</table>
