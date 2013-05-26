<?php
namespace Pinboard\Model\ModelTables;

class Posts extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'posts';
        $this->entityName = 'Post';
        $this->primaryKeyName = 'postId';
        $this->fieldDefinition['postId'] = array ('Type' => 'PrimaryKey');
        $this->fieldDefinition['name'] =  array ('Type' => 'Normal');
        $this->fieldDefinition['text'] =  array ('Type' => 'Normal');
        $this->fieldDefinition['created'] =  array ('Type' => 'Normal');

        $this->fieldDefinition['comments'] = array (
             'Type' => 'ManyForeignObjects', 
             'ModelTable' => 'Comments', 
             'ForeignKey' => 'postId' 
        );

        $this->fieldDefinition['tagsPosts'] = array (
             'Type' => 'ManyForeignObjects', 
             'ModelTable' => 'TagsPosts', 
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