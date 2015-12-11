<?php

namespace controllers;

use config\Templater;

class ControlerUser
{

    protected $smarty;

    public function __construct()
    {
        $this->smarty = Templater::getInstance()->smarty();

    }

    public function index()
    {
        $this->smarty->display('users.tpl');
    }

    public function registration()
    {
        $this->smarty->display('registration.tpl');
    }

    public function reg()
    {
        $regUser = new \models\ModelRegUser();
        $result = $regUser->registration();
        if (!$result) {
            $this->smarty->display('registration.tpl');
        } else {
            $showTreads = new ShowTreads();
            $showTreads->index();
        }
    }

    public function isreg()
    {
        $regUser = new \models\ModelRegUser();
        $result = $regUser->registrationCorrect();
        if (!$result) {
            $this->smarty->display('registration.tpl');
        } else {
            $this->reg();
        }

    }

    public function entering()
    {
        $auth = new \models\ModelAuth();
        $auth->enter();
        $this->smarty->assign('online', 1);
        $showTreads = new ShowTreads();
        $showTreads->index();
    }

    public function isonline()
    {
        $auth = new \models\ModelAuth();
        $rez = $auth->online();
        return $rez;
    }

    public function logout()
    {
        $auth = new \models\ModelAuth();
        $auth->logout();
        $this->smarty->assign('online', 0);
        $showThreads = new ShowTreads();
        $showThreads->index();
    }

}