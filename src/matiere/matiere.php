<?php
include '..//bdd/projetstock.sql';
class Matiere{
    private $id;
    private $nom;
    private $longueur;
    private $hauteur;
    private $epaisseur;
    private $largeur;
    private $diametre;

    //methode get

    public function getNom(){
        return $this->nom;
    }
    public function getLongeur(){
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


    //methode hydrate
    public function hydrate(array $donne){
        foreach($donne as $key => $value){
            $method= 'set'.ucfirst($key);
            if(method_exists($this,$method)){

                $this->$method($value);
            }
        }
    }

    public function __construct(array $donne){
        $this->hydrate($donne);
    }


    public function ajouter(){
        $bdd = new PDO ('mysql:host=localhost;dbname=projetstock;charset=utf8', 'root', '');
        $req = $bdd->prepare("INSERT INTO matiere(nom, longueur, hauteur, epaisseur, largeur, diametre)
        VALUES(:nom, :longueur, :hauteur, :epaisseur, :largeur, :diametre)");
        $req -> execute(array(
            'nom'=> $this->nom,
            'longueur'=>$this->longueur,
            'hauteur'=>$this->hauteur,
            'epaisseur'=>$this->epaisseur,
            'largeur'=> $this->largeur,
            'diametre'=>$this->diametre
        ));
        $res= $req->fetch();

        if($req){
            echo "insertion reussi";
        }else{
            echo "echec d'insertion";
        }
    }
    public function modifier(){
        $bdd = new PDO ('mysql:host=localhost;dbname=projetstock;charset=utf8', 'root', '');
        $req = $bdd->prepare("UPDATE matiere SET nom = :nom, longueur = :longueur, hauteur = :hauteur, epaisseur = :epaisseur, largeur = :largeur, diametre = :diametre WHERE id = :id");
        $req -> execute(array(
            'nom '=> $this->nom,
            'longeur'=>$this->longueur, 
            'hauteur'=>$this->hauteur,
            'epaisseur'=>$this->epaisseur,
            'largeur'=> $this->largeur,
            'diametre'=>$this->diametre

        ));
        $res= $req->fetch();

        if($req){
            echo "modification reussi";
        }else{
            echo "echec de modification";
        }
    }
    public function supprimer(){
        $bdd = new PDO ('mysql:host=localhost;dbname=projetstock;charset=utf8', 'root', '');
        $req = $bdd->prepare("DELETE FROM matiere WHERE id = :id");
        $req -> execute(array(
            'id '=> $this->id
        ));

        if($req){
            echo "suppression reussi";
        }else{
            echo "echec de suppression";
        }
    }

}

    
