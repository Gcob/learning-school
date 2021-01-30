<?php

namespace App\Repository;

use App\Entity\Vecteur2d;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vecteur2d|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vecteur2d|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vecteur2d[]    findAll()
 * @method Vecteur2d[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Vecteur2dRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vecteur2d::class);
    }

    // /**
    //  * @return Vecteur2d[] Returns an array of Vecteur2d objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vecteur2d
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
