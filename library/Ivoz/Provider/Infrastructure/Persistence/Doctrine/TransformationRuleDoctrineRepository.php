<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\TransformationRule\TransformationRule;
use Ivoz\Provider\Domain\Model\TransformationRule\TransformationRuleRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * TransformationRulesDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TransformationRuleDoctrineRepository extends ServiceEntityRepository implements TransformationRuleRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TransformationRule::class);
    }
}
