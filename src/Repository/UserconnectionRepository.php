<?php

namespace App\Repository;

use App\Entity\Userconnection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Userconnection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userconnection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userconnection[]    findAll()
 * @method Userconnection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserconnectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userconnection::class);
    }

    // /**
    //  * @return Userconnection[] Returns an array of Userconnection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Userconnection
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
