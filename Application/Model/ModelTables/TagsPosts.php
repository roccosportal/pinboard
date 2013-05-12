<?php
namespace Pinboard\Model\ModelTables;

class TagsPosts extends \Pvik\Database\Generic\ModelTable {
    public function __construct(){
        $this->TableName = 'TagsPosts';
        $this->EntityName = 'TagsPosts';
        $this->PrimaryKeyName = 'TagsPostsId';
        $this->FieldDefinition['TagsPostsId'] = array ('Type' => 'PrimaryKey');
        $this->FieldDefinition['PostId'] =  array ('Type' => 'Normal');


         $this->FieldDefinition['TagId'] = array(
              'Type' => 'ForeignKey', 
              'ModelTable' => 'Tags' 
        );
    
        $this->FieldDefinition['Tag'] = array(
               'Type' => 'ForeignObject',
               'ForeignKey' => 'TagId'
       );
    }
}