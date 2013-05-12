<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $TagId
 * @property string $Text
 */
class Tag extends \Pvik\Database\Generic\Entity {
    public function __construct(){
        $this->ModelTableName = 'Tags';
    }
}