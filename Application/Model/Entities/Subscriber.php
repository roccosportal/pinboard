<?php
namespace Pinboard\Model\Entities;

/**
 * @property int $subscriberId
 * @property int $postId
 * @property string $email
 */
class Subscriber extends \Pvik\Database\ORM\Entity {
    public function __construct(){
        $this->modelTableName = 'Subscribers';
    }
}