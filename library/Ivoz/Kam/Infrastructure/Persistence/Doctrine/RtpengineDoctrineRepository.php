<?php

namespace Ivoz\Kam\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Kam\Domain\Model\Rtpengine\Rtpengine;
use Ivoz\Kam\Domain\Model\Rtpengine\RtpengineRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * RtpengineDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RtpengineDoctrineRepository extends ServiceEntityRepository implements RtpengineRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Rtpengine::class);
    }
}
