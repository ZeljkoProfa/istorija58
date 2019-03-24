<?php

namespace AppBundle\Repository;



/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function getStudsCategories(){
        return $this->getEntityManager()->createQuery(
                "SELECT u.id, u.title FROM AppBundle:Category u WHERE u.teachers = 0"
                )->getResult();
    }
    
    public function getTeachersCategories(){
        return $this->getEntityManager()->createQuery(
                "SELECT u.id, u.title FROM AppBundle:Category u WHERE u.teachers = 1 "
                )->getResult();
    }
    
    /**
     * Get categories for back/nav
     * 
     */
    public function getCategoriesBack() {
        return $this->getEntityManager()->createQuery(
                "SELECT u.id, u.title FROM AppBundle:Category u"
                )->getResult();
    }

}
