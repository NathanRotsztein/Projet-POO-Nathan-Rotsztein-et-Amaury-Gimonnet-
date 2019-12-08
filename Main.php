<?php
    require('class/Productif.php');
    require('class/Client.php');
    require('class/Mission.php');
    require('class/GestionData.php');
    require('class/Externe.php');


    $dbo = new PDO('mysql:host=localhost;dbname=PHPPOO', 'root', 'root');
    $Ges = new GestionData($dbo); // instance du gestionnaire
    echo("<br><br>");

    $externe = new Externe('','Externe','Test','30/09/1998','0','Infomédia','7rue narcisse diaz','123456789','0');
    $Ges->addExterne($externe); // ajout de l’externe

    $productif = new Productif('','Productif','Test','30/09/2001','1','2','2','type','Info','PHP','0','Pas trop top');
    $Ges->addProductif($productif);

    $tmp = $Ges->getProductif($productif->get_name());
    $idExpert = $tmp->get_id();

    $client = new Client('','Client','Test','SAS','7 avenue porte viaz','123456789');
    $Ges->addClient($client);

    $tmp2 = $Ges->getClient($client->get_number());
    $idClient = $tmp2->get_id();

    $mission = new Mission('','Mission de test', (string)$idClient, (string)$idExpert,'1800','hier','fin');
    $Ges->addMission($mission);






