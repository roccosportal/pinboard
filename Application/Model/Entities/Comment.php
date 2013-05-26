<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $commentId
 * @property string $name
 * @property string $text
 * @property int $postId
 * @property Post $post
 * @porperty date $created
 */
class Comment extends \Pvik\Database\ORM\Entity {
    public function __construct(){
        $this->modelTableName = 'Comments';
    }

    public function insert(){
    	$this->created = date('Y.m.d H:i:s');
    	parent::insert();
    }

     public function getGravatarSrc(){
        return 'http://www.gravatar.com/avatar/' . md5($this->name . '@'  . $_SERVER['SERVER_NAME']) . '?f=y&d=identicon&s=64';
    }
}