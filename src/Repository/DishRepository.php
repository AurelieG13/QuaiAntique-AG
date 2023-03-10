<?php

namespace App\Repository;

use App\Entity\Dish;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dish>
 *
 * @method Dish|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dish|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dish[]    findAll()
 * @method Dish[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DishRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dish::class);
    }

    public function save(Dish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function search($words = null, $categorie = null)
    {
        $query = $this->createQueryBuilder('dish');
        if($words !== null) {
            $query->andWhere('MATCH_AGAINST(dish.name) AGAINST (:words boolean)>0')
                ->setParameter('words', $words);
        }

        if($categorie !== null) {
            $query->leftJoin('dish.categorie', 'c');
            $query->andWhere('c.id = :id')
                ->setParameter('id', $categorie);
        }

        return $query->getQuery()->getResult();
    }

    public function findBySearch($search): array
    {
        return $this->createQueryBuilder('dish')
            ->andWhere('dish.name LIKE :search')
            ->setParameter('search', '%'.$search.'%')
            ->orderBy('dish.name', 'DESC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

}
