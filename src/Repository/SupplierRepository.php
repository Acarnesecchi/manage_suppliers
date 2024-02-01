<?php

namespace App\Repository;

use App\Entity\Supplier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\SupplierEnum;

/**
 * @extends ServiceEntityRepository<Supplier>
 *
 * @method Supplier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Supplier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Supplier[]    findAll()
 * @method Supplier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupplierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Supplier::class);
    }

    public function findAllActive(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT s
            FROM App\Entity\Supplier s
            WHERE s.active = true'
        );

        return $query->getResult();
    }

    public function findByType(int $type): array
    {
        $entityManager = $this->getEntityManager();

        $supplierEnumQuery = $entityManager->createQuery(
            'SELECT s
            FROM App\Entity\SupplierEnum s
            WHERE s.id = :type'
        )->setParameter('type', $type);

        $supplierEnum = $supplierEnumQuery->getOneOrNullResult();

        if (!$supplierEnum) {
            return [];
        }

        return $this->createQueryBuilder('s')
            ->where('s.type = :type')
            ->setParameter('type', $supplierEnum)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Supplier[] Returns an array of Supplier objects
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

//    public function findOneBySomeField($value): ?Supplier
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
