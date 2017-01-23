<?php
namespace QTU\TkbBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CourseRepository
 *
 * @author PDT
 */
class CourseRepository extends EntityRepository {
    
    public function findCourseByClass($className,$termId)
    {
        $qb = $this->createQueryBuilder('c');
        return $qb->innerJoin('c.classes', 'clp')
                ->where('clp.name like :classname')
                ->andWhere('c.term = :termid')
//                ->andWhere('c.startAt >= :start')
//                ->andWhere('c.startAt >= :start')
//                ->andWhere($qb->expr()->between('c.startAt', ':start', ':stop'))
//                ->andWhere($qb->expr()->between('c.stopAt', ':start', ':stop'))
                ->andWhere('c.finish = 0')
                ->setParameter('classname', $className)
                ->setParameter('termid', $termId)
//                ->setParameter('start', \DateTime::createFromFormat('d/m/Y',$time_start))
//                ->setParameter('stop',\DateTime::createFromFormat('d/m/Y',$time_end))
            ->getQuery()->getResult();
    }
    
    public function findCourseBy($faculty, $className, $courseName, $instructorName, $term, $time_start, $time_end)
    {
        $qb = $this->createQueryBuilder('c');
//        $qb->where($qb->expr()->between('c.startAt', ':start', ':stop'))
//                ->andWhere($qb->expr()->between('c.stopAt', ':start', ':stop'))
////                ->andWhere('c.finish = 0')
//                ->setParameter('start', \DateTime::createFromFormat('d/m/Y',$time_start))
//                ->setParameter('stop',\DateTime::createFromFormat('d/m/Y',$time_end))
//                ;
        if($faculty!='') {
            $qb->innerJoin('c.classes', 'clpf')
                ->innerJoin('clpf.faculty', 'f')
                ->andWhere('f.id = :faculty')
                ->setParameter('faculty', $faculty);
        }
        if($className!='') {
            $qb->innerJoin('c.classes', 'clp')
                ->andWhere('clp.name like :classname')
                ->setParameter('classname', $className);
        }
        if($courseName!='') {
            $qb->andWhere('c.name like :courseName')
                ->setParameter('courseName', '%'.$courseName.'%');
        }
        if($instructorName!='') {
            $qb->innerJoin('c.instructors', 'i')
                ->andWhere('CONCAT(i.lastname, \' \',i.firstname) like :instructorName')
                ->setParameter('instructorName', '%'.trim($instructorName).'%');
        }
        if($term!='') {
            $qb->andWhere('c.term = :term')
                ->setParameter('term', $term);
        }
        return $qb->getQuery()->getResult();
    }
    public function findCourseByInstructor($instructorId, $term_id)
    {
        $qb = $this->createQueryBuilder('c');
        if($term_id != '') {
            $qb->where('c.term = :term_id')
                    ->setParameter('term_id', $term_id)
                    ;
        } else {
            $qb->where('c.term is null');
        }
        if($instructorId!='') {
            $qb->innerJoin('c.instructors', 'i')
                ->andWhere('i.id = :instructorId')
                ->setParameter('instructorId', $instructorId);
            return $qb->getQuery()->getResult();
        } else {
            return null;
        }
        
    }
}
