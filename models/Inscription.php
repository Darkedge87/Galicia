<?php

// class Inscription {


// }

if (isset($_POST['submit_inscription'])) 
{
    $user_name = $_POST['name'];
    $user_lastname = $_POST['lastname'];
    $user_mail = $_POST['email'];
    $mdp1 = $_POST['mdp1'];
    $mdp2 = $_POST['mdp2'];
    

    if ((empty($user_mail)) OR empty($user_name) OR empty($user_lastname) OR empty($mdp1) OR empty($mdp2))
        {
            $message = '<p class="error"> Vous devez saisir les informations demandées</p>';
        }

        else
        {
            $result = $mysqli->query('SELECT count(user_mail) FROM user WHERE user_mail = "'.$user_mail.'"');
            $row = $result->fetch_array();

            if ($row[0] > 0)
            {
                $message = '<p class="error"> Cette email est déjà utilisé </p>';
            }
            else
            {
                if ($mdp1 == $mdp2)
                {
                    $mdpcrypt = crypt($mdp1);
                    $mysqli->query('INSERT INTO user (user_name, user_lastname, user_mail, user_password) VALUES ("'.$user_name.'", "'.$user_lastname.'", "'.$user_mail.'", "'.$mdpcrypt.'")');
                        {
                            session_start();
                            $_SESSION['user_id'] = $user_mail;
                            header('location:../index.php');
                        }
                }
                else
                {
                    $message = '<p class="error"> Les mots de passe sont differents';
                }
            }
        }
}