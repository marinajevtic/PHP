<?php
include 'BrokerBaze.php';

$broker = new BrokerBaze();

$zemlje = $broker->vratiZemlje();

foreach ($zemlje as $item) {
    ?>
<option value="<?= $item->zemlja_id ?>"><?= $item->zemlja?></option>
<?php
}