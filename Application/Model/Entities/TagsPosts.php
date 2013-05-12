<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $TagsPostId
 * @property int $TagId
 * @property int $PostId
 * @property \Pinboard\Model\Entities\Tag $Tag
 */
class TagsPosts extends \Pvik\Database\Generic\Entity {
    public function __construct(){
        $this->ModelTableName = 'TagsPosts';
    }
}