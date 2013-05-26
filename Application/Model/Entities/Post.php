<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $postId
 * @property string $name
 * @property string $text
 * @property date $created
 * @property \Pvik\Database\ORM\EntityArray $comments
 * @property \Pvik\Database\ORM\EntityArray $tagsPosts
 */
class Post extends \Pvik\Database\ORM\Entity {
    public function __construct(){
        $this->modelTableName = 'Posts';
    }

    public function insert(){
    	$this->created = date('Y.m.d H:i:s');
    	return parent::insert();
    }

    public function getCommentsCount(){
    	return count($this->getKeys('comments'));
    }

    public function getTagsListHtml(){
    	$html = '';
    	$first = true;
    	foreach($this->tagsPosts as $tagsPosts){
    		if($first){
    			$first = false;
    		}
    		else {
    			$html .= ', ';
    		}
    		$html .= $tagsPosts->tag->text;
    	}

    	if(empty($html)){
    		$html = '(none)';
    	}




    	return $html;
    }

    public function getGravatarSrc(){
        return 'http://www.gravatar.com/avatar/' . md5($this->name . '@'  . $_SERVER['SERVER_NAME']) . '?f=y&d=identicon&s=64';
    }
}