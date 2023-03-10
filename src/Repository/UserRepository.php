<?php

namespace App\Repository;

use App\Entity\PropertySearch;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Query;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function save(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);

        $this->save($user, true);
    }


    public function findOneById($user): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.id = :id')
            ->setParameter('id', $user)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    // public function myFindAll()
    // {
    //     return $this->createQueryBuilder('user')
    //         ->select('user.roles')
    //         ->andWhere('user.roles = :roles')
    //         // ->andWhere('user.id = :id')
    //         // ->setParameter('id', $user)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

    // public function myFindRole($roles)
    // {
    //     $qb = $this->createQueryBuilder('u');
    //     $qb->where('u.roles = :roles')
    //     ->setParameter('roles', $roles);
        
    //     return $qb->getQuery()
    //         ->getResult();
    // }

    // public function countUser($user)
    //  {
    //     $queryBuilder = $this->createQueryBuilder();

    //     $queryBuilder->select('COUNT(u.id)')
    //         ->from(User::class, 'u');

    //     $query = $queryBuilder->getQuery();

    //     echo $query->getDQL(), "\n";
    //     echo $query->getSingleScalarResult();
    //  }
}
