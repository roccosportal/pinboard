<?php
namespace Pinboard\Model\ModelTables;
use \Pvik\Database\ORM\FieldDefinition\Type;
class TagsPosts extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'tagsPosts';
        $this->entityName = 'TagsPosts';
        $this->primaryKeyName = 'tagsPostsId';
        $this->fieldDefinition['tagsPostsId'] = array ('Type' => Type::PRIMARY_KEY);
        $this->fieldDefinition['postId'] =  array ('Type' => Type::NORMAL);


         $this->fieldDefinition['tagId'] = array(
              'Type' => Type::FOREIGN_KEY, 
              'ModelTable' => 'Tags' 
        );
    
        $this->fieldDefinition['tag'] = array(
               'Type' => Type::FOREIGN_OBJECT,
               'ForeignKey' => 'tagId'
       );
    }
}