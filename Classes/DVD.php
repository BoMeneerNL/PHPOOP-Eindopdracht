<?php
class DVD extends Product
{
    private int $lengteInMinuten;
    private int $jaarUitgifte;
    private string $filmStudio;
    public function __construct($naam = "???", $aantalInVoorraad = 0, $minimumVoorraad = 0, $prijs = 0, $actief = false, $lengteInMinuten = 0, $jaarUitgifte = 0, $filmStudio = "")
    {
        parent::__construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief);
        $this->lengteInMinuten = $lengteInMinuten;
        $this->jaarUitgifte = $jaarUitgifte;
        $this->filmStudio = $filmStudio;
    }
    public function getLengteInMinuten()
    {
        return $this->lengteInMinuten;
    }
    public function setLengteInMinuten($lengteInMinuten)
    {
        $this->lengteInMinuten = $lengteInMinuten;
    }
    public function getJaarUitgifte()
    {
        return $this->jaarUitgifte;
    }
    public function setJaarUitgifte($jaarUitgifte)
    {
        $this->jaarUitgifte = $jaarUitgifte;
    }
    public function getFilmStudio()
    {
        return $this->filmStudio;
    }
    public function setFilmStudio($filmStudio)
    {
        $this->filmStudio = $filmStudio;
    }
    public function getWaarde(): float|int
    {
        return ($this->getLengteInMinuten() * $this->getPrijs()) * 1.05;
    }
    public function getTimestamps(): string{
        $duration = $this->getLengteInMinuten();
        $hours = floor($duration / 60);
        $minutes = $duration % 60;
        return $hours . ":" . (strlen($minutes) == 1 ? "0$minutes" : $minutes);
    }
    public function __toString(): string
    {
        $timestamp = $this->getTimestamps();
        return parent::__toString() . ", Lengte: $timestamp (U:M), Uitgegeven op: $this->jaarUitgifte, Filmstudio: $this->filmStudio";
    }
}