<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $tagId
 * @property string $text
 */
class Tag extends \Pvik\Database\ORM\Entity {
    public function __construct(){
        $this->modelTableName = 'Tags';
    }
}