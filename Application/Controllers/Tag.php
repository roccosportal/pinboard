<?php

namespace Pinboard\Controllers;

class Tag extends \Pvik\Web\Controller {
    public function indexAction(){

    	$tagId = $this->request->getParameters()->get('tag-id');

        $selectBuilder = \Pvik\Database\ORM\ModelTable::get('Posts')->getEmptySelectBuilder();
        $selectBuilder->addInnerJoin('tagsPosts', null, 'tagsPostsJoin');
        $selectBuilder->where('tagsPostsJoin.tagId = %s');
        $selectBuilder->addParameter($tagId);
        $posts = $selectBuilder->select();

        $this->viewData->set('Posts', $posts);

        $topTags = \Pvik\Database\ORM\ModelTable::get('Tags')->getTopTags(50);
        $this->viewData->set('TopTags', $topTags);
        
        $this->executeView();
    }
}