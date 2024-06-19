<?php
class Proprietaire{
    private $numProprietaire;
    private $nomProprietaire;
    private $prenomProprietaire;
    private $adresse1Proprietaire;
    private $adresse2Proprietaire;
    private $codePostalProprietaire;
    private $villeProprietaire;
    private $numTel1Proprietaire;
    private $numTel2Proprietaire;
    private $caCumuleProprietaire;
    private $emailProprietaire;

    
    public function __construct($numProprietaire,$nomProprietaire,$prenomProprietaire,$adresse1Proprietaire,$adresse2Proprietaire,$codePostalProprietaire,$villeProprietaire,$numTel1Proprietaire,$numTel2Proprietaire,$caCumuleProprietaire,$emailProprietaire)
    {
        $this->numProprietaire = $numProprietaire;
        $this->nomProprietaire = $nomProprietaire;
        $this->prenomProprietaire = $prenomProprietaire;
        $this->adresse1Proprietaire = $adresse1Proprietaire;
        $this->adresse2Proprietaire = $adresse2Proprietaire;
        $this->codePostalProprietaire = $codePostalProprietaire;
        $this->villeProprietaire = $villeProprietaire;
        $this->numTel1Proprietaire = $numTel1Proprietaire;
        $this->numTel2Proprietaire = $numTel2Proprietaire;
        $this->caCumuleProprietaire = $caCumuleProprietaire;
        $this->emailProprietaire = $emailProprietaire;
    }
    public function enregistrerPropietaire()
    {
        global $db;
        $result = false;

        $numProprietaire = $this->numProprietaire;
        $nomProprietaire = $this->nomProprietaire;
        $prenomProprietaire = $this->prenomProprietaire;
        $adresse1Proprietaire = $this->adresse1Proprietaire;
        $adresse2Proprietaire = $this->adresse2Proprietaire;
        $codePostalProprietaire = $this->codePostalProprietaire;
        $villeProprietaire = $this->villeProprietaire;
        $numTel1Proprietaire = $this->numTel1Proprietaire;
        $numTel2Proprietaire = $this->numTel2Proprietaire;
        $caCumuleProprietaire = $this->caCumuleProprietaire;
        $emailProprietaire = $this->emailProprietaire;

        $requete = "INSERT INTO proprietaire (numProprietaire, nomProprietaire, prenomProprietaire, adresse1Proprietaire, adresse2Proprietaire, codePostalProprietaire, villeProprietaire, numTel1Proprietaire, numTel2Proprietaire, caCumuleProprietaire, emailProprietaire) VALUES (:numProprietaire, :nomProprietaire, :prenomProprietaire, :adresse1Proprietaire, :adresse2Proprietaire, :codePostalProprietaire, :villeProprietaire, :numTel1Proprietaire, :numTel2Proprietaire, :caCumuleProprietaire, :emailProprietaire)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':numProprietaire' => $numProprietaire,
                ':nomProprietaire' => $nomProprietaire,
                ':prenomProprietaire' => $prenomProprietaire,
                ':adresse1Proprietaire' => $adresse1Proprietaire,
                ':adresse2Proprietaire' => $adresse2Proprietaire,
                ':codePostalProprietaire' => $codePostalProprietaire,
                ':villeProprietaire' => $villeProprietaire,
                ':numTel1Proprietaire' => $numTel1Proprietaire,
                ':numTel2Proprietaire' => $numTel2Proprietaire,
                ':caCumuleProprietaire' => $caCumuleProprietaire,
                ':emailProprietaire' => $emailProprietaire
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
    static function getProprietaire(){
        global $db;
        $requete = 'SELECT * FROM proprietaire WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $proprietaires = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $proprietaire = new Proprietaire ($data['numProprietaire'],$data['nomProprietaire'],$data['prenomProprietaire'],$data['adresse1Proprietaire'],$data['adresse2Proprietaire'],$data['codePostalProprietaire'],$data['villeProprietaire'],$data['numTel1Proprietaire'],$data['numTel2Proprietaire'],$data['caCumuleProprietaire'],$data['emailProprietaire']);
                array_push($proprietaires,$proprietaire);
            }
            return $proprietaires;
        }
        else return [];
    }


    /**
     * Get the value of numProprietaire
     */ 
    public function getNumproprietaire()
    {
        return $this->numProprietaire;
    }

    /**
     * Set the value of numProprietaire
     *
     * @return  self
     */ 
    public function setNumproprietaire($numProprietaire)
    {
        $this->numProprietaire = $numProprietaire;

        return $this;
    }

    /**
     * Get the value of nomProprietaire
     */ 
    public function getNomproprietaire()
    {
        return $this->nomProprietaire;
    }

    /**
     * Set the value of nomProprietaire
     *
     * @return  self
     */ 
    public function setNomproprietaire($nomProprietaire)
    {
        $this->nomProprietaire = $nomProprietaire;

        return $this;
    }

    /**
     * Get the value of prenomProprietaire
     */ 
    public function getPrenomproprietaire()
    {
        return $this->prenomProprietaire;
    }

    /**
     * Set the value of prenomProprietaire
     *
     * @return  self
     */ 
    public function setPrenomproprietaire($prenomProprietaire)
    {
        $this->prenomProprietaire = $prenomProprietaire;

        return $this;
    }

    /**
     * Get the value of adresse1Proprietaire
     */ 
    public function getAdresse1proprietaire()
    {
        return $this->adresse1Proprietaire;
    }

    /**
     * Set the value of adresse1Proprietaire
     *
     * @return  self
     */ 
    public function setAdresse1proprietaire($adresse1Proprietaire)
    {
        $this->adresse1Proprietaire = $adresse1Proprietaire;

        return $this;
    }

    /**
     * Get the value of adresse2Proprietaire
     */ 
    public function getadresse2Proprietaire()
    {
        return $this->adresse2Proprietaire;
    }

    /**
     * Set the value of adresse2Proprietaire
     *
     * @return  self
     */ 
    public function setadresse2Proprietaire($adresse2Proprietaire)
    {
        $this->adresse2Proprietaire = $adresse2Proprietaire;

        return $this;
    }

    /**
     * Get the value of codePostalProprietaire
     */ 
    public function getCodepostalproprietaire()
    {
        return $this->codePostalProprietaire;
    }

    /**
     * Set the value of codePostalProprietaire
     *
     * @return  self
     */ 
    public function setCodepostalproprietaire($codePostalProprietaire)
    {
        $this->codePostalProprietaire = $codePostalProprietaire;

        return $this;
    }

    /**
     * Get the value of villeProprietaire
     */ 
    public function getVilleproprietaire()
    {
        return $this->villeProprietaire;
    }

    /**
     * Set the value of villeProprietaire
     *
     * @return  self
     */ 
    public function setVilleproprietaire($villeProprietaire)
    {
        $this->villeProprietaire = $villeProprietaire;

        return $this;
    }

    /**
     * Get the value of numTel1Proprietaire
     */ 
    public function getNumtel1proprietaire()
    {
        return $this->numTel1Proprietaire;
    }

    /**
     * Set the value of numTel1Proprietaire
     *
     * @return  self
     */ 
    public function setNumtel1proprietaire($numTel1Proprietaire)
    {
        $this->numTel1Proprietaire = $numTel1Proprietaire;

        return $this;
    }

    /**
     * Get the value of numTel2Proprietaire
     */ 
    public function getNumtel2proprietaire()
    {
        return $this->numTel2Proprietaire;
    }

    /**
     * Set the value of numTel2Proprietaire
     *
     * @return  self
     */ 
    public function setNumtel2proprietaire($numTel2Proprietaire)
    {
        $this->numTel2Proprietaire = $numTel2Proprietaire;

        return $this;
    }

    /**
     * Get the value of caCumuleProprietaire
     */ 
    public function getcaCumuleProprietaire()
    {
        return $this->caCumuleProprietaire;
    }

    /**
     * Set the value of caCumuleProprietaire
     *
     * @return  self
     */ 
    public function setcaCumuleProprietaire($caCumuleProprietaire)
    {
        $this->caCumuleProprietaire = $caCumuleProprietaire;

        return $this;
    }

    /**
     * Get the value of emailProprietaire
     */ 
    public function getEmailproprietaire()
    {
        return $this->emailProprietaire;
    }

    /**
     * Set the value of emailProprietaire
     *
     * @return  self
     */ 
    public function setEmailproprietaire($emailProprietaire)
    {
        $this->emailProprietaire = $emailProprietaire;

        return $this;
    }
}
?>