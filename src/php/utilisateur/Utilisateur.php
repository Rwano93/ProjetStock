<?php

class Utilisateur{

    private $id_user;
    private String $nom;
    private String $prenom;
    private String $email;
    private String $mdp;
    private String $fonction;

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
        $req = $conn->bdd()->prepare("SELECT id_fonction FROM `fonction` WHERE libelle = :fonction");
        $req->execute(["fonction"=>$this->fonction]);
        $res = $req->fetch();

        return $res['id_fonction'];
    }

    public function setFonction(String $fonction)
    {
        $this->fonction = $fonction;
    }

    public static function connexion($email, $mdp) {
        $conn = new SQLConnexion();
        $res = $conn->bdd()->prepare("SELECT * FROM user WHERE email = :email");
        $res->execute(['email' => $email]);
        $user = $res->fetch();

        if ($user && $user['mdp'] == $mdp && $user['email'] == $email && !empty($user['mdp'])) {
            session_start();


            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['email'] = $user['email'];


            $userfonction = $user['ref_fonction'];

            if ($userfonction == 1) {
                $_SESSION['fonction'] = "Professeur";
            } else if ($userfonction == 2) {
                $_SESSION['fonction'] = "Elève";
            } else if ($userfonction == 3) {
                $_SESSION['fonction'] = "DDFPT";
            } else if ($userfonction == 4) {
                $_SESSION['fonction'] = "Comptabilité";
            }

//            header("Location: ../../../html/Menu_Principal.php");
return true;            
        } else {
//            header("Location: ../../../html/connexion.html");
return false;            
        }
    }
    public static function deconnexion() {
        session_start();
        session_destroy();
        return true;
    }

        


    public function inscription() {
        $conn = new SQLConnexion();
        $add_user = $conn->bdd()->prepare("INSERT INTO user (nom, prenom, email, mdp, ref_fonction) VALUES (:nom, :prenom, :email, :mdp, :fonction)");
        $add_user->execute(['nom'=>$this->getNom(), 'prenom'=>$this->getPrenom(), 'email'=>$this->getEmail(), 'mdp' =>$this->getMdp(), 'fonction'=>$this->getIdFonction()]);

        $id_user = $conn->bdd()->lastInsertId();

        if ($id_user) {
            session_start();

            $_SESSION['id_user'] = $id_user;
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

        $check_mail = $conn->bdd()->prepare("SELECT email FROM user WHERE email = :email");
        $check_mail->execute(['email'=>$this->getEmail()]);

        $email = $check_mail->fetch();

        if (is_array($email['email'])) {
            return true;
        } else {
            return false;
        }
    }
}
