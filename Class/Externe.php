<?php

require_once('class/Collaborateur.php');

class Externe extends Collaborateur
{
    private $compagnyName;
    private $adress;
    private $number;
    private $departement;

    function __construct($id,$name, $firstname, $date, $sexe, $compagnyName, $adress, $number, $departement)
    {
        parent::__construct($id,$name, $firstname, $date, $sexe);

        $this->compagnyName=$compagnyName;
        $this->adress=$adress;
        $this->number=$number;
        $this->departement=$departement;
    }

    // les get et les set
    function get_compagnyName()
    { return $this->compagnyName;
    }
    function set_compagnyName($compagnyName)
    { $this->compagnyName=$compagnyName ;
    }

    function get_adress()
    { return $this->adress ;
    }
    function set_adress($adress)
    { $this->adress=$adress ;
    }

    function get_number()
    { return $this->number ;
    }
    function set_number($number)
    { $this->number=$number ;
    }

    function get_departement()
    { return $this->departement;
    }
    function set_departement($departement)
    { $this->departement=$departement ;
    }

}
