<?php 
namespace AppBundle\Repository;

use AppBundle\Entity\CheckUploadStatus;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * CheckUploadStatusRepository
 *
 */
class CheckUploadStatusRepository extends EntityRepository {
    
    // save status.
    public function editStatusRep($status) {
        
        return $this->getEntityManager()
                        ->createQuery(
                                'UPDATE AppBundle:CheckUploadStatus:status u SET u.status = :status'
                        )
                        ->setParameter('status', $status)
                        ->getResult();
    }
    
    public function checkStatusRep() {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u.status FROM AppBundle:CheckUploadStatus u WHERE u.id = 1'
            )
            ->getResult();
    }
    
}