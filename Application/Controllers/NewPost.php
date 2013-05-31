<?php

namespace Pinboard\Controllers;

class NewPost extends \Pvik\Web\Controller {

    public function indexAction() {
        $validationState = new \Pvik\Utils\ValidationState();
        if ($this->request->isPOST('submit')) {
            $name = $this->request->getPOST('name');
            $text = $this->request->getPOST('text');


            if (!$name || empty($name)) {
                $validationState->setError('Name', 'Field can not be empty');
            } else if (strlen($name) < 4) {
                $validationState->setError('Name', 'Field too short.');
            }

            if (!$text || empty($text)) {
                $validationState->setError('Text', 'Field can not be empty');
            } else if (strlen($text) < 20) {
                $validationState->setError('Text', 'Field too short.');
            }


            if ($validationState->isValid()) {
                $post = new \Pinboard\Model\Entities\Post();
                $post->name = $name;
                $post->text = $text;
                $post->insert();

                $tagsString = $this->request->getPOST('tags');
                $tagsString = str_replace(' ', '', $tagsString);
                $tagsStringArray = array_unique(preg_split('/,/', $tagsString));



                foreach ($tagsStringArray as $tagString) {
                    if (strlen($tagString) >= 4 && !preg_match('/[^A-Za-z0-9]/', $tagString)) {
                        $tagString = strtolower($tagString);
                        $query = \Pvik\Database\ORM\ModelTable::get('Tags')->getEmptySelectBuilder();
                        $query->where('tags.text = "%s"');
                        $query->addParameter($tagString);
                        $tag = $query->selectSingle();
                        if ($tag == null) {
                            $tag = new \Pinboard\Model\Entities\Tag();
                            $tag->text = $tagString;
                            $tag->insert();
                        }


                        $tagsPost = new \Pinboard\Model\Entities\TagsPosts();
                        $tagsPost->postId = $post->postId;
                        $tagsPost->tagId = $tag->tagId;
                        $tagsPost->insert();
                    }
                }

                $email = $this->request->getPOST('email');
                if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $subscriber = new \Pinboard\Model\Entities\Subscriber();
                    $subscriber->postId = $post->postId;
                    $subscriber->email = $email;
                    $subscriber->insert();
                }


                $this->redirectToPath('~/details/' . $post->postId . '/');
            }
        }

        $topTags = \Pvik\Database\ORM\ModelTable::get('Tags')->getTopTags(50);
        $this->viewData->set('TopTags', $topTags);

        $this->viewData->set('ValidationState', $validationState);
        $this->viewData->set('Request', $this->request);
        $this->viewData->set('currentPage', 'create_post');

        $this->executeView();
    }

}