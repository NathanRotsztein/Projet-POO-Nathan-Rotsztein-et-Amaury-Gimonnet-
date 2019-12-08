<?php

require_once('class/Collaborateur.php');

class Employe extends Collaborateur
{
    private $experience;
    private $startDateCompagny;

    function __construct($id, $name, $firstname, $date, $sexe, $experience, $startDateCompagny)
    {
        parent::__construct($id, $name, $firstname, $date, $sexe);

        $this->experience=$experience;
        $this->startDateCompagny=$startDateCompagny;
    }

    function get_experience()
    { return $this->experience;
    }
    function set_experience($experience)
    { $this->experience=$experience ;
    }

    function get_startDateCompagny()
    { return $this->startDateCompagny;
    }
    function set_startDateCompagny($startDateCompagny)
    { $this->startDateCompagny=$startDateCompagny ;
    }
}