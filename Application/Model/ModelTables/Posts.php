<?php
namespace Pinboard\Model\ModelTables;

class Posts extends \Pvik\Database\Generic\ModelTable {
    public function __construct(){
        $this->TableName = 'Posts';
        $this->EntityName = 'Post';
        $this->PrimaryKeyName = 'PostId';
        $this->FieldDefinition['PostId'] = array ('Type' => 'PrimaryKey');
        $this->FieldDefinition['Name'] =  array ('Type' => 'Normal');
        $this->FieldDefinition['Text'] =  array ('Type' => 'Normal');
        $this->FieldDefinition['Created'] =  array ('Type' => 'Normal');

        $this->FieldDefinition['Comments'] = array (
             'Type' => 'ManyForeignObjects', 
             'ModelTable' => 'Comments', 
             'ForeignKey' => 'PostId' 
        );

        $this->FieldDefinition['TagsPosts'] = array (
             'Type' => 'ManyForeignObjects', 
             'ModelTable' => 'TagsPosts', 
             'ForeignKey' => 'PostId' 
        );     
    }
}