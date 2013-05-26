<?php
namespace Pinboard\Model\ModelTables;

class Tags extends \Pvik\Database\ORM\ModelTable {
    public function __construct(){
        $this->tableName = 'tags';
        $this->entityName = 'Tag';
        $this->primaryKeyName = 'tagId';
        $this->fieldDefinition['tagId'] = array ('Type' => 'PrimaryKey');
        $this->fieldDefinition['text'] =  array ('Type' => 'Normal');
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