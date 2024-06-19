<?php
class Tarif{
    private $codeTarif;
    private $prixSemHS;
    private $prixSemBS;

    public function __construct($codeTarif,$prixSemHS,$prixSemBS)
    {
      $this->codeTarif = $codeTarif;
      $this->prixSemHS = $prixSemHS;
      $this->prixSemBS = $prixSemBS;
        
    }

    public function enregistrerTarif(){
        global $db;
        $result=false;

        $codeTarif = $this->codeTarif;
        $prixSemHS = $this->prixSemHS;
        $prixSemBS = $this->prixSemBS;

        $requete = "INSERT INTO tarif(codeTarif, prixSemHS, prixSemBS) VALUES (:codeTarif, :prixSemHS, :prixSemBS)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute([
            ':codeTarif' => $codeTarif,
            ':prixSemHS' => $prixSemHS,
            ':prixSemBS' => $prixSemBS
        ]);
        if($execution){
            $result = true;
        }
        return $result;
    }

    static function getTarifs(){
        global $db;
        $requete = 'SELECT * FROM tarif WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $tarifs = [];
        if($execution){
            while($data=$statment-> fetch()){
                $tarif = new Tarif($data['codeTarif'], $data['prixSemHS'], $data['prixSemBS']);
                array_push($tarifs,$tarif);
            }
            return $tarifs;
        }
        else return [];
    }

    // public function getIdentifiantTarif(){
    //     global $db;
    //     $requete = 'SELECT identifiantTarif FROM tarif WHERE codeTarif = :codeTarif AND prixSemHS =:prixSemHS AND prixSemBS = :prixSemBS';
    //     $statment = $db->prepare($requete);
    //     $execution =$statment->execute([
    //         ':codeTarif'=>$this->getCodetarif(),
    //         ':prixSemHS'=>$this->getPrixsemhs(),
    //         'prixSemBS'=>$this->getPrixsembs()
    //     ]);

    //     if ($execution){
    //         if ($data = $statment->fetch()){
    //             $identifiantTarif = $data['identifiantTarif'];
    //             return $identifiantTarif;
    //         } else return null;
    //     } else return null;
    // }

    /**
     * Get the value of codeTarif
     */ 
    public function getCodetarif()
    {
        return $this->codeTarif;
    }

    /**
     * Set the value of codeTarif
     *
     * @return  self
     */ 
    public function setCodetarif($codeTarif)
    {
        $this->codeTarif = $codeTarif;

        return $this;
    }

    /**
     * Get the value of prixSemHS
     */ 
    public function getPrixsemhs()
    {
        return $this->prixSemHS;
    }

    /**
     * Set the value of prixSemHS
     *
     * @return  self
     */ 
    public function setPrixsemhs($prixSemHS)
    {
        $this->prixSemHS = $prixSemHS;

        return $this;
    }

    /**
     * Get the value of prixSemBS
     */ 
    public function getPrixsembs()
    {
        return $this->prixSemBS;
    }

    /**
     * Set the value of prixSemBS
     *
     * @return  self
     */ 
    public function setPrixsembs($prixSemBS)
    {
        $this->prixSemBS = $prixSemBS;

        return $this;
    }
}
?>