<?php

namespace App\Controller;
//for changeing layout for whole controller
use Cake\Event\EventInterface;

class BlogsController extends AppController{
    
    //for changeing layout for whole controller
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');
    }
    
    
    //inside template blogs
    public function home()
    {
        // exit("Hello");
        //to add more models in this controller
        $this->loadModel('Articles');

        //taking all articles in variable
        $articles = $this->Articles->find('all')
                                    ->order(['Articles.id DESC']);
        
        $articleList = $this->Articles->find('list')->limit('8');

        //for seeing object articles
        // debug($articles);
        
        //setting data + adding pagination
        $this->set('articles',$this->paginate($articles,['limit'=>'3']));

        $this->set('articleList',$articleList);
    }

    //inside template blogs
    public function about()
    {

    }

    public function contact()
    {

    }

    public function view($id = null)
    {
        $this->loadModel('Articles');

        $article = $this->Articles->get($id);

        $this->set('article',$article);
        // debug($article);
        // exit;
    }
} 