<?php
class Contrat{
    private $numContrat;
    private $etatContrat;
    private $dateCreation;
    private $dateDebut;
    private $dateFin;
    private $numLocation;
    private $numLocataire;
    
    public function __construct($numContrat,$etatContrat,$dateCreation,$dateDebut,$dateFin,$numLocation,$numLocataire)
    {
        $this->numContrat = $numContrat;
        $this->etatContrat = $etatContrat;
        $this->dateCreation = $dateCreation;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->numLocation = $numLocation;
        $this->numLocataire = $numLocataire;
    }
    public function enregistrerContrat()
    {
        global $db;
        $result = false;

        $numContrat = $this->numContrat;
        $etatContrat = $this->etatContrat;
        $dateCreation = $this->dateCreation;
        $dateDebut = $this->dateDebut;
        $dateFin = $this->dateFin;
        $numLocation = $this->numLocation;
        $numLocataire = $this->numLocataire;

        $requete = "INSERT INTO contrat (numContrat, etatContrat, dateCreation, dateDebut, dateFin, numLocation, numLocataire) VALUES (:numContrat, :etatContrat, :dateCreation, :dateDebut, :dateFin, :numLocation, :numLocataire)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':numContrat' => $numContrat,
                ':etatContrat' => $etatContrat,
                ':dateCreation' => $dateCreation,
                ':dateDebut' => $dateDebut,
                ':dateFin' => $dateFin,
                ':numLocation' => $numLocation,
                ':numLocataire' => $numLocataire
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }

    public function getNomLocataireContrat(){
        global $db;
        $requete = 'SELECT nomlocataire FROM locataire JOIN contrat ON locataire.numLocataire=:numLocataire';
        $statment = $db->prepare($requete); // Preparer la requete pour l'execution

        $execution = $statment->execute(
            [
                ':numLocataire' => $this->getnumLocataire()
            ]
        );
        if ($execution) {
            if ($data = $statment->fetch()) {
                $nomlocatairecontrat = $data['nomlocataire'];
                return $nomlocatairecontrat;
            } else return null;
        } else return null;
    }
    
    public function getCategorieAppartement(){
        global $db;
        $requete = 'SELECT categorie FROM appartement JOIN contrat ON appartement.numLocation=:numLocation';
        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                'numLocation' => $this->getNumlocation()
            ]
        );
        if ($execution) {
            if ($data = $statment->fetch()) {
                $categorieappart = $data['categorie'];
                return $categorieappart;
            } else return null;
        } else return null;
    }

    public function getTypeAppartement(){
        global $db;
        $requete = 'SELECT typeAppartement FROM appartement JOIN contrat ON appartement.numLocation=:numLocation';
        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                'numLocation' => $this->getNumlocation()
            ]
        );
        if ($execution) {
            if ($data = $statment->fetch()) {
                $type = $data['typeAppartement'];
                return $type;
            } else return null;
        } else return null;
        
    }

    static function getContrats(){
        global $db;
        // $etatContrat ="En cours";
        $requete = 'SELECT * FROM contrat WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $contrats = [];
        if($execution){
            while($data=$statment-> fetch()){
                $contrat = new Contrat($data['numContrat'],$data['etatContrat'], $data['dateCreation'], $data['dateDebut'],$data['dateFin'],$data['numLocation'],$data['numLocataire']);
                array_push($contrats,$contrat);
            }
            return $contrats;
        }
        else return [];
    }
    
    public function getNomlocataire() {
        global $db;
        
        $query = 'SELECT nomLocataire FROM locataire JOIN contrat ON locataire.numLocataire = :numLocataire';
        $prepareQuery = $db -> prepare($query);
        $execution = $prepareQuery->execute([
            ':numLocataire' => $this->numLocataire
        ]);

        if($execution) {
            if($data = $prepareQuery->fetch()) {
                $nomLocataire = $data['nomLocataire'];
                return $nomLocataire ;
            } else return null ;
        } else return null ;   
    }

    public function getprenomLocataire() {
        global $db;
        
        $query = 'SELECT prenomLocataire FROM locataire JOIN contrat ON locataire.numLocataire = :numLocataire';
        $prepareQuery = $db -> prepare($query);
        $execution = $prepareQuery->execute([
            ':numLocataire' => $this->numLocataire
        ]);

        if($execution) {
            if($data = $prepareQuery->fetch()) {
                $prenomLocataire = $data['prenomLocataire'];
                return $prenomLocataire ;
            } else return null ;
        } else return null ;   
    }
    
    static function getContratResilie(){
        global $db;
        $etatContrat = 'Resilie';
        $requete = 'SELECT * FROM contrat where etatContrat = ? ';
        $statment = $db->prepare($requete);
        $execution = $statment->execute(array($etatContrat));
        $contrats = [];
        if($execution){
            while($data=$statment-> fetch()){
                $contrat = new Contrat($data['numContrat'],$data['etatContrat'], $data['dateCreation'], $data['dateDebut'],$data['dateFin'],$data['numLocation'],$data['numLocataire']);
                array_push($contrats,$contrat);
            }
            return $contrats;
        }
        else return [];
    }

    public function resilierContrat() {
        global $db ;

        $query = 'UPDATE contrat SET etatContrat = \'Resilie\' WHERE numContrat = :numContrat';
        $prepareQuery = $db -> prepare($query) ;
        $execution = $prepareQuery -> execute([
            ':numContrat' => $this->getnumContrat()
        ]);

        return $execution ? true : false;
    }
    public function modifierContrat($contrat) {
        // $result = false;

        // $numContrat = $this->numContrat;
        // $etatContrat = $this->etatContrat;
        // $dateCreation = $this->dateCreation;
        // $dateDebut = $this->dateDebut;
        // $dateFin = $this->dateFin;
        // $numLocation = $this->numLocation;
        // $numLocataire = $this->numLocataire;
        global $db;
        
        $query = 'UPDATE contrat SET etatContrat =:etatContrat, dateDebut = :dateDebut, dateFin = :dateFin, numLocation = :numLocation, numLocataire = :numLocataire WHERE numContrat =:numContrat';
        $prepareQuery = $db -> prepare($query);
        $execution = $prepareQuery->execute([
            ':numContrat' => $this->getNumcontrat(),
            ':etatContrat' => $this->getEtat(),
            ':dateCreation' => $this->getDatecreation(),
            ':dateDebut' => $this->getDatedebut(),
            ':dateFin' => $this->getDatefin(),
            ':numLocataire' => $this->getnumLocataire(),
            ':numLocation' => $this->getNumlocation()
        ]);

        return $execution ? true:false;
    }

    public function getContratModifie($contrat) {
        global $db ;

        $query = 'SELECT * FROM contrat WHERE 1';
        $prepareQuery = $db->prepare($query);
        $execution = $prepareQuery->execute([]);

        $contrats = [];
        if($execution) {
            while($data = $prepareQuery->fetch()) {
                $contrat = new Contrat($data['numContrat'],$data['etatContrat'], $data['dateCreation'], $data['dateDebut'],$data['dateFin'],$data['numLocation'],$data['numLocataire']);
                $contrats[] = $contrat ;
            }
            return $contrats;   
        }

        else return [];
    }

    
    

    /**
     * Get the value of numContrat
     */ 
    public function getNumcontrat()
    {
        return $this->numContrat;
    }

    /**
     * Set the value of numContrat
     *
     * @return  self
     */ 
    public function setNumcontrat($numContrat)
    {
        $this->numContrat = $numContrat;

        return $this;
    }

        /**
     * Get the value of etatContrat
     */ 
    public function getEtat()
    {
        return $this->etatContrat;
    }

    /**
     * Set the value of etatContrat
     *
     * @return  self
     */ 
    public function setEtat($etatContrat)
    {
        $this->etatContrat = $etatContrat;

        return $this;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDatecreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDatecreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of dateDebut
     */ 
    public function getDatedebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDatedebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of dateFin
     */ 
    public function getDatefin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */ 
    public function setDatefin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get the value of numLocataire
     */ 
    public function getnumLocataire()
    {
        return $this->numLocataire;
    }

    /**
     * Get the value of numLocation
     */ 
    public function getNumlocation()
    {
        return $this->numLocation;
    }

    /**
     * Set the value of numLocation
     *
     * @return  self
     */ 
    public function setNumlocation($numLocation)
    {
        $this->numLocation = $numLocation;

        return $this;
    }


}
?>