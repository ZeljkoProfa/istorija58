<?php
/**
 * Created by PhpStorm.
 * User: zeljko
 * Date: 24.3.19.
 * Time: 15.36
 */

namespace AppBundle\Services;


use AppBundle\Entity\Comment;
use Doctrine\ORM\EntityManager;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class SecurityService
{
    private $em;
    private $logger;
    private $remoteIp;
    private $httpClientIp;
    private $proxy;

    public function __construct(EntityManager $em, LoggerInterface $logger)
    {
        $this->em = $em;
        $this->logger = $logger;
    }

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

        if(strpos(strtolower($text), strtolower('Спасибо')) !== false){
            return false;
        }

        if(strpos($text, 'Спасибо') !== false){
            return false;
        }

        return true;
    }

    public function checkIp(Request $request)
    {
        $this->remoteIp = $request->server->get('REMOTE_ADDR');
        $this->httpClientIp = $request->server->get('HTTP_CLIENT_IP');
        $this->proxy = $request->server->get('HTTP_X_FORWARDED_FOR');

        if($this->checkRemoteIp($this->remoteIp)){
            return false;
        }

        if($this->checkHttpClientIp($this->httpClientIp)){
            return false;
        }

        if($this->checkProxy($this->proxy)){
            return false;
        }

        return true;
    }

    public function checkRemoteIp($remoteIp) {
        try {
            $sql = /** @lang mysql */
                'SELECT ip, banned FROM bannedd_ip WHERE ip = :ip AND banned = 1';
            $params = ['ip' => $remoteIp];
            $stmt = $this->em->getConnection()->prepare($sql);
            $status = $stmt->execute($params);
            if ($status) {
                $row = $stmt->fetch();
            }
        }catch (\Exception $e){
            $this->logger->error('Error while checking remote IP. Error '.$e->getMessage());
        }

        return empty($row) ? false : true;
    }

    public function checkHttpClientIp($httpClientIp) {
        try{
        $sql = /** @lang mysql */
            'SELECT ip, banned FROM bannedd_ip WHERE ip = :ip AND banned = 1';
        $params = ['ip' => $httpClientIp];
        $stmt = $this->em->getConnection()->prepare($sql);
        $status = $stmt->execute($params);
        if ($status) {
            $row = $stmt->fetch();
        }
        }catch (\Exception $e){
            $this->logger->error('Error while checking http client IP. Error '.$e->getMessage());
        }

        return empty($row) ? false : true;
    }

    public function checkProxy($proxy) {
        try{
        $sql = /** @lang mysql */
            'SELECT ip, banned FROM bannedd_ip WHERE ip = :ip AND banned = 1';
        $params = ['ip' => $proxy];
        $stmt = $this->em->getConnection()->prepare($sql);
        $status = $stmt->execute($params);
        if ($status) {
            $row = $stmt->fetch();
        }
        }catch (\Exception $e){
            $this->logger->error('Error while checking proxy. Error '.$e->getMessage());
        }

        return empty($row) ? false : true;
    }

    public function takeIp($id, $origin = 'contact')
    {
        if ($origin === 'contact') {
            $sql = /** @lang mysql */
                'SELECT ip FROM ip WHERE contact_id = :contact_id';
            $params = ['contact_id' => $id];
        } else if ($origin === 'post') {
            $sql = /** @lang mysql */
                'SELECT ip FROM ip WHERE post_id = :post_id';
            $params = ['post_id' => $id];
        } else if ($origin === 'comment') {
            $sql = /** @lang mysql */
                'SELECT ip FROM ip WHERE comment_id = :comment_id';
            $params = ['comment_id' => $id];
        }

        try {
            $stmt = $this->em->getConnection()->prepare($sql);
            $stmt->execute($params);
            $userIp = $stmt->fetch();
        }catch (\Exception $e){
            $this->logger->error('Error while getting Ip. Error '.$e->getMessage());
        }

        return $userIp;
    }

    public function writeIps($xId, $origin)
    {
        if ($origin === 'contact') {
            $sql = /** @lang mysql */
                'INSERT INTO ip (ip, client_ip, contact_id,  proxy, created) VALUES (
                :ip, :client_ip, :contact_id,  :proxy, NOW())';
            $params = [
                'ip' => $this->remoteIp,
                'proxy' => $this->proxy,
                'contact_id' => $xId,
                'client_ip' => $this->httpClientIp
            ];
        } else if ($origin === 'post') {
            $sql = /** @lang mysql */
                'INSERT INTO ip (ip, client_ip, post_id,  proxy, created) VALUES (
                :ip, :client_ip, :post_id,  :proxy, NOW())';
            $params = [
                'ip' => $this->remoteIp,
                'proxy' => $this->proxy,
                'post_id' => $xId,
                'client_ip' => $this->httpClientIp
            ];
        } else if ($origin === 'comment') {
            $sql = /** @lang mysql */
                'INSERT INTO ip (ip, client_ip, comment_id, proxy, created) VALUES (
                :ip, :client_ip, :comment_id,  :proxy, NOW())';
            $params = [
                'ip' => $this->remoteIp,
                'proxy' => $this->proxy,
                'comment_id' => $xId,
                'client_ip' => $this->httpClientIp
            ];
        }

        try {
            $stmt = $this->em->getConnection()->prepare($sql);
            $stmt->execute($params);
        }catch (\Exception $e){
            $this->logger->error('Error while writing IP to database. Error '.$e->getMessage());
        }
    }

}