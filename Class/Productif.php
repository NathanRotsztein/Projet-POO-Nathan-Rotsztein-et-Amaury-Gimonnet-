<?php

require('class/Employe.php');

class Productif extends Employe
{
    private $type;
    private $departement;
    private $langages;
    private $responsable;
    private $competences;

    function __construct($id, $name, $firstname, $date, $sexe, $experience, $startDateCompagny, $type, $departement, $langages, $responsable, $competences)
    {
        parent::__construct($id, $name, $firstname, $date, $sexe, $experience, $startDateCompagny);

        $this->type=$type;
        $this->departement=$departement;
        $this->langages=$langages;
        $this->responsable=$responsable;
        $this->competences=$competences;
    }

    // les get et les set
    function get_type()
    { return $this->type;
    }
    function set_type($type)
    { $this->type=$type ;
    }

    function get_departement()
    { return $this->departement;
    }
    function set_departement($departement)
    { $this->departement=$departement ;
    }

    function get_langages()
    { return $this->langages;
    }
    function set_langages($langages)
    { $this->langages=$langages ;
    }

    function get_responsable()
    { return $this->responsable;
    }
    function set_responsable($responsable)
    { $this->responsable=$responsable ;
    }

    function get_competences()
    { return $this->competences;
    }
    function set_competences($competences)
    { $this->competences=$competences ;
    }


}