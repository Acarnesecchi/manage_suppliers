<?php

namespace App\Repository;

use App\Entity\SupplierEnum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupplierEnum>
 *
 * @method SupplierEnum|null find($id, $lockMode = null, $lockVersion = null)
 * @method SupplierEnum|null findOneBy(array $criteria, array $orderBy = null)
 * @method SupplierEnum[]    findAll()
 * @method SupplierEnum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupplierEnumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupplierEnum::class);
    }

//    /**
//     * @return SupplierEnum[] Returns an array of SupplierEnum objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SupplierEnum
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
