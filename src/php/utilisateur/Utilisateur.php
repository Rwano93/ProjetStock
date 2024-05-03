<?php

class Utilisateur{

    private  $id_user;
    private  $nom;
    private  $prenom;
    private  $email;
    private $mdp;
    private $fonction;

    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user)
    {
        $this->id_user = $id_user;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp) 
    {
        $this->mdp = $mdp;
    }

    public function getFonction()
    {
        return $this->fonction;
    }

    public function getIdFonction() {
        $conn = new SQLConnexion();
        $req = $conn->connexion()->prepare("SELECT id_fonction FROM `fonction` WHERE libelle = :fonction");
        $req->execute(["fonction"=>$this->fonction]);
        $res = $req->fetch();

        return $res['id_fonction'];
    }

    public function setFonction(String $fonction)
    {
        $this->fonction = $fonction;
    }

    public function connexion() {
        $bdd = new SqlConnexion();
        $con = $bdd->connexion();
        $req = $con->prepare('SELECT * FROM utilisateur WHERE email = :email  AND mdp = :mdp ');
        $req->execute(array(
            'email' => $this->email,
            'mdp' => $this->mdp,
        ));
        $resultat = $req->fetch();
    }
    public static function deconnexion() {
        session_start();
        session_destroy();
        return true;
    }
    public function inscription() {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_vol;charset=utf8', 'root', '');
        $req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, age, ville, email, mdp) VALUES(:nom, :prenom, :age, :ville, :email, :mdp)');
        $req->execute(array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'mdp' => $this->mdp,
                         
        ));
        $res = $req->fetch();
        if ($res) {
            

           
            $_SESSION['nom'] = $this->getNom();
            $_SESSION['prenom'] = $this->getPrenom();
            $_SESSION['email'] = $this->getEmail();
            $_SESSION['mdp'] = $this->getMdp();
            
            $_SESSION['fonction'] = $this->getFonction();

            header("Location: ../../../html/index.php");
            return true;
        } else {
            header("Location: ../../../html/inscription.html");
            return false;
        }
    }

        
    

    public function regarderSiMailExiste(): bool {
        $conn = new SQLConnexion();

        $check_mail = $conn->connexion()->prepare("SELECT email FROM user WHERE email = :email");
        $check_mail->execute(['email'=>$this->getEmail()]);

        $email = $check_mail->fetch();

        if (is_array($email['email'])) {
            return true;
        } else {
            return false;
        }
    }
}
