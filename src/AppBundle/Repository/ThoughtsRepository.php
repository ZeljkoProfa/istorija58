<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping;
use Monolog\Logger;

class ThoughtsRepository extends \Doctrine\ORM\EntityRepository
{
    public function writeNewDate($date)
    {
        $sql = /** @lang mysql */
            "UPDATE thoughts 
            SET test_date = :test_date,
            current_thought = (SELECT id FROM (SELECT * FROM thoughts ORDER BY RAND() LIMIT 1 ) as m ) 
            WHERE id = 1";
        $params = [
            'test_date' => $date
        ];

        try {
            $em = $this->getEntityManager();
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute($params);
        }catch (\Exception $e){
        }
    }

    public function getThought()
    {
        $sql = /** @lang mysql */
            "SELECT * FROM thoughts WHERE id = (SELECT current_thought FROM thoughts WHERE id = 1)";

        try{
            $em = $this->getEntityManager();
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();
        }catch (\Exception $e){
            return false;
        }

        return $stmt->fetchAll();
    }

    public function getOldThoughtDate()
    {
        return $this->getEntityManager()
                ->createQuery(
                        "SELECT u.test_date FROM AppBundle:Thoughts u WHERE u.id = 1 "
                )
                ->getResult();
    }
}
