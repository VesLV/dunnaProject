<?php

namespace App\Repository;

use App\Entity\Streets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Streets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Streets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Streets[]    findAll()
 * @method Streets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StreetsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Streets::class);
    }

//    /**
//     * @return Streets[] Returns an array of Streets objects
//     */
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
    public function findOneBySomeField($value): ?Streets
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
