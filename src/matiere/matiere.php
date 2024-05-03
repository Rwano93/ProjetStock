<?php

class Matiere{
    private $id;
    private $nom;
    private $longueur;
    private $hauteur;
    private $epaisseur;
    private $largeur;
    private $diametre;

    public function getNom(){
        return $this->nom;
    }

    public function getLongueur(){ // Correction: Renommage de getLongeur à getLongueur
        return $this->longueur;
    }

    public function getHauteur(){
        return $this->hauteur;
    }

    public function getEpaisseur(){
        return $this->epaisseur;
    }

    public function getLargeur(){
        return $this->largeur;
    }

    public function getDiametre(){
        return $this->diametre;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setLongueur($longueur){
        $this->longueur = $longueur;
    }

    public function setHauteur($hauteur){
        $this->hauteur = $hauteur;
    }

    public function setEpaisseur($epaisseur){
        $this->epaisseur = $epaisseur;
    }

    public function setLargeur($largeur){
        $this->largeur = $largeur;
    }

    public function setDiametre($diametre){
        $this->diametre = $diametre;
    }

    public function hydrate(array $donnees){
        foreach($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function ajouter(){
        $bdd = new SQLConnexion();
        $bdd = $bdd->bdd();
        $req = $bdd->prepare("INSERT INTO matiere(nom, longueur, hauteur, epaisseur, largeur, diametre)
        VALUES(:nom, :longueur, :hauteur, :epaisseur, :largeur, :diametre)");
        $success = $req->execute(array(
            'nom'=> $this->nom,
            'longueur'=>$this->longueur,
            'hauteur'=>$this->hauteur,
            'epaisseur'=>$this->epaisseur,
            'largeur'=> $this->largeur,
            'diametre'=>$this->diametre
        ));

        if($success){
            echo "insertion réussie";
        }else{
            echo "échec de l'insertion";
        }
        
    }

    public function modifier(){
        $bdd = new SQLConnexion();
        $bdd = $bdd->bdd();
        $req = $bdd->prepare("UPDATE matiere SET nom = :nom, longueur = :longueur, hauteur = :hauteur, epaisseur = :epaisseur, largeur = :largeur, diametre = :diametre WHERE id = :id");
        $req -> execute(array(
            'nom' => $this->nom,
            'longueur' => $this->longueur, 
            'hauteur' => $this->hauteur,
            'epaisseur' => $this->epaisseur,
            'largeur' => $this->largeur,
            'diametre' => $this->diametre,
            'id' => $this->id 
        ));

        if($req){
            echo "modification reussi";
        }else{
            echo "echec de modification";
        }
    }

    public function supprimer(){
        $bdd = new SQLConnexion();
        $bdd = $bdd->bdd();
        $req = $bdd->prepare("DELETE FROM matiere WHERE id = :id");
        $req -> execute(array(
            'id' => $this->id 
        ));

        if($req){
            echo "suppression reussi";
        }else{
            echo "echec de suppression";
        }
    }

    public function afficherMatiere(){
        $bdd = new SQLConnexion();
        $bdd = $bdd->bdd();
        $req = $bdd->prepare("SELECT * FROM matiere");
        $req -> execute();
        $res = $req->fetchAll(); 
        return $res; 
    }
}