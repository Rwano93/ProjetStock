<?php

include '../../bdd/SQLConnexion.php';


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

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }

    public function getFonction(): string
    {
        return $this->fonction;
    }

    public function getIdFonction(): String {
        $conn = new SQLConnexion();
        $req = $conn->bdd()->prepare("SELECT id_fonction FROM `fonction` WHERE libelle = :fonction");
        $req->execute(["fonction"=>$this->fonction]);
        $res = $req->fetch();

        return $res['id_fonction'];
    }

    public function setFonction(String $fonction): void
    {
        $this->fonction = $fonction;
    }

    public static function connexion($email, $mdp) {
        $conn = new SQLConnexion();
        $res = $conn->bdd()->prepare("SELECT * FROM user WHERE email = :email AND mdp = :mdp");
        $res->execute(['email'=>$email]);
        $user = $res -> fetch();

        $id = $user['id_user'];
        $usernom = $user['nom'];
        $userprenom = $user['prenom'];
        $useremail = $user['email'];
        $usermdp = $user['mdp'];
        $userfonction = $user['ref_fonction'];

        if (password_verify($mdp, $usermdp)) {
            session_start();

            $_SESSION['id_user'] = $id;
            $_SESSION['nom'] = $usernom;
            $_SESSION['prenom'] = $userprenom;
            $_SESSION['email'] = $useremail;

            header("Location: ../../../html/index.php");
            return true;
        } else {
            header("Location: ../../../html/connexion.html");
            return false;
        }
        if($userfonction == 1){
            $_SESSION['fonction'] = "Professeur";
            header("Location: ../../../html/index.php");
        } else if($userfonction == 2){
            $_SESSION['fonction'] = "Elève";
            header("Location: ../../../html/index.php");
        } else if($userfonction == 3){
            $_SESSION['fonction'] = "DDFPT";
            header("Location: ../../../html/index.php");
        } else if ($userfonction == 4){
            $_SESSION['fonction'] = "Comptabilité";
            header("Location: ../../../html/index.php");
        } else {
            header("Location: ../../../html/connexion.html");
        }
        
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
