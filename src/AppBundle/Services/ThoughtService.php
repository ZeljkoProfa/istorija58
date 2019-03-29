<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class ThoughtService
{
    private $em;
    private $repository;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository('AppBundle:Thoughts');
    }

    public function getThought()
    {

        $thoughtOfTheDay = '';
        /* Get random thought each day for all day! */
        $date = date('Y-m-d');
        $old_date = $this->repository->getOldThoughtDate();

        if(!empty($old_date)) {
            $old_date = $old_date[0]['test_date'];

            if ($old_date instanceof \DateTime) {
                $old_date->format('Y-m-d');
            }

            if ($date == $old_date->format('Y-m-d')) {
                /* If thought is not changed (if it is still same date) just get tought and show it */
                $thoughtOfTheDay = $this->repository->getThought();
            } else {
                $this->repository->writeNewDate($date);
                $thoughtOfTheDay = $this->repository->getThought();
            }
        }

        return $thoughtOfTheDay[0];
    }
}