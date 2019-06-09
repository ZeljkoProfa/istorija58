<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

class VideoRepository extends \Doctrine\ORM\EntityRepository
{
    public function getVideos($limit, $currentPage = 1)
    {
        $query = $this->createQueryBuilder('u')
                ->orderBy('u.id', 'DESC')
                ->getQuery();
        $paginator = $this->paginate($query, $currentPage, $limit);

        return $paginator;
    }

    public function searchVids($string, $currentPage = 1)
    {
        $query = $this->createQueryBuilder('u')
                ->where('u.status = 1', 'u.title LIKE :string')
                ->setParameter('string', '%' . $string . '%')
                ->orderBy('u.id', 'DESC')
                ->getQuery();
        $paginator = $this->paginate($query, $currentPage);

        return $paginator;
    }

    public function paginate($dql, $page = 1, $limit = 10)
    {
        $paginator = new Paginator($dql);
        $paginator->setUseOutputWalkers(false);
     
        $paginator->getQuery()
                ->setFirstResult($limit * ($page - 1)) 
                ->setMaxResults($limit);

        return $paginator;
    }
}
