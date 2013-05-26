<?php
namespace Pinboard\Model\ModelTables;
use \Pvik\Database\ORM\FieldDefinition\Type;
class Tags extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'tags';
        $this->entityName = 'Tag';
        $this->primaryKeyName = 'tagId';
        $this->fieldDefinition['tagId'] = array ('Type' => Type::PRIMARY_KEY);
        $this->fieldDefinition['text'] =  array ('Type' => Type::NORMAL);
    }


    public function getTopTags($limit = 20){   
        $selectBuilder = \Pvik\Database\ORM\ModelTable::get('Tags')->getEmptySelectBuilder();
        $selectBuilder->addField('count(tagsPostsCount.tagsPostsId) as count');
        $selectBuilder->addInnerJoin('tagsPosts', null, 'tagsPostsCount');
        $selectBuilder->addGroupBy('tags.tagId');
        $selectBuilder->limit($limit);
        $selectBuilder->orderBy('count Desc');
        $tags = $selectBuilder->select();    
        
        return $tags;
    }
}