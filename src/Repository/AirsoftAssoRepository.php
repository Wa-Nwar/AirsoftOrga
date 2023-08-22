<?php

namespace App\Repository;

use App\Entity\AirsoftAsso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AirsoftAsso>
 *
 * @method AirsoftAsso|null find($id, $lockMode = null, $lockVersion = null)
 * @method AirsoftAsso|null findOneBy(array $criteria, array $orderBy = null)
 * @method AirsoftAsso[]    findAll()
 * @method AirsoftAsso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AirsoftAssoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AirsoftAsso::class);
    }

//    /**
//     * @return AirsoftAsso[] Returns an array of AirsoftAsso objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AirsoftAsso
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
