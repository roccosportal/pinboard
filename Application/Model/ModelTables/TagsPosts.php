<?php
namespace Pinboard\Model\ModelTables;

class TagsPosts extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'tagsPosts';
        $this->entityName = 'TagsPosts';
        $this->primaryKeyName = 'tagsPostsId';
        $this->fieldDefinition['tagsPostsId'] = array ('Type' => 'PrimaryKey');
        $this->fieldDefinition['postId'] =  array ('Type' => 'Normal');


         $this->fieldDefinition['tagId'] = array(
              'Type' => 'ForeignKey', 
              'ModelTable' => 'Tags' 
        );
    
        $this->fieldDefinition['tag'] = array(
               'Type' => 'ForeignObject',
               'ForeignKey' => 'tagId'
       );
    }
}