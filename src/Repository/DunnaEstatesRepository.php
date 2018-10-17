<?php

namespace App\Repository;

use App\Entity\DunnaEstates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DunnaEstates|null find($id, $lockMode = null, $lockVersion = null)
 * @method DunnaEstates|null findOneBy(array $criteria, array $orderBy = null)
 * @method DunnaEstates[]    findAll()
 * @method DunnaEstates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DunnaEstatesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DunnaEstates::class);
    }

    /**
     * @return array
     */
    public function findAllEstates(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT
            citys.city as city,
            city_area.name as city_area,
            streets.name as street_name,
            street_number,
            property_type.type as property_type,
            google_coordinates,
            price,
            area,
            rooms,
            floor,
            deal_type.name as deal_type,
            contact_person.name as contact_name,
            contact_person.surname as contact_surname,
            contact_person.email as contact_email,
            contact_person.phone_number as contact_phone_number,
            url,
            description
            FROM dunna_estates as estates
            LEFT JOIN citys ON estates.city_key = citys.id
            LEFT JOIN city_area ON estates.city_area_key = city_area.id
            LEFT JOIN streets ON estates.street_name_key = streets.id
            LEFT JOIN property_type ON estates.property_type_key = property_type.id
            LEFT JOIN contact_person ON estates.contact_person_key = contact_person.id
            LEFT JOIN deal_type ON estates.deal_type_key = deal_type.id
            ';
         return $conn->fetchAll($sql);

    }

//    /**
//     * @return DunnaEstates[] Returns an array of DunnaEstates objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DunnaEstates
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
