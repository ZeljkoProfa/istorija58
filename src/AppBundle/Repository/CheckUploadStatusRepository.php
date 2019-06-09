<?php 
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CheckUploadStatusRepository extends EntityRepository
{
    public function editStatusRep($status)
    {
        return $this->getEntityManager()
                        ->createQuery(/** @lang mysql */
                                'UPDATE AppBundle:CheckUploadStatus:status u SET u.status = :status'
                        )
                        ->setParameter('status', $status)
                        ->getResult();
    }
    
    public function checkStatusRep()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u.status FROM AppBundle:CheckUploadStatus u WHERE u.id = 1'
            )
            ->getResult();
    }
}
