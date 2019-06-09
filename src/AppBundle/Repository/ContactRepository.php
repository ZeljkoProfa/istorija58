<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

class ContactRepository extends \Doctrine\ORM\EntityRepository
{

    public function getLastContactAdded($limit, $currentPage = 1)
    {
        $query = $this->createQueryBuilder('u')
                ->orderBy('u.id', 'DESC')
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

    public function getContactsLastTen()
    {
        return $this->getEntityManager()
                ->createQuery(
                        'SELECT u.id, u.author, u.created, u.email, u.body FROM AppBundle:Contact u ORDER BY u.id DESC'
                )->setMaxResults(15)
                ->getResult();
    }

    public function backup()
    {
        $sql = /** @lang mysql */
            "SELECT * INTO OUTFILE '/tmp/result.txt'
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            FROM bannedd_ip;";
        $em = $this->getEntityManager();

        try {
            $em->getConnection()->query($sql);
        }catch (\Exception $e){

        }
    }
}
