<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $CommentId
 * @property string $Name
 * @property string $Text
 * @property int $PostId
 * @property Post $Post
 * @porperty date $Created
 */
class Comment extends \Pvik\Database\Generic\Entity {
    public function __construct(){
        $this->ModelTableName = 'Comments';
    }

    public function Insert(){
    	$this->Created = date('Y.m.d H:i:s');
    	parent::Insert();
    }

     public function getGravatarSrc(){
        return 'http://www.gravatar.com/avatar/' . md5($this->Name . '@'  . $_SERVER['SERVER_NAME']) . '?f=y&d=identicon&s=64';
    }
}