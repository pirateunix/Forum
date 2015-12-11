<?php

namespace models;


class ModelRegUser extends DbModel
{

    public function registration()
    {
        $login = htmlspecialchars($_POST['login']);
        $password = $_POST['password'];
        $mail = htmlspecialchars($_POST['mail']);
        $salt = mt_rand(100, 999);
        $tm = time();
        $password = md5(md5($password) . $salt);
        $sql = "INSERT INTO user (login,password,salt,mail,last_act) VALUES ('" . $login . "','" . $password . "','" . $salt . "','" . $mail . "','" . $tm . "')";
        $result = $this->mdb->query($sql);
        if ($result) {
            setcookie("login", $login, time() + 50000, '/');
            setcookie("password", md5($login . $password), time() + 50000, '/');
            $sql = "SELECT * FROM user WHERE login = '$login'";
            $result = $this->mdb->query($sql);
            $_SESSION['id'] = $result[0]['user_id'];
            //$regged = true;
            return true;
        }
    }

    public function registrationCorrect()
    {
        if ($_POST['login'] == "") return false;
        if ($_POST['password'] == "") return false;
        if ($_POST['password2'] == "") return false;
        if ($_POST['mail'] == "") return false;
        if (!preg_match('/^([a-z0-9])(\w|[.]|-|_)+([a-z0-9])@([a-z0-9])([a-z0-9.-]*)([a-z0-9])([.]{1})([a-z]{2,4})$/is', $_POST['mail'])) return false;
        if (!preg_match('/^([a-zA-Z0-9])(\w|-|_)+([a-z0-9])$/is', $_POST['login'])) return false;
        if (strlen($_POST['password']) < 5) return false;
        if ($_POST['password'] != $_POST['password2']) return false;
        $login = $_POST['login'];
        $sql = "SELECT * FROM user WHERE login = '$login'";
        $rez = $this->mdb->query($sql);
        if (count($rez) != 0) return false; // проверка на существование в БД такого же логина
        return true;
    }

}