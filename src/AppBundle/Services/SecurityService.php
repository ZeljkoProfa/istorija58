<?php
/**
 * Created by PhpStorm.
 * User: zeljko
 * Date: 24.3.19.
 * Time: 15.36
 */

namespace AppBundle\Services;


use AppBundle\Entity\Comment;

class SecurityService
{
    public function commentCheck(Comment $comment)
    {
        $bodyBool = $this->checkForLinks($comment->getBody());
        $authorBool = $this->checkForLinks($comment->getAuthor());

        if($bodyBool && $authorBool){
            return true;
        }

        return false;
    }

    public function checkForLinks($text)
    {
        if(strpos($text, 'http') !== false){
            return false;
        }

        if(strpos($text, '.org') !== false){
            return false;
        }

        if(strpos($text, '.com') !== false){
            return false;
        }

        if(strpos($text, '.online') !== false){
            return false;
        }

        if(strpos($text, '.net') !== false){
            return false;
        }

        if(strpos($text, '.io') !== false){
            return false;
        }

        if(strpos($text, 'dot com') !== false){
            return false;
        }

        if(strpos($text, 'dotcom') !== false){
            return false;
        }

        return true;
    }
}