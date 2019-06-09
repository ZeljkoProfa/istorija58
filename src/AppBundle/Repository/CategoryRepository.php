<?php

namespace AppBundle\Repository;

class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function getStudsCategories()
    {
        return $this->getEntityManager()->createQuery(
                "SELECT u.id, u.title FROM AppBundle:Category u WHERE u.teachers = 0"
                )->getResult();
    }
    
    public function getTeachersCategories()
    {
        return $this->getEntityManager()->createQuery(
                "SELECT u.id, u.title FROM AppBundle:Category u WHERE u.teachers = 1 "
                )->getResult();
    }

    public function getCategoriesBack()
    {
        return $this->getEntityManager()->createQuery(
                "SELECT u.id, u.title FROM AppBundle:Category u"
                )->getResult();
    }
}
