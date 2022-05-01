<?php

class CD extends Product
{
    private string $artiest;
    private int $AantalSongs;
    private string $label;
    public function __construct($naam = "???", $aantalInVoorraad = 0, $minimumVoorraad = 0, $prijs = 0, $actief = false, $artiest = "???", $AantalSongs = 0, $label = "???")
    {
        parent::__construct($naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief);
        $this->artiest = $artiest;
        $this->AantalSongs = $AantalSongs;
        $this->label = $label;
    }
    public function __toString(): string
    {
        return parent::__toString() . ", Artiest(en): " . $this->artiest . ", Aantal songs: " . $this->AantalSongs . ", Label: " . $this->label;
    }

    public function getArtiest()
    {
        return $this->artiest;
    }
    public function setArtiest($artiest)
    {
        $this->artiest = $artiest;
    }
    public function getAantalSongs()
    {
        return $this->AantalSongs;
    }
    public function setAantalSongs($AantalSongs)
    {
        $this->AantalSongs = $AantalSongs;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }
}