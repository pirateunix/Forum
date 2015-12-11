<?php
namespace controllers;

use config\Templater;

class ShowTreads
{

    protected $smarty;

    public function __construct()
    {

        $this->smarty = Templater::getInstance()->smarty();

    }


    public function index()
    {

        $objectTopic = new \models\ModelTopic();
        $topics = $objectTopic->showTopics();
        $this->smarty->assign('topics', $topics);
        $this->smarty->display('main.tpl');
        ini_set("session.use_trans_sid", true);
    }

    public function posts($args)
    {

        $objectTopic = new \models\ModelTopic();
        $objectPost = new \models\ModelPosts();
        $posts = $objectPost->showPosts($args['topic_id']);
        $topic = $objectTopic->showTopic($args['topic_id']);

        $this->smarty->assign('topic', $topic);
        $this->smarty->assign('posts', $posts);
        $this->smarty->display('posts.tpl');
    }

    public function reply($args)
    {
        $posts = new \models\ModelPosts();
        $result = $posts->addPost($_POST['post_text'], $args['topic_id']);
        $this->posts($args);
        return $result;
    }

    public function showReply($args)
    {

        $this->posts($args);
        $this->smarty->display('reply.tpl');
    }


    public function del($args)
    {
        $posts = new \models\ModelPosts();
        $result = $posts->delPost($args['post_id']);
        $this->posts($args);
        return $result;

    }

    public function topicAdd()
    {

        $users = new ControlerUser();
        $online = $users->isonline();

         if ($online) {
         $user_id = $_COOKIE['user_id'];
        $topics = new ModelTopic();
        $result = $topics->addTopic($_POST['topic_theam'], $_POST['topic_text']);
        return $result;
        $this->index();
        } else echo "you dont have permission";

    }
}

