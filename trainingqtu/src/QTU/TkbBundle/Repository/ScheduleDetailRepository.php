<?php
namespace QTU\TkbBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * Description of ScheduleDetailRepository
 *
 * @author PDT
 */
class ScheduleDetailRepository extends EntityRepository {
    
    public function findIn($startDay, $endDay){
        $qb = $this->createQueryBuilder('sd');
        $qb->where($qb->expr()->between('sd.dateOccur', ':start', ':stop'))
                ->orderBy('sd.room', 'ASC')
                ->orderBy('sd.dateOccur', 'ASC')
                ->orderBy('sd.period', 'ASC')
                ->setParameter('start', \DateTime::createFromFormat('d/m/Y',$startDay))
                ->setParameter('stop',\DateTime::createFromFormat('d/m/Y',$endDay))
                ;
        return $qb->getQuery()->getResult();
    }
    public function findInRoom($startDay, $endDay, $room){
        $qb = $this->createQueryBuilder('sd');
        $qb->where($qb->expr()->between('sd.dateOccur', ':start', ':stop'))
                ->andWhere('sd.room = :room')
                ->orderBy('sd.room', 'ASC')
                ->orderBy('sd.dateOccur', 'ASC')
                ->orderBy('sd.period', 'ASC')
                ->setParameter('start', \DateTime::createFromFormat('d/m/Y',$startDay))
                ->setParameter('stop',\DateTime::createFromFormat('d/m/Y',$endDay))
                ->setParameter('room', $room)
                ;
        return $qb->getQuery()->getResult();
    }
}
