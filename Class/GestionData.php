<?php
class GestionData
{

    private $dbo;
    public function __construct($db_pdo) // le constructeur
    {
        $this->dbo = $db_pdo; //initialisation de l’attribut dbo par db_pdo dans le constructeur
    }

    public function addClient(Client $client)
    {
        // Préparer la requête d’insertion du client
        $req = $this->dbo->prepare('INSERT INTO Client(name, firstname, compagnyName, adress, number) VALUES(:name,
        :firstname, :compagnyName, :adress, :number)');

        // Affectation des valeurs
        $req->bindValue(':name',  $client->get_name());
        $req->bindValue(':firstname',  $client->get_firstname());
        $req->bindValue(':compagnyName',  $client->get_compagnyName());
        $req->bindValue(':adress',  $client->get_adress());
        $req->bindValue(':number',  $client->get_number());

        $req->execute(); // Execution de la requête d’ajout

        echo ("Création réussite <br>");
    }

    public function getClient($number)
    {
        $number = (string) $number;
        $req = $this->dbo->query('SELECT * FROM Client WHERE number ='.$number);
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        return new Client(
            $donnees['id'],
            $donnees['name'],
            $donnees['firstname'],
            $donnees['compagnyName'],
            $donnees['adress'],
            $donnees['number']
        );
    }

    public function addExterne(Externe $externe)
    {
        // Préparer la requête d’insertion de l'externe
        $req = $this->dbo->prepare('INSERT INTO Externe(name, firstname, date, sexe, compagnyName, adress, number, departement) VALUES(:name,
        :firstname, :date, :sexe, :compagnyName, :adress, :number, :departement)');

            // Affectation des valeurs
        $req->bindValue(':name',  $externe->get_name());
        $req->bindValue(':firstname',  $externe->get_firstname());
        $req->bindValue(':date',  $externe->get_date());
        $req->bindValue(':sexe',  $externe->get_sexe());
        $req->bindValue(':compagnyName',  $externe->get_compagnyName());
        $req->bindValue(':adress',  $externe->get_adress());
        $req->bindValue(':number',  $externe->get_number());
        $req->bindValue(':departement',  $externe->get_departement());

        $req->execute(); // Execution de la requête d’ajout

        echo ("Création réussite <br>");
    }

    public function getExterne($id)
    {
        $id = (int) $id; // C’est bien un entier !!! dans la base
        $req = $this->dbo->query('SELECT * FROM Externe WHERE id ='.$id);
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        return new Externe(
            $donnees['id'],
            $donnees['name'],
            $donnees['firstname'],
            $donnees['date'],
            $donnees['sexe'],
            $donnees['compagnyName'],
            $donnees['adress'],
            $donnees['number'],
            $donnees['departement']
        );
    }

    public function addProductif(Productif $productif)
    {
        // Préparer la requête d’insertion de l'employés
        $req = $this->dbo->prepare('INSERT INTO Productif(name, firstname, date, sexe, experience,startDateCompagny, type, departement, langages, responsable, competences) VALUES(:name,
        :firstname, :date, :sexe, :experience, :startDateCompagny, :type, :departement, :langages, :responsable, :competences)');

        // Affectation des valeurs
        $req->bindValue(':name',  $productif->get_name());
        $req->bindValue(':firstname',  $productif->get_firstname());
        $req->bindValue(':date',  $productif->get_date());
        $req->bindValue(':sexe',  $productif->get_sexe());
        $req->bindValue(':experience',  $productif->get_experience());
        $req->bindValue(':startDateCompagny',  $productif->get_startDateCompagny());
        $req->bindValue(':type',  $productif->get_type());
        $req->bindValue(':departement',  $productif->get_departement());
        $req->bindValue(':langages',  $productif->get_langages());
        $req->bindValue(':responsable',  $productif->get_responsable());
        $req->bindValue(':competences',  $productif->get_competences());

        $req->execute(); // Execution de la requête d’ajout

        echo ("Création réussite <br>");
    }

    public function getProductif($id)
    {
        $id = (int) $id;
        $req = $this->dbo->query('SELECT * FROM Productif WHERE nom ='.$id);
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        return new Productif(
            $donnees['id'],
            $donnees['name'],
            $donnees['firstname'],
            $donnees['date'],
            $donnees['sexe'],
            $donnees['experience'],
            $donnees['startDateCompagny'],
            $donnees['type'],
            $donnees['departement'],
            $donnees['langages'],
            $donnees['responsable'],
            $donnees['competences']
        );
    }



    public function addMission(Mission $mission)
    {
        // Préparer la requête d’insertion de la mission
        $req = $this->dbo->prepare('INSERT INTO Mission(name, idClient, idExpert, price, startTime, endTime) VALUES(:name, :idClient, :idExpert, :price, :startTime, :endTime)');

        // Affectation des valeurs
        $req->bindValue(':name',  $mission->get_name());
        $req->bindValue(':idClient',  $mission->get_idClient());
        $req->bindValue(':idExpert',  $mission->get_idExpert());
        $req->bindValue(':price',  $mission->get_price());
        $req->bindValue(':startTime',  $mission->get_startTime());
        $req->bindValue(':endTime',  $mission->get_endTime());

        $req->execute(); // Execution de la requête d’ajout

        echo ("Création réussite <br>");
    }

    public function getMission($id)
    {
        $id = (int) $id;
        $req = $this->dbo->query('SELECT * FROM Mission WHERE id ='.$id);
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        return new Mission(
            $donnees['id'],
            $donnees['name'],
            $donnees['idClient'],
            $donnees['idExpert'],
            $donnees['price'],
            $donnees['startTime'],
            $donnees['endTime']
        );
    }

}