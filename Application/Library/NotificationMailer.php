<?php

namespace Pinboard\Library;

class NotificationMailer {
    
    public function sendMailTo($to, $message){
        $preSubject = \Pvik\Core\Config::$config['NotificationMailer']['PreSubject'];
        $from = \Pvik\Core\Config::$config['NotificationMailer']['From']; 
        $subject = $preSubject. 'Notification';
  
        $header = 'From: '. $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $header);
    }
   
    public function publishNotification(\Pinboard\Model\Entities\Post $post){
        $message = 'A new comment was added to a post.' . "\r\n";
        $message .= $_SERVER['HTTP_HOST'] . \Pvik\Core\Path::relativePath('~/details/' . $post->postId . '/');
        foreach($post->subscribers as $subscriber){
            $this->sendMailTo($subscriber->email, $message);
        }
    }
}
