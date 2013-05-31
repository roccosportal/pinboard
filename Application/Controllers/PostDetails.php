<?php

namespace Pinboard\Controllers;

class PostDetails extends \Pvik\Web\Controller {
    public function indexAction(){
    	$postId = $this->request->getParameters()->get('post-id');
    	if(!$postId){
    		 $this->redirectToPath('~/');
    	}


    	$post = \Pvik\Database\ORM\ModelTable::get('Posts')->loadByPrimaryKey($postId);
    	if(!$post){
    		$this->redirectToPath('~/');
    	}

        $validationState = new \Pvik\Utils\ValidationState();

        if($this->request->isPost('submit')){
            $name = $this->request->getPOST('name');
            $text = $this->request->getPOST('text');


            if(!$name || empty($name)){
                $validationState->setError('Name', 'Field can not be empty');
            }
            else if(strlen($name) < 4){
                $validationState->setError('Name', 'Field too short.');
            }

            if(!$text || empty($text)){
                $validationState->setError('Text', 'Field can not be empty');
            }
            else if(strlen($text) < 20){
                $validationState->setError('Text', 'Field too short.');
            }

            if($validationState->isValid()){
                $comment = new \Pinboard\Model\Entities\Comment();
                $comment->postId = $post->postId;
                $comment->name = $name;
                $comment->text = $text;
                $comment->insert();
                
               $notificationMailer = new \Pinboard\Library\NotificationMailer();
               $notificationMailer->publishNotification($post);
            }
            
            $email = $this->request->getPOST('email');
            if($email && filter_var($email, FILTER_VALIDATE_EMAIL)){
                $alreadyExists = false;
                foreach($post->subscribers as $subscriber){
                    if($subscriber->email == $email){
                        $alreadyExists = true;
                        break;
                    }
                }
                
                
                if(!$alreadyExists){
                    $subscriber = new \Pinboard\Model\Entities\Subscriber();
                    $subscriber->postId = $post->postId;
                    $subscriber->email = $email;
                    $subscriber->insert();
                }
            }
            
            
           
        }
        
        $topTags = \Pvik\Database\ORM\ModelTable::get('Tags')->getTopTags(50);
        $this->viewData->set('TopTags', $topTags);
        
        $this->viewData->set('ValidationState', $validationState);
        $this->viewData->set('Request', $this->request);
    	$this->viewData->set('Post', $post);

        $this->executeView();
    }
}