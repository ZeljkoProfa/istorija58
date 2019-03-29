<?php

namespace AppBundle\Repository;

/**
 * QuizQuestionsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuizQuestionsRepository extends \Doctrine\ORM\EntityRepository {

    public function getLastQuestonNumber($quiz_id) {

        $result =  $this->getEntityManager('u')
                        ->createQuery(
                                'SELECT COUNT (u.number) FROM AppBundle:QuizQuestions u WHERE u.quizId = ' .$quiz_id                         )
                        ->getResult();
        if(!isset($result)){
            return 0;
        }else{
            return $result[0][1];
        }
    }

    public function findTotal($id) {

        /* return $this->getEntityManager()
          ->createQuery(
          'SELECT COUNT (u.question) FROM AppBundle:QuizQuestions u WHERE u.id = ' . $id
          )
          ->getResult(); */
        //$this->createQueryBuilder
        return $this->createQueryBuilder('g')
                        ->select('count(quiz.question)')
                        ->from('AppBundle:QuizQuestions', 'quiz')
                        ->setParameter('id', $id)
                        ->where('g.quizId = :id')
                        ->getQuery()
                        ->execute();
    }

    public function writeTotal($total, $quiz_id) {
        //var_dump($total[0][1]);exit;
        $new_total = $total + 1;
        return $this->createQueryBuilder('e')
                        ->update('AppBundle:Quiz', 'e')
                        ->set('e.total', $new_total)
                        ->setParameter('id', $quiz_id)
                        ->where('e.id = :id')
                        ->getQuery()
                        ->execute();
    }
    
    public function findQuizId(){
        
        
        /*return $this->createQueryBuilder('q')
                        ->select ('quiz.quizId')
                        ->from('AppBundle:QuizQuestions', 'quiz')
                        ->innerJoin('quiz.quizId', 'AppBundle:Quiz:id') 
                        ->getQuery()
                        ->execute();*/
    }

}
