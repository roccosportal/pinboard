<?php

namespace Pinboard\Controllers;

class Search extends \Pvik\Web\Controller {
    public function indexAction(){
     
        $text = $this->request->getPOST('text');
        $name = $this->request->getPOST('name');
        $tagsString = $this->request->getPOST('tags');
        
        
        $selectBuilder = \Pvik\Database\ORM\ModelTable::get('Posts')->getEmptySelectBuilder();
        $selectBuilder->orderBy('posts.created DESC');
        
        $where = '';
        if($text){
            $where .= 'posts.text LIKE "%s"';
            $selectBuilder->addParameter('%' . $text . '%');
        }
        
        if($name){
            if(!empty($where)){
                $where .= ' AND ';
            }
            $where .= 'posts.name LIKE "%s"';
            $selectBuilder->addParameter('%' . $name . '%');
        }
        
        if($tagsString){

            $tagsString = str_replace(' ', '', $tagsString);
            $tagsStringArray = preg_split('/,/', $tagsString);
            $query = \Pvik\Database\ORM\ModelTable::get('Tags')->getEmptySelectBuilder();
            $query->where('tags.text IN (%s)');
            $tagParameters = array();
            foreach($tagsStringArray as $tagString){
                if(strlen($tagString) >= 4 && !preg_match('/[^A-Za-z0-9]/', $tagString)){
                    $tagString = strtolower($tagString);
                    $tagParameters[] = $tagString;
                }
            }
            $query->addParameter($tagParameters);
            
            $tags = $query->select();
            $tagIds = $tags->loadList('tagId');
            
            if(!empty($where)){
                $where .= ' AND ';
            }
           
            $selectBuilder->addInnerJoin('tagsPosts', null, 'tagsPosts_tagJoin');
            $where .= 'tagsPosts_tagJoin.tagId IN (%s)';
            $selectBuilder->addParameter($tagIds);
       
        }
        
        if(!empty($where)){
            $selectBuilder->where($where);
            $posts = $selectBuilder->select();
        }
        else {
            $posts = new \Pvik\Database\ORM\EntityArray();
            $posts->setModelTable(\Pvik\Database\ORM\ModelTable::get('Posts'));
        }
        
     
      
        $this->viewData->set('Posts', $posts);
        
        $top20Tags = \Pvik\Database\ORM\ModelTable::get('Tags')->getTopTags(20);
        $this->viewData->set('Top20Tags', $top20Tags);
         $this->viewData->set('request', $this->request);
        $this->executeView();
    }
}