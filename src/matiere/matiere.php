<?php
include '..//bdd/projetstock.sql';
class Matiere{
    private $id;

    private $nom;
    private $longeur;
    private $hauteur;
    private $epaisseur;
    private $largeur;
    private $diametre;


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
        $bdd = new PDO ('mysql:host=localhost;dbname=projet_stock;charset=utf8', 'root', '');
        $req = $bdd->prepare("INSERT INTO matiere(nom, longeur, hauteur, epaisseur, largeur, diametre)
        VALUES(:nom, :longeur, :hauteur, :epaisseur, :largeur, :diametre");
        $req -> execute(array(
            'nom '=> $this->nom,
            'longeur'=>$this->longeur,
            'hauteur'=>$this->hauteur,
            'epaisseur'=>$this->epaisseur,
            'largeur'=> $this->largeur,
            'diametre'=>$this->diametre

    

        ));

        if($req){
            echo "insertion reussi";
        }else{
            echo "echec d'insertion";
        }
    }
    public function modifier(){
        $bdd = new PDO ('mysql:host=localhost;dbname=projet_stock;charset=utf8', 'root', '');
        $req = $bdd->prepare("UPDATE matiere SET nom = :nom, longeur = :longeur, hauteur = :hauteur, epaisseur = :epaisseur, largeur = :largeur, diametre = :diametre WHERE id = :id");
        $req -> execute(array(
            'nom '=> $this->nom,
            'longeur'=>$this->longeur, 
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
        $bdd = new PDO ('mysql:host=localhost;dbname=projet_stock;charset=utf8', 'root', '');
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

    
