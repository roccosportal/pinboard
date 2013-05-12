<?php

namespace Pinboard\Controllers;

class Index extends \Pvik\Web\Controller {
    public function IndexAction(){

    	$Query = new \Pvik\Database\Generic\Query('Posts');
	    $Query->SetOrderBy('LIMIT 10');
	    $Posts = $Query->Select();

	    $this->ViewData->Set('Posts', $Posts);
        
        $this->ExecuteView();
    }
}