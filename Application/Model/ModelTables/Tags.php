<?php
namespace Pinboard\Model\ModelTables;

class Tags extends \Pvik\Database\Generic\ModelTable {
    public function __construct(){
        $this->TableName = 'Tags';
        $this->EntityName = 'Tag';
        $this->PrimaryKeyName = 'TagId';
        $this->FieldDefinition['TagId'] = array ('Type' => 'PrimaryKey');
        $this->FieldDefinition['Text'] =  array ('Type' => 'Normal');
    }
}