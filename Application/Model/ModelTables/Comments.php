<?php
namespace Pinboard\Model\ModelTables;

class Comments extends \Pvik\Database\Generic\ModelTable {
    public function __construct(){
        $this->TableName = 'Comments';
        $this->EntityName = 'Comment';
        $this->PrimaryKeyName = 'CommentId';
        $this->FieldDefinition['CommentId'] = array ('Type' => 'PrimaryKey');
        $this->FieldDefinition['Name'] =  array ('Type' => 'Normal');

        $this->FieldDefinition['Text'] =  array ('Type' => 'Normal');
        $this->FieldDefinition['Created'] =  array ('Type' => 'Normal');

          $this->FieldDefinition['PostId'] = array(
              'Type' => 'ForeignKey', 
              'ModelTable' => 'Posts' 
        );
    
        $this->FieldDefinition['Post'] = array(
               'Type' => 'ForeignObject',
               'ForeignKey' => 'PostId'
       );
    }
}