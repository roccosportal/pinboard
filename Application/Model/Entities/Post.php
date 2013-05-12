<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $PostId
 * @property string $Name
 * @property string $Text
 * @property date $Created
 * @property \Pvik\Database\Generic\EntityArray $Comments
 * @property \Pvik\Database\Generic\EntityArray $TagsPosts
 */
class Post extends \Pvik\Database\Generic\Entity {
    public function __construct(){
        $this->ModelTableName = 'Posts';
    }

    public function Insert(){
    	$this->Created = date('Y.m.d H:i:s');
    	parent::Insert();
    }

    public function GetCommentsCount(){
    	return count($this->GetKeys('Comments'));
    }

    public function GetTagsListHtml(){
    	$Html = '';
    	$First = true;
    	foreach($this->TagsPosts as $TagsPosts){
    		if($First){
    			$First = false;
    		}
    		else {
    			$Html .= ', ';
    		}
    		$Html .= $TagsPosts->Tag->Text;
    	}

    	if(empty($Html)){
    		$Html = '(none)';
    	}




    	return $Html;
    }

    public function getGravatarSrc(){
        return 'http://www.gravatar.com/avatar/' . md5($this->Name . '@'  . $_SERVER['SERVER_NAME']) . '?f=y&d=identicon&s=64';
    }
}