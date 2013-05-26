<?php
namespace Pinboard\Model\ModelTables;

class Comments extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'comments';
        $this->entityName = 'Comment';
        $this->primaryKeyName = 'commentId';
        $this->fieldDefinition['commentId'] = array ('Type' => 'PrimaryKey');
        $this->fieldDefinition['name'] =  array ('Type' => 'Normal');

        $this->fieldDefinition['text'] =  array ('Type' => 'Normal');
        $this->fieldDefinition['created'] =  array ('Type' => 'Normal');

        $this->fieldDefinition['postId'] = array(
              'Type' => 'ForeignKey', 
              'ModelTable' => 'Posts' 
        );
    
        $this->fieldDefinition['post'] = array(
               'Type' => 'ForeignObject',
               'ForeignKey' => 'PostId'
       );
    }
}