<?php

namespace models;


class ModelAuth extends DbModel
{

    public function enter()
    {

        $error = array(); //массив для ошибок
        if ($_POST['login'] != "" && $_POST['password'] != "") //если поля заполнены

        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM user WHERE login = '$login'";
            $rez = $this->mdb->query($sql); //запрашиваем строку из БД с логином
            if (count($rez) == 1) //если одно совпадение, значит юзер существует

            {
                if (md5(md5($password) . $rez[0]['salt']) == $rez[0]['password']) //сравниваем хэшированный пароль из БД с хэшированными паролем, введённым пользователем

                {
                    setcookie("login", $rez[0]['login'], time() + 50000, '/');
                    setcookie("password", md5($rez[0]['login'] . $rez[0]['password']), time() + 50000, '/');
                    setcookie("user_id", $rez[0]['user_id'], time() + 50000, '/');
                    session_start();
                    $_SESSION['id'] = $rez[0]['user_id'];
                    $id = $_SESSION['id'];
                    $this->lastAct($id);
                    return $error;
                } else //если пароли не совпали

                {
                    $error[] = "Неверный пароль";
                    return $error;
                }
            } else {
                $error[] = "Неверный логин и пароль";
                return $error;
            }
        } else {
            $error[] = "Поля не должны быть пустыми!";
            return $error;
        }


    }

    public function lastAct($id)
    {
        $tm = time();
        $sql = "UPDATE user SET online='$tm', last_act='$tm' WHERE user_id='$id'";
        $rez = $this->mdb->query($sql);
    }

    public function online()
    {
        ini_set("session.use_trans_sid", true);
        session_start();
        if (isset($_SESSION['id'])) {
            if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                setcookie("login", "", time() - 1, '/');
                setcookie("password", "", time() - 1, '/');

                setcookie("login", $_COOKIE['login'], time() + 50000, '/');

                setcookie("password", $_COOKIE['password'], time() + 50000, '/');

                $id = $_SESSION['id'];
                $this->lastAct($id);
                return true;

            } else {
                $sql = "SELECT * FROM user WHERE user_id='{$_SESSION['id']}'";
                $rez = $this->mdb->query($sql);
                if (count($rez) == 1) {

                    setcookie("login", $rez[0]['login'], time() + 50000, '/');

                    setcookie("password", md5($rez[0]['login'] . $rez[0]['password']), time() + 50000, '/');

                    $id = $_SESSION['id'];
                    $this->lastAct($id);
                    return true;
                } else return false;
            }
        } else //если сессии нет, то проверим существование cookie. Если они существуют, то проверим их
        {
            if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                $sql = "SELECT * FROM user WHERE login='{$_COOKIE['login']}'";
                $rez = $this->mdb->query($sql);

                if (count($rez) == 1 && md5($rez[0]['login'] . $rez[0]['password']) == $_COOKIE['password']) {

                    $_SESSION['id'] = $rez[0]['user_id'];
                    $id = $_SESSION['id'];

                    $this->lastAct($id);
                    return true;
                } else //если данные из cookie не подошли, то удаляем эти куки
                {
                    setcookie("login", "", time() - 360000, '/');

                    setcookie("password", "", time() - 360000, '/');
                    return false;

                }
            } else {
                return false;
            }
        }
    }

    public function isAdmin($id)
    {
        $sql = "SELECT rights FROM user WHERE id='$id'";
        $rez = $this->mdb->query($sql);

        if (count($rez) == 1) {

            if ($rez[0]['rights'] == 1) return true;
            else return false;

        } else return false;
    }

    public function logout()
    {
        session_start();
        $id = $_SESSION['id'];

        $sql = "UPDATE user SET online=0 WHERE user_id='$id'";
        $this->mdb->query($sql);
        unset($_SESSION['id']);
        SetCookie("login", "");

        SetCookie("password", "");
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/');
    }
}