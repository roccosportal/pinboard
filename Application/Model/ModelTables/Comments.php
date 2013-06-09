<?php
namespace Pinboard\Model\ModelTables;
use \Pvik\Database\ORM\FieldDefinition\Type;
class Comments extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'comments';
        $this->entityName = 'Comment';
        $this->primaryKeyName = 'commentId';
        $this->fieldDefinition['commentId'] = array ('Type' => Type::PRIMARY_KEY);
        $this->fieldDefinition['name'] =  array ('Type' => Type::NORMAL);

        $this->fieldDefinition['text'] =  array ('Type' => Type::NORMAL);
        $this->fieldDefinition['created'] =  array ('Type' => Type::NORMAL);

        $this->fieldDefinition['postId'] = array(
              'Type' => Type::FOREIGN_KEY, 
              'ModelTable' => 'Posts' 
        );
    
        $this->fieldDefinition['post'] = array(
               'Type' => Type::FOREIGN_OBJECT,
               'ForeignKey' => 'postId'
       );
    }
}