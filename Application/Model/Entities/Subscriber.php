<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $SubscriberId
 * @property int $PostId
 * @property string $Email
 */
class Subscriber extends \Pvik\Database\Generic\Entity {
    public function __construct(){
        $this->ModelTableName = 'Subscribers';
    }
}