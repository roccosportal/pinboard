<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $tagsPostId
 * @property int $tagId
 * @property int $postId
 * @property \Pinboard\Model\Entities\Tag $tag
 */
class TagsPosts extends \Pvik\Database\ORM\Entity {
    public function __construct(){
        $this->modelTableName = 'TagsPosts';
    }
}