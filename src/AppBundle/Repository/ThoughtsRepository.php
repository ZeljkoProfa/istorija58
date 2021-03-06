<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Query\ResultSetMapping;

/**
 * Thoughts Repository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ThoughtsRepository extends \Doctrine\ORM\EntityRepository {

    public function writeNewDate($date) {
        $sql = "UPDATE thoughts 
        SET test_date = :test_date,
        current_thought = (SELECT id FROM (SELECT * FROM thoughts ORDER BY RAND() LIMIT 1 ) as m ) 
        WHERE id = 1";
        $params = [
            'test_date' => $date
        ];
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute($params);
        //return $stmt->fetchAll();
    }

    public function getThought() {

        $sql = "SELECT * FROM thoughts WHERE id = (SELECT current_thought FROM thoughts WHERE id = 1)";

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        //$rsm = new ResultSetMapping();
// build rsm here

        /* $query = $this->getEntityManager()->createNativeQuery('SELECT * FROM thoughts ', $rsm);
          //$query->setParameter(1, 'romanb');

          $thought = $query->getResult();
          return $thought;
          return $this->getEntityManager()
          ->createQuery(
          //'SELECT u.id, u.title, u.author, u.created, u.body FROM AppBundle:Post u WHERE u.status = 1 ORDER BY u.id DESC'
          "SELECT u.* FROM AppBundle:Thoughts u WHERE u.current_thought "
          )->setMaxResults(1)
          ->getResult(); */
    }

    public function getOldThoughtDate() {
        return $this->getEntityManager()
                        ->createQuery(
                                //'SELECT u.id, u.title, u.author, u.created, u.body FROM AppBundle:Post u WHERE u.status = 1 ORDER BY u.id DESC'
                                "SELECT u.test_date FROM AppBundle:Thoughts u WHERE u.id = 1 "
                        )
                        ->getResult();
    }

}
