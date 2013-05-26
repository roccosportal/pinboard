<?php
namespace Pinboard\Model\ModelTables;

class Subscribers extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'subscribers';
        $this->entityName = 'Subscriber';
        $this->primaryKeyName = 'subscriberId';
        $this->fieldDefinition['subscriberId'] = array ('Type' => 'PrimaryKey');
        $this->fieldDefinition['postId'] = array ('Type' => 'Normal');
        $this->fieldDefinition['email'] =  array ('Type' => 'Normal');
    }
}