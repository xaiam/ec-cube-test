<?php

namespace Customize\Repository;

use Customize\Entity\CustomerRank;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CustomerRank|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerRank|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerRank[]    findAll()
 * @method CustomerRank[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerRankRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerRank::class);
    }

    // /**
    //  * @return CustomerRank[] Returns an array of CustomerRank objects
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
    public function findOneBySomeField($value): ?CustomerRank
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
