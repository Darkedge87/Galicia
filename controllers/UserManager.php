<?php 

require_once '../Db/Db.php';

class User {

    public function getUserByEmail($user_email) {
        $q = Db::getInstance()->query('SELECT * FROM user WHERE user_email = "'.$user_email.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        if($donnees == null) {
            $newUser = $this->createUser($user_email, $user_name);
        }else{
            $user_id = $donnees['id'];
        }

        return $user_id;

    }

    public function createUser($user_name, $user_lastname, $user_email, $mdp1, $mdp2) {
        
        if ((empty($user_email)) OR empty($user_name) OR empty($user_lastname) OR empty($mdp1) OR empty($mdp2)) {

            $message = '<p class="error"> Vous devez saisir les informations demandées</p>';
        }
        else{

            $q = Db::getInstance()->query('SELECT count(user_email) FROM user WHERE user_email = "'.$user_email.'"');
            $donnees = $q->fetch(PDO::FETCH_ASSOC);

            if ($donnees[0] > 0) {

                $message = '<p class="error"> Cette email est déjà utilisé </p>';
            }
            else{

                if ($mdp1 == $mdp2) {

                    $mdpcrypt = crypt($mdp1);
                    $sql = 'INSERT INTO user (user_name, user_lastname, user_email, user_password) VALUES (:user_name, :user_lastname, :user_email, :user_password)';
                    $stmnt = Db::getInstance()->prepare($sql);
                    $stmnt->bindValue(':user_name', $user_name);
                    $stmnt->bindValue(':user_lastname', $user_lastname);
                    $stmnt->bindValue(':user_email', $user_email);
                    $stmnt->bindValue(':user_password', $mdpcrypt);
                    $stmnt->execute();
                        {
                            session_start();
                            $_SESSION['user_id'] = $user_email;
                            header('location:../index.php');
                        }
                }
                else{

                $message = '<p class="error"> Les mots de passe sont differents';
                }
            }
        }
    }
}