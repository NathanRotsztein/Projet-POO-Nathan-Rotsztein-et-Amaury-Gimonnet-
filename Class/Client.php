<?php

class Client
{
    private $id;
    private $name;
    private $firstname;
    private $compagnyName;
    private $adress;
    private $number;

    // Le constructeur
    function __construct($id, $name, $firstname, $compagnyName, $adress, $number)
    {
        $this->id=$id;
        $this->name=$name;
        $this->firstname=$firstname;
        $this->compagnyName=$compagnyName;
        $this->adress=$adress;
        $this->number=$number;
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

    function get_compagnyName()
    { return $this->compagnyName;
    }
    function set_compagnyName($compagnyName)
    { $this->compagnyName=$compagnyName ;
    }

    function get_adress()
    { return $this->adress;
    }
    function set_adress($adress)
    { $this->adress=$adress ;
    }

    function get_number()
    { return $this->number;
    }
    function set_number($number)
    { $this->number=$numbere ;
    }
}
