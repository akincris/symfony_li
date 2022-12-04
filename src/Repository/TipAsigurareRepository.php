<?php

namespace App\Repository;

use App\Entity\TipAsigurare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TipAsigurare>
 *
 * @method TipAsigurare|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipAsigurare|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipAsigurare[]    findAll()
 * @method TipAsigurare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipAsigurareRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipAsigurare::class);
    }

    public function save(TipAsigurare $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TipAsigurare $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TipAsigurare[] Returns an array of TipAsigurare objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TipAsigurare
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
