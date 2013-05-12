<?php

namespace Pinboard\Controllers;

class PostDetails extends \Pvik\Web\Controller {
    public function IndexAction(){
    	$PostId = $this->Request->GetParameters()->Get('post-id');
    	if(!$PostId){
    		 $this->RedirectToPath('~/');
    	}


    	$Post = \Pvik\Database\Generic\ModelTable::Get('Posts')->LoadByPrimaryKey($PostId);
    	if(!$Post){
    		$this->RedirectToPath('~/');
    	}

        $ValidationState = new \Pvik\Utils\ValidationState();

        if($this->Request->IsPost('submit')){
            $Name = $this->Request->GetPOST('name');
            $Text = $this->Request->GetPOST('text');


            if(!$Name || empty($Name)){
                $ValidationState->SetError('Name', 'Field can not be empty');
            }
            else if(strlen($Name) < 4){
                $ValidationState->SetError('Name', 'Field too short.');
            }

            if(!$Text || empty($Text)){
                $ValidationState->SetError('Text', 'Field can not be empty');
            }
            else if(strlen($Text) < 20){
                $ValidationState->SetError('Text', 'Field too short.');
            }

            if($ValidationState->IsValid()){
                $Comment = new \Pinboard\Model\Entities\Comment();
                $Comment->PostId = $Post->PostId;
                $Comment->Name = $Name;
                $Comment->Text = $Text;
                $Comment->Insert();
            }
        }
        
        $this->ViewData->Set('ValidationState', $ValidationState);
        $this->ViewData->Set('Request', $this->Request);
    	$this->ViewData->Set('Post', $Post);

        $this->ExecuteView();
    }
}