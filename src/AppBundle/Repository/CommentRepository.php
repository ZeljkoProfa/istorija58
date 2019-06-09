<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

class CommentRepository extends \Doctrine\ORM\EntityRepository
{
    public function getComments($currentPage = 1, $limit = 10)
    {
        $query = $this->createQueryBuilder('c')
                    ->where('c.status = 1', 'c.parentId is null')
                    ->orderBy('c.id', 'DESC')
                    ->getQuery();

        $paginator = $this->paginate($query, $currentPage, $limit);

        return $paginator;
    }

    public function getLastCommentAddedBack($limit, $currentPage = 1)
    {
        $query = $this->createQueryBuilder('c')
                    ->orderBy('c.id', 'DESC')
                    ->getQuery();
        $paginator = $this->paginate($query, $currentPage, $limit);

        return $paginator;
    }

    public function paginate($dql, $page = 1, $limit = 10)
    {
        $paginator = new Paginator($dql);
        $paginator->setUseOutputWalkers(false);

        $paginator->getQuery()
                ->setFirstResult($limit * ($page - 1)) 
                ->setMaxResults($limit); // Limit

        return $paginator;
    }
    
    public function getCommentsLastTen()
    {
        return $this->getEntityManager()
                ->createQuery(
                        'SELECT c.id, c.author, c.status, c.created, c.body FROM AppBundle:Comment c ORDER BY c.id DESC'
                )->setMaxResults(15)
                ->getResult();
    }
}
