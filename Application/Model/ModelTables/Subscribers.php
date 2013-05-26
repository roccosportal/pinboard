<?php
namespace Pinboard\Model\ModelTables;
use \Pvik\Database\ORM\FieldDefinition\Type;
class Subscribers extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'subscribers';
        $this->entityName = 'Subscriber';
        $this->primaryKeyName = 'subscriberId';
        $this->fieldDefinition['subscriberId'] = array ('Type' => Type::PRIMARY_KEY);
        $this->fieldDefinition['postId'] = array ('Type' => Type::NORMAL);
        $this->fieldDefinition['email'] =  array ('Type' => Type::NORMAL);
    }
}