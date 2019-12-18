<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\RoutingPatternGroupsRelPattern\RoutingPatternGroupsRelPattern;
use Ivoz\Provider\Domain\Model\RoutingPatternGroupsRelPattern\RoutingPatternGroupsRelPatternRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * RoutingPatternGroupsRelPatternDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoutingPatternGroupsRelPatternDoctrineRepository extends ServiceEntityRepository implements RoutingPatternGroupsRelPatternRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RoutingPatternGroupsRelPattern::class);
    }
}
