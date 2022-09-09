<?php


class BrokerBaze
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost', 'root','','planer');
        $this->konekcija->set_charset('utf8');
    }

    public function vratiNiz($sql)
    {
        $niz = [];

        $res = $this->konekcija->query($sql);

        while($red = $res->fetch_object()){
            $niz[] = $red;
        }

        return $niz;
    }

    public function pretraga($destinacija, $sortiranje)
    {
        $sql = "SELECT * FROM planovi p join destinacije d on p.destinacija_id = d.destinacija_id join zemlje z on d.zemlja_id = z.zemlja_id";

        if($destinacija != 'SVE'){
            $sql .= " WHERE p.destinacija_id = " . $destinacija;
        }

        $sql .= " ORDER BY p.cena " . $sortiranje;

        return $this->vratiNiz($sql);

    }

    public function vratiDestinacije()
    {
        return $this->vratiNiz("SELECT * FROM destinacije d join zemlje z on d.zemlja_id = z.zemlja_id");
    }

    public function vratiZemlje()
    {
        return $this->vratiNiz("SELECT * FROM zemlje");
    }

    public function unesiDestinaciju($destinacija, $zemlja_id)
    {
        return $this->konekcija->query("INSERT INTO destinacije VALUES (null, '$destinacija', $zemlja_id)");
    }

    public function unesiPlan($opis, $cena, $destinacija_id)
    {
        return $this->konekcija->query("INSERT INTO planovi VALUES (null, '$opis', $cena, $destinacija_id)");
    }
    public function izmeniCenuPlana($cena, $plan_id)
    {
        return $this->konekcija->query("UPDATE planovi SET cena = $cena WHERE id=$plan_id");
    }
    public function obrisiPlan($plan_id)
    {
        return $this->konekcija->query("DELETE FROM planovi WHERE id=$plan_id");
    }
}