<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$destinacije = $broker->vratiDestinacije();

foreach ($destinacije as $item) {
    ?>
<option value="<?= $item->destinacija_id ?>"><?= $item->destinacija . "($item->zemlja)"?></option>
<?php
}