<?php
class Locataire{
    private $numLocataire;
    private $nomLocataire;
    private $prenomLocataire;
    private $adresse1Locataire;
    private $adresse2Locataire;
    private $codePostalLocataire;
    private $villeLocataire;
    private $numTel1Locataire;
    private $numTel2Locataire;
    private $emailLocataire;

    
    public function __construct($numLocataire,$nomLocataire,$prenomLocataire,$adresse1Locataire,$adresse2Locataire,$codePostalLocataire,$villeLocataire,$numTel1Locataire,$numTel2Locataire,$emailLocataire)
    {
        $this->numLocataire = $numLocataire;
        $this->nomLocataire = $nomLocataire;
        $this->prenomLocataire = $prenomLocataire;
        $this->adresse1Locataire = $adresse1Locataire;
        $this->adresse2Locataire = $adresse2Locataire;
        $this->codePostalLocataire = $codePostalLocataire;
        $this->villeLocataire = $villeLocataire;
        $this->numTel1Locataire = $numTel1Locataire;
        $this->numTel2Locataire = $numTel2Locataire;
        $this->emailLocataire = $emailLocataire;
    }
    public function enregistrerLocataire()
    {
        global $db;
        $result = false;

        $numLocataire = $this->numLocataire;
        $nomLocataire = $this->nomLocataire;
        $prenomLocataire = $this->prenomLocataire;
        $adresse1Locataire = $this->adresse1Locataire;
        $adresse2Locataire = $this->adresse2Locataire;
        $codePostalLocataire = $this->codePostalLocataire;
        $villeLocataire = $this->villeLocataire;
        $numTel1Locataire = $this->numTel1Locataire;
        $numTel2Locataire = $this->numTel2Locataire;
        $emailLocataire = $this->emailLocataire;

        $requete = "INSERT INTO locataire (numLocataire, nomLocataire, prenomLocataire, adresse1Locataire, adresse2Locataire, codePostalLocataire, villeLocataire, numTel1Locataire, numTel2Locataire, emailLocataire) VALUES (:numLocataire, :nomLocataire, :prenomLocataire, :adresse1Locataire, :adresse2Locataire, :codePostalLocataire, :villeLocataire, :numTel1Locataire, :numTel2Locataire, :emailLocataire)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':numLocataire' => $numLocataire,
                ':nomLocataire' => $nomLocataire,
                ':prenomLocataire' => $prenomLocataire,
                ':adresse1Locataire' => $adresse1Locataire,
                ':adresse2Locataire' => $adresse2Locataire,
                ':codePostalLocataire' => $codePostalLocataire,
                ':villeLocataire' => $villeLocataire,
                ':numTel1Locataire' => $numTel1Locataire,
                ':numTel2Locataire' => $numTel2Locataire,
                ':emailLocataire' => $emailLocataire
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
    static function getLocataires(){
        global $db;
        $requete = 'SELECT * FROM locataire WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $locataires = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $locataire = new Locataire ($data['numLocataire'],$data['nomLocataire'],$data['prenomLocataire'],$data['adresse1Locataire'],$data['adresse2Locataire'],$data['codePostalLocataire'],$data['villeLocataire'],$data['numTel1Locataire'],$data['numTel2Locataire'],$data['emailLocataire']);
                array_push($locataires,$locataire);
            }
            return $locataires;
        }
        else return [];
    }


    /**
     * Get the value of numLocataire
     */ 
    public function getNumlocataire()
    {
        return $this->numLocataire;
    }

    /**
     * Set the value of numLocataire
     *
     * @return  self
     */ 
    public function setNumlocataire($numLocataire)
    {
        $this->numLocataire = $numLocataire;

        return $this;
    }

    /**
     * Get the value of nomLocataire
     */ 
    public function getNomlocataire()
    {
        return $this->nomLocataire;
    }

    /**
     * Set the value of nomLocataire
     *
     * @return  self
     */ 
    public function setNomlocataire($nomLocataire)
    {
        $this->nomLocataire = $nomLocataire;

        return $this;
    }

    /**
     * Get the value of prenomLocataire
     */ 
    public function getprenomLocataire()
    {
        return $this->prenomLocataire;
    }

    /**
     * Set the value of prenomLocataire
     *
     * @return  self
     */ 
    public function setprenomLocataire($prenomLocataire)
    {
        $this->prenomLocataire = $prenomLocataire;

        return $this;
    }

    /**
     * Get the value of adresse1Locataire
     */ 
    public function getAdresse1locataire()
    {
        return $this->adresse1Locataire;
    }

    /**
     * Set the value of adresse1Locataire
     *
     * @return  self
     */ 
    public function setAdresse1locataire($adresse1Locataire)
    {
        $this->adresse1Locataire = $adresse1Locataire;

        return $this;
    }

    /**
     * Get the value of adresse2Locataire
     */ 
    public function getAdresse2locataire()
    {
        return $this->adresse2Locataire;
    }

    /**
     * Set the value of adresse2Locataire
     *
     * @return  self
     */ 
    public function setAdresse2locataire($adresse2Locataire)
    {
        $this->adresse2Locataire = $adresse2Locataire;

        return $this;
    }

    /**
     * Get the value of codePostalLocataire
     */ 
    public function getCodepostallocataire()
    {
        return $this->codePostalLocataire;
    }

    /**
     * Set the value of codePostalLocataire
     *
     * @return  self
     */ 
    public function setCodepostallocataire($codePostalLocataire)
    {
        $this->codePostalLocataire = $codePostalLocataire;

        return $this;
    }

    /**
     * Get the value of villeLocataire
     */ 
    public function getVillelocataire()
    {
        return $this->villeLocataire;
    }

    /**
     * Set the value of villeLocataire
     *
     * @return  self
     */ 
    public function setVillelocataire($villeLocataire)
    {
        $this->villeLocataire = $villeLocataire;

        return $this;
    }

    /**
     * Get the value of numTel1Locataire
     */ 
    public function getNumtel1locataire()
    {
        return $this->numTel1Locataire;
    }

    /**
     * Set the value of numTel1Locataire
     *
     * @return  self
     */ 
    public function setNumtel1locataire($numTel1Locataire)
    {
        $this->numTel1Locataire = $numTel1Locataire;

        return $this;
    }

    /**
     * Get the value of numTel2Locataire
     */ 
    public function getnumTel2Locataire()
    {
        return $this->numTel2Locataire;
    }

    /**
     * Set the value of numTel2Locataire
     *
     * @return  self
     */ 
    public function setnumTel2Locataire($numTel2Locataire)
    {
        $this->numTel2Locataire = $numTel2Locataire;

        return $this;
    }

    /**
     * Get the value of emailLocataire
     */ 
    public function getemailLocataire()
    {
        return $this->emailLocataire;
    }

    /**
     * Set the value of emailLocataire
     *
     * @return  self
     */ 
    public function setemailLocataire($emailLocataire)
    {
        $this->emailLocataire = $emailLocataire;

        return $this;
    }
}
?>