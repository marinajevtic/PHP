<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$planovi = $broker->pretraga('SVE', 'asc');

foreach ($planovi as $item) {
    ?>
<option value="<?= $item->id ?>"><?= $item->destinacija . "($item->zemlja) Cena: " .$item->cena?></option>
<?php
}