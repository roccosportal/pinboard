<?php
namespace Pinboard\Model\ModelTables;

class Subscribers extends \Pvik\Database\Generic\ModelTable {
    public function __construct(){
        $this->TableName = 'Subscribers';
        $this->EntityName = 'Subscriber';
        $this->PrimaryKeyName = 'SubscriberId';
        $this->FieldDefinition['SubscriberId'] = array ('Type' => 'PrimaryKey');
        $this->FieldDefinition['PostId'] = array ('Type' => 'Normal');
        $this->FieldDefinition['Email'] =  array ('Type' => 'Normal');
    }
}