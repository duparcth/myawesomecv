<?php

namespace AppBundle\Entity;

class Formation {
    
    private $id;
    private $name;
    private $dateDebut;
    private $dateFin;
    private $lieu;

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getDateDebut()
    {
        return $this->dateDebut;
    }

    function getDateFin()
    {
        return $this->dateFin;
    }

    function getLieu()
    {
        return $this->lieu;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }
}
