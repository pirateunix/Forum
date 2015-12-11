<?php

namespace models;

class ModelPosts extends DbModel
{

    public function showPosts($topicId)
    {
        $sql = "SELECT post_id, text, topic_id, login, post_time FROM posts LEFT OUTER JOIN user ON posts.user_id = user.user_id WHERE topic_id = $topicId";
        $result = $this->mdb->query($sql);
        return $result;
    }

    public function addPost($text, $topicId)
    {
        $sql = "INSERT INTO posts (text, topic_id, user_id) VALUES ('$text', $topicId, 1)";
        $result = $this->mdb->query($sql);
        return $result;
    }

    public function delPost($postId)
    {
        $sql = "DELETE FROM `posts` WHERE post_id = $postId";
        $result = $this->mdb->query($sql);
        return $result;
    }


}