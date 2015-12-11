<?php

namespace models;

class UserClass extends DbModel
{

    private $UserObject;

    public function get_info($idArg)
    {
        if (isset($this->UserObject[$idArg])) {
            return $this->UserObject[$idArg];
        } else return 'index not set';

    }

    public function setInfo($args)
    {
        $this->UserObject = array_merge($this->UserObject, $args);

    }

    public function newUser($uid)
    {
        $sql = "SELECT * FROM user WHERE user_id='$uid'"; //запрашиваем строку с искомым id
        $rez = $this->mdb->query($sql);
        if (count($rez) == 1) {
            $this->UserObject = $rez[0];
        }
    }

}