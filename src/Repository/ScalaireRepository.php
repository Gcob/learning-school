<?php

namespace App\Repository;

use App\Entity\Scalaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Scalaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scalaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scalaire[]    findAll()
 * @method Scalaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScalaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scalaire::class);
    }

    // /**
    //  * @return Scalaire[] Returns an array of Scalaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Scalaire
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
