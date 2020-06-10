<?php

namespace Customize\Repository;

use Customize\Entity\CustomerChannel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CustomerChannel|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerChannel|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerChannel[]    findAll()
 * @method CustomerChannel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerChannelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerChannel::class);
    }

    // /**
    //  * @return CustomerChannel[] Returns an array of CustomerChannel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomerChannel
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
