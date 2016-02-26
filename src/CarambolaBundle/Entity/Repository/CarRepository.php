<?php

namespace CarambolaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarRepository extends EntityRepository
{
    public function getCarsForRental()
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c')
            ->addOrderBy('c.class', 'ASC');

        return $qb->getQuery()
            ->getResult();
    }
}