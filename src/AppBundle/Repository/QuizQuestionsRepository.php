<?php

namespace AppBundle\Repository;

class QuizQuestionsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastQuestonNumber($quiz_id)
    {

        $result =  $this->getEntityManager()
                ->createQuery(
                        'SELECT COUNT (u.number) FROM AppBundle:QuizQuestions u WHERE u.quizId = ' .$quiz_id                         )
                ->getResult();

        if(!isset($result)){
            return 0;
        }else{
            return $result[0][1];
        }
    }

    public function findTotal($id)
    {
        return $this->createQueryBuilder('g')
                        ->select('count(quiz.question)')
                        ->from('AppBundle:QuizQuestions', 'quiz')
                        ->setParameter('id', $id)
                        ->where('g.quizId = :id')
                        ->getQuery()
                        ->execute();
    }

    public function writeTotal($total, $quiz_id)
    {
        $new_total = $total + 1;
        return $this->createQueryBuilder('e')
                        ->update('AppBundle:Quiz', 'e')
                        ->set('e.total', $new_total)
                        ->setParameter('id', $quiz_id)
                        ->where('e.id = :id')
                        ->getQuery()
                        ->execute();
    }
}
