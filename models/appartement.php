<?php
class Appartement{
    private $numLocation;
    private $categorie;
    private $typeAppartement;
    private $nbPersonne;
    private $codeTarif;
    private $adresselocation;
    private $photo;
    private $equipement;
    private $numProprietaire;

    
    public function __construct($numLocation,$categorie,$typeAppartement,$nbPersonne,$codeTarif,$adresselocation,$photo,$equipement,$numProprietaire)
    {
        $this->numLocation = $numLocation;
        $this->categorie = $categorie;
        $this->typeAppartement = $typeAppartement;
        $this->nbPersonne = $nbPersonne;
        $this->codeTarif = $codeTarif;
        $this->adresselocation = $adresselocation;
        $this->photo = $photo;
        $this->equipement = $equipement;
        $this->numProprietaire = $numProprietaire;
        
    }
    public function enregistrerAppartement()
    {
        global $db;
        $result = false;

        $numLocation = $this->numLocation;
        $categorie = $this->categorie;
        $typeAppartement = $this->typeAppartement;
        $nbPersonne = $this->nbPersonne;
        $codeTarif = $this->codeTarif;
        $adresselocation = $this->adresselocation;
        $photo = $this->photo;
        $equipement = $this->equipement;
        $numProprietaire = $this->numProprietaire;

        $requete = "INSERT INTO appartement (numLocation, categorie, typeAppartement, nbPersonne, codeTarif, adresselocation, photo, equipement, numProprietaire) VALUES (:numLocation, :categorie, :typeAppartement, :nbPersonne, :codeTarif, :adresselocation, :photo, :equipement, :numProprietaire)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':numLocation' => $numLocation,
                ':categorie' => $categorie,
                ':typeAppartement' => $typeAppartement,
                ':nbPersonne' => $nbPersonne,
                ':codeTarif' => $codeTarif,
                ':adresselocation' => $adresselocation,
                ':photo' => $photo,
                ':equipement' => $equipement,
                ':numProprietaire' => $numProprietaire
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }

    static function getAppartements(){
        global $db;
        $requete = 'SELECT * FROM appartement WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $appartements = [];
        if ($execution){
            while ($data = $statment->fetch()){
                $appartement = new Appartement($data['numLocation'],$data['categorie'],$data['typeAppartement'],$data['nbPersonne'],$data['codeTarif'],$data['adresselocation'],$data['photo'],$data['equipement'],$data['numProprietaire']);
                array_push($appartements,$appartement);
            }
            return $appartements;
        }
        else return [];
    }

    
    
    public function getNomTarifHS(){
        global $db;
        $requete = 'SELECT prixsemhs FROM tarif JOIN appartement ON tarif.codeTarif=:codeTarif';
        $statment = $db->prepare($requete); // Preparer la requete pour l'execution

        $execution = $statment->execute(
            [
                ':codeTarif' => $this->getcodeTarif()
            ]
        );
        if ($execution) {
            if ($data = $statment->fetch()) {
                $nomtarif = $data['prixsemhs'];
                // $nomtarif = $data['prixsembs'];
                return $nomtarif;
            } else return null;
        } else return null;
    }

    public function getNomTarifBS(){
        global $db;
        $requete = 'SELECT prixsembs FROM tarif JOIN appartement ON tarif.codeTarif=:codeTarif';
        $statment = $db->prepare($requete); // Preparer la requete pour l'execution

        $execution = $statment->execute(
            [
                ':codeTarif' => $this->getcodeTarif()
            ]
        );
        if ($execution) {
            if ($data = $statment->fetch()) {
                // $nomtarif = $data['prixsemhs'];
                $nomtarif = $data['prixsembs'];
                return $nomtarif;
            } else return null;
        } else return null;
    }

    public function getNomProprietaire(){
        global $db;
        $requete = 'SELECT nomProprietaire FROM proprietaire JOIN appartement ON proprietaire.numProprietaire=:numProprietaire';
        $statment = $db->prepare($requete); // Preparer la requete pour l'execution

        $execution = $statment->execute(
            [
                ':numProprietaire' => $this->getnumProprietaire()
            ]
        );
        if ($execution) {
            if ($data = $statment->fetch()) {
                $nomproprietaire = $data['nomProprietaire'];
                return $nomproprietaire;
            } else return null;
        } else return null;
    }


    // public function getIdAppartement(){
    //     global $db;
    //     $requete = 'SELECT identifiantAppartement FROM appartement WHERE numLocation = :numLocation AND categorie=:categorie AND typeAppartement =:typeAppartement AND nbPersonne =:nbPersonne AND codeTarif =:codeTarif AND adresselocation =:adresselocation AND photo =:photo AND equipement =:equipement AND numProprietaire =:numProprietaire';
    //     $stetment = $db->prepare($requete);
    //     $execution = $stetment->execute(
    //         [
    //             ':numLocation' => $this->getNumlocation(),
    //             ':categorie' => $this -> getcategorie(),
    //             ':typeAppartement' => $this -> getTypeappartement(),
    //             ':nbPersonne' => $this -> getNbpersonne(),
    //             ':codeTarif' => $this -> getcodeTarif(),
    //             ':adresselocation' => $this -> getAdresselocation(),
    //             ':photo' => $this -> getPhoto(),
    //             ':equipement' => $this -> getEquipement(),
    //             ':numProprietaire' => $this -> getnumProprietaire()
    //         ]
    //     );
    //     if ($execution) {
    //         if ($data = $stetment->fetch()) {
    //             $idappartement = $data['idappartement'];
    //             return $idappartement;
    //         } else return null;
    //     } else return null;
    // }

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

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of typeAppartement
     */ 
    public function getTypeappartement()
    {
        return $this->typeAppartement;
    }

    /**
     * Set the value of typeAppartement
     *
     * @return  self
     */ 
    public function setTypeappartement($typeAppartement)
    {
        $this->typeAppartement = $typeAppartement;

        return $this;
    }

    /**
     * Get the value of nbPersonne
     */ 
    public function getNbpersonne()
    {
        return $this->nbPersonne;
    }

    /**
     * Set the value of nbPersonne
     *
     * @return  self
     */ 
    public function setNbpersonne($nbPersonne)
    {
        $this->nbPersonne = $nbPersonne;

        return $this;
    }

    /**
     * Get the value of codeTarif
     */ 
    public function getcodeTarif()
    {
        return $this->codeTarif;
    }

    /**
     * Set the value of codeTarif
     *
     * @return  self
     */ 
    public function setcodeTarif($codeTarif)
    {
        $this->codeTarif = $codeTarif;

        return $this;
    }

    /**
     * Get the value of adresselocation
     */ 
    public function getAdresselocation()
    {
        return $this->adresselocation;
    }

    /**
     * Set the value of adresselocation
     *
     * @return  self
     */ 
    public function setAdresselocation($adresselocation)
    {
        $this->adresselocation = $adresselocation;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of equipement
     */ 
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set the value of equipement
     *
     * @return  self
     */ 
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }



    /**
     * Get the value of numProprietaire
     */ 
    public function getnumProprietaire()
    {
        return $this->numProprietaire;
    }

    /**
     * Set the value of numProprietaire
     *
     * @return  self
     */ 
    public function setnumProprietaire($numProprietaire)
    {
        $this->numProprietaire = $numProprietaire;

        return $this;
    }
}
?>