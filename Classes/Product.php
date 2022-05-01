<?php
class Product
{
    static int $itemnr = 0;
    private string $naam;
    private int $aantalInVoorraad;
    private int $minimumVoorraad;
    private float $prijs;
    private bool $actief;

    public function __construct($naam = "???", $aantalInVoorraad = 0, $minimumVoorraad = 0, $prijs = 0, $actief = false)
    {
        $this->naam = $naam;
        $this->aantalInVoorraad = $aantalInVoorraad;
        $this->minimumVoorraad = $minimumVoorraad;
        $this->prijs = $prijs;
        $this->actief = $actief;
        self::$itemnr++;
    }
    public function __toString(): string
    {
        $actief = $this->actief ? "Actief" : "Niet actief";
        return "Product naam: $this->naam, ".$this->aantalInVoorraad."x in voorraad, prijs: $this->prijs €, actief: $actief\r\n";
    }

    public function getNaam()
    {
        return $this->naam;
    }
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }
    public function getAantalInVoorraad()
    {
        return $this->aantalInVoorraad;
    }
    public function setAantalInVoorraad($aantalInVoorraad)
    {
        $this->aantalInVoorraad = $aantalInVoorraad;
    }
    public function getMinimumVoorraad()
    {
        return $this->minimumVoorraad;
    }
    public function setMinimumVoorraad($minimumVoorraad): void
    {
        $this->minimumVoorraad = $minimumVoorraad;
    }
    public function getPrijs()
    {
        return $this->prijs;
    }
    public function setPrijs($prijs): void
    {
        $this->prijs = $prijs;
    }
    public function getActief()
    {
        return $this->actief;
    }
    public function setActief($actief): void
    {
        $this->actief = $actief;
    }
    public function getWaarde(): float|int
    {
        return $this->aantalInVoorraad * $this->prijs;
    }
}