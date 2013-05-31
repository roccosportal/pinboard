<?php
namespace Pinboard\Model\ModelTables;
use \Pvik\Database\ORM\FieldDefinition\Type;
class Posts extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'posts';
        $this->entityName = 'Post';
        $this->primaryKeyName = 'postId';
        $this->fieldDefinition['postId'] = array ('Type' => Type::PRIMARY_KEY);
        $this->fieldDefinition['name'] =  array ('Type' => Type::NORMAL);
        $this->fieldDefinition['text'] =  array ('Type' => Type::NORMAL);
        $this->fieldDefinition['created'] =  array ('Type' => Type::NORMAL);

        $this->fieldDefinition['comments'] = array (
             'Type' => Type::MANY_FOREIGN_OBJECTS, 
             'ModelTable' => 'Comments', 
             'ForeignKey' => 'postId' 
        );

        $this->fieldDefinition['tagsPosts'] = array (
             'Type' => Type::MANY_FOREIGN_OBJECTS, 
             'ModelTable' => 'TagsPosts', 
             'ForeignKey' => 'postId' 
        );     
        
        
         $this->fieldDefinition['subscribers'] = array (
             'Type' => Type::MANY_FOREIGN_OBJECTS, 
             'ModelTable' => 'Subscribers', 
             'ForeignKey' => 'postId' 
        );     
    }

    public function getPostCount(){

        $result = \Pvik\Database\SQL\Manager::getInstance()->execute('select count(posts.postId) as count From posts');
        
        while ($data = \Pvik\Database\SQL\Manager::getInstance()->fetchAssoc($result)) {
            $postCount = $data['count'];
            break;
        }
        return $postCount;
    }


    
}