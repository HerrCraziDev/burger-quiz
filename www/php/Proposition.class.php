<?php

class Proposition
{
    private $id, $libelle, $reponse, $active;

    public function __construct($id, $libelle, $reponse, $active)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->reponse = $reponse;
        $this->active = $active;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getReponse()
    {
        return $this->reponse;
    }
}