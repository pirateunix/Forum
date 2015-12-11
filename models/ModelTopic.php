<?php

namespace models;

class ModelTopic extends DbModel
{

    public function showTopics()
    {
        $sql = "SELECT topic_id, theam, text, login, create_date FROM topics LEFT OUTER JOIN user ON topics.user_id = user.user_id";
        $result = $this->mdb->query($sql);
        return $result;
    }

    public function showTopic($topicId)
    {
        $sql = "SELECT * FROM topics WHERE topic_id = $topicId";
        $result = $this->mdb->query($sql);
        $row = $result[0];
        return $row;
    }

    public function addTopic($theam, $text)
    {
        $sql = "INSERT INTO topics (theam, text, user_id) VALUES ('$theam', '$text', $_COOKIE[user_id])";
        $result = $this->mdb->query($sql);
        return $result;
    }

}