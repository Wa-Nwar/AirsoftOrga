<?php

namespace App\Repository;

use App\Entity\AirsoftUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AirsoftUser>
 *
 * @method AirsoftUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method AirsoftUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method AirsoftUser[]    findAll()
 * @method AirsoftUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AirsoftUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AirsoftUser::class);
    }

//    /**
//     * @return AirsoftUser[] Returns an array of AirsoftUser objects
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

//    public function findOneBySomeField($value): ?AirsoftUser
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
