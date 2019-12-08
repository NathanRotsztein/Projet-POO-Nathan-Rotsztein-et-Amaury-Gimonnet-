<?php
class Mission
{
    private $id;
    private $name;
    private $idClient;
    private $idExpert;
    private $price;
    private $startTime;
    private $endTime;

    // Le constructeur
    function __construct($id, $name, $idClient, $idExpert, $price, $startTime, $endTime)
    {
        $this->id=$id;
        $this->name=$name;
        $this->idClient=$idClient;
        $this->idExpert=$idExpert;
        $this->price=$price;
        $this->startTime=$startTime;
        $this->endTime=$endTime;
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

    function get_idClient()
    { return $this->idClient ;
    }
    function set_idClient($idClient)
    { $this->idClient=$idClient ;
    }

    function get_idExpert()
    { return $this->idExpert;
    }
    function set_idExpert($idExpert)
    { $this->idExpert=$idExpert ;
    }

    function get_price()
    { return $this->price;
    }
    function set_price($price)
    { $this->price=$price ;
    }

    function get_startTime()
    { return $this->startTime;
    }
    function set_startTime($startTime)
    { $this->startTime=$startTime ;
    }

    function get_endTime()
    { return $this->endTime;
    }
    function set_endTime($endTime)
    { $this->endTime=$endTime ;
    }
}