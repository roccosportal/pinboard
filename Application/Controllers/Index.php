<?php

namespace Pinboard\Controllers;

class Index extends \Pvik\Web\Controller {
    public function indexAction(){
        
        $post = new \Pinboard\Model\Entities\Post();
        $post->text = 'test';
        $post->name = 'test';
        $primaryKey = $post->insert();
        
        $post = \Pvik\Database\ORM\ModelTable::get('Posts')->loadByPrimaryKey($primaryKey);
        $post->text = 'test';
        $post->update();
        
        $post->delete();
 

    	$currentPage = $this->request->getParameters()->get('page');
    	if($currentPage==null || $currentPage == 0){
    		$currentPage = 0;
    	}
    	else {
    		$currentPage--;
    	}

    	
    	$pageLimit = 10;
    	$start = $currentPage * $pageLimit;
    	

    	$postCount =  (\Pvik\Database\ORM\ModelTable::get('Posts')->getPostCount());
	    $pageCount = ceil($postCount / $pageLimit);

	    if($start <= $postCount){
                    $selectBuilder = \Pvik\Database\ORM\ModelTable::get('Posts')->getEmptySelectBuilder();
                    $selectBuilder->orderBy('posts.created DESC');
                    $selectBuilder->limit($pageLimit);
                    $selectBuilder->offset($start);
                    $posts = $selectBuilder->select();
                    
                    
	    }
	    else {
	    	$posts = array();
	    }

        $top20Tags = \Pvik\Database\ORM\ModelTable::get('Tags')->getTopTags(20);
        $this->viewData->set('Top20Tags', $top20Tags);
	    $this->viewData->set('Posts', $posts);
	    $this->viewData->set('CurrentPage', $currentPage);
	    $this->viewData->set('PageCount', $pageCount);
        
        $this->executeView();
    }
}