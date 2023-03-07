<?php

namespace App\Repository;

use App\Entity\Menu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Menu>
 *
 * @method Menu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Menu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Menu[]    findAll()
 * @method Menu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Menu::class);
    }

    public function save(Menu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Menu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function search($words = null, $formule = null)
    {
        $query = $this->createQueryBuilder('menu');
        if($words !== null) {
            $query->andWhere('MATCH_AGAINST(menu.name) AGAINST (:words boolean)>0')
            ->setParameter('words', $words);
        }

        if($formule !== null) {
            $query->leftJoin('menu.formules', 'f');
            $query->andWhere('f.id = :id')
                ->setParameter('id', $formule);
        }

        return $query->getQuery()->getResult();
    }

    public function findBySearch($search): array
    {
        return $this->createQueryBuilder('menu')
            ->andWhere('menu.name LIKE :search')
            ->setParameter('search', '%'.$search.'%')
            ->orderBy('menu.name', 'DESC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

}
