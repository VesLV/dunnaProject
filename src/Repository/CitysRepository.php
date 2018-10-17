<?php

namespace App\Repository;

use App\Entity\Citys;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Citys|null find($id, $lockMode = null, $lockVersion = null)
 * @method Citys|null findOneBy(array $criteria, array $orderBy = null)
 * @method Citys[]    findAll()
 * @method Citys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CitysRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Citys::class);
    }

//    /**
//     * @return Citys[] Returns an array of Citys objects
//     */
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
    public function findOneBySomeField($value): ?Citys
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
