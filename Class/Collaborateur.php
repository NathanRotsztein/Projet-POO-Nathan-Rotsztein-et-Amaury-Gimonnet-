<?php

class Collaborateur
{
    private $id;
    private $name;
    private $firstname;
    private $date;
    private $sexe;

    // Le constructeur
    function __construct($id,$name, $firstname, $date, $sexe)
    {
        $this->id=$id;
        $this->name=$name;
        $this->firstname=$firstname;
        $this->date=$date;
        $this->sexe=$sexe;
    }

    // les get et les set
    function get_id()
    { return $this->id ;
    }

    function get_name()
    { return $this->name ;
    }
    function set_name($name)
    { $this->name=$name ;
    }

    function get_firstname()
    { return $this->firstname ;
    }
    function set_firstname($firstname)
    { $this->firstname=$firstname ;
    }

    function get_date()
    { return $this->date;
    }
    function set_date($date)
    { $this->date=$date ;
    }

    function get_sexe()
    { return $this->sexe;
    }
    function set_sexe($sexe)
    { $this->sexe=$sexe ;
    }
}
