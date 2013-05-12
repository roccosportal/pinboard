<?php

namespace Pinboard\Controllers;

class NewPost extends \Pvik\Web\Controller {
    public function IndexAction(){
        $ValidationState = new \Pvik\Utils\ValidationState();
    	if($this->Request->IsPOST('submit')){
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
    			$Post = new \Pinboard\Model\Entities\Post();
    			$Post->Name = $Name;
    			$Post->Text = $Text;
    			$Post->Insert();

                $TagsString = $this->Request->GetPOST('tags');
                $TagsString = str_replace(' ', '', $TagsString);
                $TagsStringArray = preg_split('/,/', $TagsString);
                foreach($TagsStringArray as $TagString){
                    if(strlen($TagString) >= 4 && !preg_match('/[^A-Za-z0-9]/', $TagString)){
                        $TagString = strtolower($TagString);
                        $Query = new \Pvik\Database\Generic\Query('Tags');
                        $Query->SetConditions('WHERE Tags.Text = "%s"');
                        $Query->AddParameter($TagString);
                        $Tag = $Query->SelectSingle();
                        if($Tag == null){
                            $Tag = new \Pinboard\Model\Entities\Tag();
                            $Tag->Text = $TagString;
                            $Tag->Insert();
                        }

                        $TagsPost = new \Pinboard\Model\Entities\TagsPosts();
                        $TagsPost->PostId = $Post->PostId;
                        $TagsPost->TagId = $Tag->TagId;
                        $TagsPost->Insert();
                    }
                }

                $Email = $this->Request->GetPOST('email');
                if($Email && filter_var($Email, FILTER_VALIDATE_EMAIL)){
                    $Subscriber = new \Pinboard\Model\Entities\Subscriber();
                    $Subscriber->PostId = $Post->PostId;
                    $Subscriber->Email = $Email;
                    $Subscriber->Insert();
                }


    			$this->RedirectToPath('~/details/' . $Post->PostId . '/');
    		}


    	}
        $this->ViewData->Set('ValidationState', $ValidationState);
        $this->ViewData->Set('Request', $this->Request);

        $this->ExecuteView();
    }
}